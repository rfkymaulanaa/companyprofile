<?php include 'template/header.php'; ?>

<?php
include 'template/navbar.php';
include 'template/sidebar.php';
?>
<!-- 4. KONTEN UTAMA -->
<main class="main-content">
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $file_path = 'page/' . $page . '.php';

    if (file_exists($file_path)) {
        include $file_path;
    } else {
        echo '<div class="card content-card"><div class="card-body p-4 p-md-5">';
        echo '<h2 class="text-danger fw-bold mb-4">Error 404: Halaman Tidak Ditemukan</h2>';
        echo '<p class="text-muted">Maaf, halaman yang Anda cari tidak ada.</p>';
        echo '</div></div>';
    }
    ?>
</main>

<?php include 'template/footer.php'; ?>
<?php include 'component/modals.php'; ?>

<!-- Bootstrap JS Bundle (via CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');

    function toggleSidebar() {
        sidebar.classList.toggle('show');
        sidebarOverlay.classList.toggle('show');
    }

    sidebarToggle.addEventListener('click', toggleSidebar);
    sidebarOverlay.addEventListener('click', toggleSidebar);

    const allNavLinks = document.querySelectorAll('#main-nav-tab .nav-link, #v-pills-tab .nav-link');

    allNavLinks.forEach(link => {
        if (link.getAttribute('data-bs-toggle') === 'pill') {
            link.addEventListener('click', (event) => {
                document.querySelectorAll('[data-bs-toggle="pill"]').forEach(l => l.classList.remove('active'));
                const targetHref = event.currentTarget.getAttribute('href');
                document.querySelectorAll(`a[href="${targetHref}"]`).forEach(matchingLink => {
                    matchingLink.classList.add('active');
                });
            });
        }
    });
</script>
</body>

</html>