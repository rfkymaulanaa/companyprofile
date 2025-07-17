<?php
$data = ambildata("SELECT * FROM galeri");
?>
<div class="text-center mb-5">
    <h1 class="display-5 fw-bold text-primary">Galeri Kegiatan</h1>
    <p class="lead text-muted col-lg-8 mx-auto">Momen-momen berharga yang terekam dalam perjalanan kami membangun karya dan tim yang solid.</p>
    <?php if (isset($_SESSION['login']) && $_SESSION['login'] === true): ?>
        <button class="btn btn-success rounded-pill ms-lg-auto" data-bs-toggle="modal" data-bs-target="#addPhotoModal">
            <i class="fa-solid fa-plus me-2"></i>Tambah Foto
        </button>
    <?php endif; ?>
</div>

<div class="gallery-grid">
    <?php foreach ($data as $key => $value) : ?>
        <div class="gallery-item" data-category="acara" data-index="0">
            <img src="assets/images/galeri/<?= $value['foto']; ?>" alt="<?= $value['judul']; ?>" class="img-fluid">
            <div class="overlay" data-bs-toggle="modal" data-bs-target="#galleryModal">
                <h5 class="title mb-0"> <?= $value['judul']; ?> </h5>
            </div>
        </div>
    <?php endforeach ?>
</div>
</div>