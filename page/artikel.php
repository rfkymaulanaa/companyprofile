<?php
$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : 'semua';
?>

<div class="card content-card">
    <div class="card-body p-4 p-md-5">

        <?php
        // Gunakan switch untuk menampilkan konten berdasarkan kategori
        switch ($kategori) {
            case 'teknologi':
                echo '<div class="col-lg-12 mb-4">
                <article>
                    <!-- Header Gambar & Judul -->
                    <header class="article-header-image mb-4">
                        <div>
                            <span class="badge rounded-pill category-badge mb-2">Teknologi</span>
                            <h1 class="article-title display-4">Memahami Revolusi Industri 4.0 dan Dampaknya</h1>
                        </div>
                    </header>
                    
                    <div class="article-meta d-flex align-items-center mb-4">
                        <span class="me-4"><i class="fa-solid fa-user me-2"></i>Oleh Admin</span>
                        <span><i class="fa-solid fa-calendar-days me-2"></i>10 Juli 2025</span>
                    </div>

                    <!-- Isi Artikel -->
                    <div class="article-content">
                        <p class="lead">Revolusi Industri 4.0, atau yang sering disebut sebagai era siber-fisik, merupakan sebuah lompatan besar dalam dunia industri yang mengintegrasikan teknologi digital ke dalam setiap aspek proses produksi dan operasional. Ini bukan sekadar tentang otomatisasi, melainkan tentang menciptakan ekosistem yang cerdas, terhubung, dan efisien.</p>
                        
                        <p>Konsep ini pertama kali diperkenalkan di Jerman dan berfokus pada implementasi teknologi canggih seperti Internet of Things (IoT), Kecerdasan Buatan (AI), Big Data, dan Cloud Computing. Tujuannya adalah untuk menciptakan "pabrik cerdas" (smart factory) di mana mesin, sistem, dan manusia dapat berkomunikasi dan bekerja sama secara real-time.</p>

                        <h2>Pilar Utama Industri 4.0</h2>
                        <p>Ada beberapa teknologi yang menjadi pilar utama dalam menyokong terwujudnya Industri 4.0:</p>
                        <ul>
                            <li><strong>Internet of Things (IoT):</strong> Jaringan perangkat fisik yang saling terhubung, memungkinkan pengumpulan dan pertukaran data secara masif.</li>
                            <li><strong>Kecerdasan Buatan (AI):</strong> Kemampuan mesin untuk belajar dari data dan membuat keputusan cerdas tanpa intervensi manusia.</li>
                            <li><strong>Big Data & Analytics:</strong> Kemampuan untuk mengolah volume data yang sangat besar untuk menemukan pola, tren, dan wawasan bisnis.</li>
                            <li><strong>Cloud Computing:</strong> Penyimpanan dan akses data serta program melalui internet, bukan lagi di hard drive komputer lokal.</li>
                        </ul>

                        <blockquote>Dampak dari Industri 4.0 tidak hanya terasa di lantai pabrik, tetapi juga merambah ke model bisnis, rantai pasok, dan bahkan cara kita bekerja dan hidup sehari-hari.</blockquote>

                        <h3>Tantangan dan Peluang</h3>
                        <p>Meskipun menawarkan banyak peluang, adopsi Industri 4.0 juga datang dengan tantangan. Keamanan siber menjadi isu krusial karena semakin banyak perangkat yang terhubung ke internet. Selain itu, dibutuhkan investasi besar dalam teknologi dan pengembangan sumber daya manusia yang memiliki keterampilan digital yang mumpuni.</p>
                        <p>Namun, bagi perusahaan yang berhasil beradaptasi, peluangnya sangat besar. Mereka dapat mencapai efisiensi operasional yang lebih tinggi, menciptakan produk yang lebih personal, dan memberikan layanan pelanggan yang lebih baik, yang pada akhirnya akan meningkatkan daya saing di pasar global.</p>
                    </div>
                </article>
            </div>';
                break;

            case 'marketing':
                echo '    <div class="col-lg-12 mb-4">
                <article>
                    <!-- Header Gambar & Judul -->
                    <header class="article-header-image mb-4">
                        <div>
                            <span class="badge rounded-pill category-badge mb-2">Digital Marketing</span>
                            <h1 class="article-title display-4">5 Strategi SEO Jitu untuk Pemula di Tahun 2025</h1>
                        </div>
                    </header>
                    
                    <!-- Meta Info: Penulis & Tanggal -->
                    <div class="article-meta d-flex align-items-center mb-4">
                        <span class="me-4"><i class="fa-solid fa-user me-2"></i>Oleh Tim Marketing</span>
                        <span><i class="fa-solid fa-calendar-days me-2"></i>12 Juli 2025</span>
                    </div>

                    <!-- Isi Artikel -->
                    <div class="article-content">
                        <p class="lead">Di era digital yang semakin kompetitif, muncul di halaman pertama Google bukanlah lagi sebuah pilihan, melainkan keharusan. Search Engine Optimization (SEO) adalah kunci untuk membuka gerbang visibilitas online. Bagi pemula, SEO mungkin terdengar rumit. Namun, dengan strategi yang tepat, Anda bisa mulai mendatangkan trafik organik yang berkualitas.</p>
                        
                        <p>Berikut adalah lima strategi SEO mendasar namun sangat efektif yang bisa Anda terapkan mulai hari ini untuk meningkatkan peringkat website Anda di tahun 2025.</p>

                        <h2>1. Riset Kata Kunci yang Berfokus pada Niat Pengguna</h2>
                        <p>Lupakan menjejalkan kata kunci sebanyak-banyaknya. Google kini jauh lebih pintar dalam memahami *niat* (intent) di balik pencarian. Fokuslah pada *long-tail keywords* (frasa kata kunci yang lebih panjang dan spesifik).</p>
                        <ul>
                            <li><strong>Informatif:</strong> "cara merawat tanaman hias di dalam ruangan"</li>
                            <li><strong>Komersial:</strong> "jual pupuk organik banjarmasin"</li>
                            <li><strong>Transaksional:</strong> "harga jasa desain logo murah"</li>
                        </ul>
                        <p>Gunakan tools seperti Google Keyword Planner atau Ubersuggest untuk menemukan kata kunci yang relevan dengan bisnis Anda dan memiliki volume pencarian yang baik.</p>

                        <h2>2. Optimasi On-Page yang Solid</h2>
                        <p>On-Page SEO adalah praktik mengoptimalkan elemen-elemen di dalam halaman website Anda. Ini adalah fondasi yang harus kokoh.</p>
                        <ul>
                            <li><strong>Judul Halaman (Title Tag):</strong> Buat judul yang menarik dan mengandung kata kunci utama (kurang dari 60 karakter).</li>
                            <li><strong>Meta Deskripsi:</strong> Tulis deskripsi singkat yang menggoda orang untuk mengklik (sekitar 155 karakter).</li>
                            <li><strong>Header Tags (H1, H2, H3):</strong> Gunakan H1 untuk judul utama, dan H2/H3 untuk sub-judul untuk menstrukturkan konten Anda.</li>
                        </ul>

                        <blockquote>Konten adalah raja, tetapi optimasi teknis adalah singgasananya. Keduanya harus berjalan beriringan untuk hasil maksimal.</blockquote>

                        <h2>3. Buat Konten Berkualitas Tinggi dan Relevan</h2>
                        <p>Google menyukai konten yang benar-benar menjawab pertanyaan pengguna. Daripada membuat banyak artikel pendek, lebih baik buat satu artikel panjang yang komprehensif dan mendalam. Pastikan konten Anda:</p>
                        <ul>
                            <li><strong>Original:</strong> Bukan hasil salin-tempel dari situs lain.</li>
                            <li><strong>Bermanfaat:</strong> Memberikan solusi atau informasi yang dicari pengguna.</li>
                            <li><strong>Mudah Dibaca:</strong> Gunakan paragraf pendek, poin-poin, dan gambar untuk memecah teks.</li>
                        </ul>

                        <h2>4. Pastikan Website Cepat dan Mobile-Friendly</h2>
                        <p>Pengalaman pengguna adalah faktor peringkat yang sangat penting. Dua hal teknis yang tidak bisa ditawar adalah kecepatan dan tampilan mobile.</p>
                        <ul>
                            <li><strong>Kecepatan Halaman:</strong> Gunakan Google PageSpeed Insights untuk memeriksa kecepatan website Anda dan ikuti rekomendasinya. Kompres gambar dan gunakan hosting yang andal.</li>
                            <li><strong>Mobile-Friendly:</strong> Pastikan website Anda terlihat dan berfungsi dengan baik di semua ukuran layar, terutama smartphone.</li>
                        </ul>

                        <h2>5. Mulai Bangun Tautan Lokal (Local Link Building)</h2>
                        <p>Backlink (tautan dari website lain ke website Anda) adalah sinyal kepercayaan bagi Google. Sebagai pemula, mulailah dari lingkungan terdekat. Daftarkan bisnis Anda di Google Business Profile dan direktori lokal di Banjarmasin. Ajak mitra bisnis atau klien untuk memberikan tautan ke website Anda.</p>
                    </div>

                    <hr class="my-5">

                    <!-- Tombol Berbagi -->
                    <div class="d-flex align-items-center">
                        <h5 class="fw-bold me-3 mb-0">Bagikan Artikel:</h5>
                        <div class="share-buttons">
                            <a href="#" class="bg-facebook" title="Bagikan ke Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="bg-twitter" title="Bagikan ke Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="bg-whatsapp" title="Bagikan ke WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </article>
            </div>';
                break;

            default:
                echo '<h2 class="text-primary fw-bold mb-4">Semua Artikel</h2>';
                echo '<p class="text-muted">Selamat datang di halaman artikel kami. Silakan pilih kategori dari menu di samping.</p>';
                break;
        }
        ?>

    </div>
</div>