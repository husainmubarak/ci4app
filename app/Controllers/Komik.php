<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{

    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {
        $komik = $this->komikModel->getKomik();
        $data = [
            'title' => 'Komik | Husain Al Mubarak',
            'komik' => $komik
        ];

        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $komik = $this->komikModel->getKomik($slug);
         if(empty($komik)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Komik ' . $slug . ' tidak ditemukan.');
        }

        $data = [
            'title' => "$komik[judul] | Husain Al Mubarak",
            'komik' => $komik
        ];

       

        return view('komik/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Komik | Husain Al Mubarak'
        ];

        return view('komik/create', $data);
    }

    public function save()
    {
       $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => url_title($this->request->getVar('judul'), '-', true),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setflashdata('success',' Data berhasil ditambahkan.');

        return redirect()->to('/komik');
    }
}
