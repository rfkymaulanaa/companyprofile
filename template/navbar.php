 <!-- 1. HEADER UTAMA -->
 <header class="app-header">
     <button class="btn d-lg-none mobile-toggle-btn" type="button" id="sidebarToggle">
         <i class="fa-solid fa-bars"></i>
     </button>
     <i class="fa-solid fa-layer-group logo-icon d-none d-lg-block"></i>
     <h4 class="company-title">Piksel Kreatif</h4>
 </header>

 <!-- 2. NAVIGASI HORIZONTAL -->
 <nav class="secondary-nav">
     <div class="container-fluid">
         <ul class="nav nav-pills" id="main-nav-tab" role="tablist">
             <li class="nav-item"><a class="nav-link <?php echo (!isset($_GET['page']) || $_GET['page'] == 'home') ? 'active' : ''; ?>" href="index.php?page=home">Home</a></li>
             <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'visimisi') ? 'active' : ''; ?>" href="index.php?page=visimisi">Visi & Misi</a></li>
             <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'produk') ? 'active' : ''; ?>" href="index.php?page=produk">Produk Kami</a></li>
             <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'kontak') ? 'active' : ''; ?>" href="index.php?page=kontak">Kontak</a></li>
             <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'about') ? 'active' : ''; ?>" href="index.php?page=about">About us </a></li>
         </ul>
     </div>
 </nav>