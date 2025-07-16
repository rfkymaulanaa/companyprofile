 <!-- 3. SIDEBAR KIRI -->
 <div class="sidebar" id="sidebar">
     <ul class="nav flex-column nav-pills sidebar-nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
         <li class="nav-item">
             <a class="nav-link dropdown-toggle d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#artikelCollapse" role="button" aria-expanded="false" aria-controls="artikelCollapse">
                 <span><i class="fa-solid fa-newspaper"></i>Artikel</span>
                 <i class="fa-solid fa-chevron-down small"></i>
             </a>
             <div class="collapse" id="artikelCollapse">
                 <div class="collapse-body">
                     <a href="index.php?page=artikel=teknologi" class="nav-link">Konsep Teknologi</a>
                     <a href="index.php?page=artikel=marketing" class="nav-link">Tips Digital Marketing</a>
                     <a href="index.php?page=artikel=desain" class="nav-link">Trend Desain 2025</a>
                 </div>
             </div>
         </li>
         <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'galeri') ? 'active' : ''; ?>" href="index.php?page=galeri"><i class="fa-solid fa-images"></i>Galeri</a></li>
         <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'foto-klien') ? 'active' : ''; ?>" href="index.php?page=foto-klien"><i class="fa-solid fa-users"></i>Foto Klien</a></li>
     </ul>
     <div class="mt-auto">
         <div class="d-grid gap-2 mb-3">
             <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#signInModal">
                 <i class="fa-solid fa-right-to-bracket me-2"></i>Sign In
             </button>
             <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#signUpModal">
                 Sign Up
             </button>
         </div>
     </div>
 </div>
 <div class="sidebar-overlay" id="sidebarOverlay"></div>