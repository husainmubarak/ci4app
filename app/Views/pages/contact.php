
<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Me</h1>
            <p>Anda dapat menghubungi saya melalui</p>

            <?php foreach ($alamant as $a) : ?>
                <ul>
                    <li><?= $a['tipe'] ?></li>
                    <li><?= $a['alamat'] ?></li>
                    <li><?= $a['kota'] ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>