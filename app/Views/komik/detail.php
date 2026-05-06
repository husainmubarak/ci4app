<?= $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2"><?=$komik['judul']; ?> Detail</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?=$komik['sampul']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?=$komik['judul']; ?></h5>
                            <p class="card-text"><b><?=$komik['penulis']; ?></b></p>
                            <p class="card-text"><small class="text-body-secondary"><b><?=$komik['penerbit']; ?></b></small></p>

                            <a href="/komik/<?=$komik['slug']; ?>/edit" class="btn btn-warning">Edit</a>
                            <a href="/komik/<?=$komik['slug']; ?>/delete" class="btn btn-danger">Hapus</a>
                            <a href="/komik" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>