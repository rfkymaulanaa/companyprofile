<?php
$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : 'semua';
$articles = ambildata("SELECT * FROM articles WHERE kategori = '$kategori' OR '$kategori' = 'semua' ORDER BY upload_date DESC");
$categories = [
    'teknologi' => 'Teknologi',
    'marketing' => 'Digital Marketing',
    'desain' => 'Trend Desain',
];
?>

<div class="card content-card">
    <div class="card-body p-4 p-md-5">

        <div class="container-fluid p-0">
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                <div class="text-center text-md-start">
                    <h1 class="display-5 fw-bold text-primary mb-1">Pustaka Artikel</h1>
                    <p class="lead text-muted">Jelajahi wawasan dan pengetahuan terbaru dari tim kami.</p>
                </div>

                <?php // Tombol Tambah Artikel hanya muncul jika pengguna login 
                ?>
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] === true): ?>
                    <button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#addArticleModal">
                        <i class="fa-solid fa-plus me-2"></i>Tambah Artikel Baru
                    </button>
                <?php endif; ?>
            </div>

            <div class="card content-card">
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>Judul Artikel</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($articles)): ?>
                                    <tr>
                                        <td colspan="3" class="text-center text-muted py-4">Belum ada artikel yang tersedia.</td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($articles as $article): ?>
                                        <tr>
                                            <td>
                                                <div class="fw-bold text-primary"><?php echo htmlspecialchars($article['tittle']); ?></div>
                                                <div class="small text-muted">Diunggah pada: <?php echo date('d M Y', strtotime($article['upload_date'])); ?></div>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge bg-secondary"><?php echo htmlspecialchars($categories[$article['kategori']] ?? 'Lainnya'); ?></span>
                                            </td>
                                            <td class="text-center">
                                                <a href="download.php?id=<?php echo $article['id']; ?>" class="btn btn-sm btn-success" title="Download File">
                                                    <i class="fa-solid fa-download me-1"></i> Download
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- component/modals.php -->

        <!-- ... (Modal Sign In, Sign Up, Logout, dan Gallery tetap sama) ... -->