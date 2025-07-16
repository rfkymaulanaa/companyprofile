<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piksel Kreatif - Company Profile</title>

    <!-- Bootstrap CSS (via CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome (untuk Ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Pengaturan Variabel */
        :root {
            --bs-primary-rgb: 44, 62, 80;
            /* #2c3e50 */
            --bs-secondary-rgb: 52, 152, 219;
            /* #3498db */
            --bs-success-rgb: 39, 174, 96;
            /* #27ae60 */
            --bs-danger-rgb: 231, 76, 60;
            /* #e74c3c */
            --bs-font-sans-serif: 'Poppins', sans-serif;
            --header-height: 70px;
            --secondary-nav-height: 55px;
        }

        body {
            background-color: #f0f2f5;
            padding-top: calc(var(--header-height) + var(--secondary-nav-height));
            /* Pastikan body memiliki tinggi minimal untuk footer yang menempel di bawah */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* 1. Header Utama (Tetap di Atas) */
        .app-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: var(--header-height);
            background-color: #ffffff;
            z-index: 1030;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            padding: 0 1.5rem;
        }

        .app-header .logo-icon {
            font-size: 2rem;
            color: var(--bs-secondary);
        }

        .app-header .company-title {
            color: var(--bs-primary);
            font-weight: 700;
            margin: 0;
            margin-left: 0.75rem;
        }

        /* 2. Navigasi Horizontal (di bawah Header) */
        .secondary-nav {
            position: fixed;
            top: var(--header-height);
            left: 0;
            right: 0;
            height: var(--secondary-nav-height);
            background-color: var(--bs-primary);
            z-index: 1029;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            padding: 0 1.5rem;
        }

        .secondary-nav .nav-link {
            color: rgba(255, 255, 255, 0.7);
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .secondary-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .secondary-nav .nav-link.active {
            background-color: var(--bs-secondary);
            color: #fff;
        }

        /* 3. Sidebar (di Kiri, di Bawah Header & Nav) */
        .sidebar {
            position: fixed;
            top: calc(var(--header-height) + var(--secondary-nav-height));
            left: 0;
            bottom: 0;
            width: 280px;
            background-color: #ffffff;
            padding: 1.5rem;
            border-right: 1px solid #dee2e6;
            transition: all 0.3s;
            z-index: 1028;
            display: flex;
            flex-direction: column;
        }

        .sidebar-nav .nav-item .nav-link {
            color: #495057;
            padding: 0.8rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .sidebar-nav .nav-item .nav-link i {
            margin-right: 1rem;
            width: 20px;
            text-align: center;
            color: var(--bs-secondary);
        }

        .sidebar-nav .nav-item .nav-link:hover {
            background-color: #f8f9fa;
        }

        .sidebar-nav .dropdown-toggle::after {
            display: none;
        }

        .sidebar-nav .dropdown-toggle .fa-chevron-down {
            transition: transform 0.3s ease;
        }

        .sidebar-nav .dropdown-toggle[aria-expanded="true"] .fa-chevron-down {
            transform: rotate(180deg);
        }

        .collapse-body {
            padding-left: 1.5rem;
        }

        .collapse-body .nav-link {
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
            color: #6c757d;
        }

        .collapse-body .nav-link:hover {
            color: var(--bs-secondary);
        }

        /* 4. Konten Utama */
        .main-content {
            margin-left: 280px;
            padding: 2rem;
            flex-grow: 1;
            /* Membuat konten mengisi ruang yang tersedia */
        }

        .content-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
        }

        /* 5. Footer */
        .main-footer {
            margin-left: 280px;
            /* Sejajar dengan konten utama */
            padding: 1rem 2rem;
            text-align: right;
            font-size: 0.9rem;
            color: #6c757d;
            background-color: #f0f2f5;
            /* Warna sama dengan body */
        }

        /* Penyesuaian untuk layar kecil (Mobile) */
        @media (max-width: 992px) {
            .sidebar {
                left: -280px;
            }

            .sidebar.show {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .mobile-toggle-btn {
                display: block !important;
                color: var(--bs-primary);
                font-size: 1.5rem;
            }

            .app-header .company-title {
                margin-left: auto;
                margin-right: auto;
            }

            .sidebar-overlay {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 1027;
                display: none;
            }

            .sidebar-overlay.show {
                display: block;
            }

            .main-footer {
                margin-left: 0;
                /* Hapus margin kiri di mobile */
                text-align: center;
            }
        }

        .vision-section {
            position: relative;
            background: linear-gradient(rgba(27, 39, 51, 0.85), rgba(61, 104, 147, 0.85));
            border-radius: 1rem;
        }

        .vision-section i {
            color: var(--bs-secondary) !important;
        }

        .mission-section {
            background-color: transparent;
            /* Hapus background agar menyatu dengan body */
        }

        .mission-card {
            border: none;
            border-radius: 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #ffffff;
            overflow: hidden;
            /* Penting untuk efek ikon */
        }

        .mission-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(var(--bs-primary-rgb), 0.15) !important;
        }

        .mission-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .about-hero {
            background: linear-gradient(rgba(44, 62, 80, 0.6), rgba(44, 62, 80, 0.6)), url('assets/images/team.jpg') center center/cover no-repeat;
            border-radius: 1rem;
            min-height: 250px;
        }

        .timeline {
            position: relative;
            padding: 2rem 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 1.5rem;
            height: 100%;
            width: 4px;
            background: #e9ecef;
            border-radius: 2px;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
            padding-left: 4rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: calc(1.5rem - 10px);
            top: 5px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #fff;
            border: 4px solid var(--bs-secondary);
        }

        .timeline-item .year {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--bs-secondary);
        }

        .value-card {
            border: 1px solid #e9ecef;
            border-radius: 1rem;
            transition: all 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(var(--bs-primary-rgb), 0.1);
            border-color: var(--bs-secondary);
        }

        .value-card .icon {
            font-size: 2.5rem;
            color: var(--bs-primary);
        }

        .service-card {
            border: 1px solid #e9ecef;
            border-radius: 1rem;
            transition: all 0.3s ease;
            background-color: #ffffff;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(var(--bs-primary-rgb), 0.1);
            border-color: var(--bs-secondary);
        }

        .service-card .card-header {
            background-color: transparent;
            border-bottom: 1px solid #e9ecef;
            padding: 1.5rem;
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--bs-primary);
        }

        .service-card .list-group-item {
            border-color: #e9ecef;
            color: #6c757d;
        }

        .service-card .list-group-item i {
            color: var(--bs-success);
        }

        .cta-section {
            border-radius: 1rem;
            background-color: var(--bs-primary);
        }

        .contact-card {
            border: 1px solid #e9ecef;
            border-radius: 1rem;
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(var(--bs-primary-rgb), 0.1);
        }

        .contact-card .icon {
            font-size: 2.5rem;
            color: var(--bs-primary);
        }

        .social-links a {
            color: var(--bs-primary);
            font-size: 1.5rem;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--bs-secondary);
        }

        .map-container {
            border-radius: 1rem;
            overflow: hidden;
            height: 400px;
        }

        .article-header-image {
            height: 450px;
            background: linear-gradient(rgba(27, 39, 51, 0.85), rgba(61, 104, 147, 0.85)), center center/cover no-repeat;
            display: flex;
            align-items: flex-end;
            color: white;
            padding: 3rem;
            border-radius: 1rem;
        }

        .article-header-image .category-badge {
            background-color: var(--bs-secondary);
            font-size: 1rem;
            padding: 0.5em 1em;
        }

        .article-header-image .article-title {
            font-family: var(--bs-font-serif);
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .article-meta {
            color: #6c757d;
        }

        .article-meta i {
            color: var(--bs-secondary);
        }

        .article-content {
            font-family: var(--bs-font-serif);
            font-size: 1.1rem;
            line-height: 1.8;
            color: #343a40;
        }

        .article-content h2,
        .article-content h3 {
            font-family: var(--bs-font-sans-serif);
            font-weight: 700;
            color: var(--bs-primary);
            margin-top: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .article-content blockquote {
            border-left: 4px solid var(--bs-secondary);
            padding-left: 1.5rem;
            font-style: italic;
            color: #6c757d;
            margin: 2rem 0;
        }

        .share-buttons a {
            font-size: 1.2rem;
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            margin-right: 0.5rem;
            transition: transform 0.3s ease;
        }

        .share-buttons a:hover {
            transform: scale(1.1);
        }

        .filter-buttons .btn {
            margin: 0 0.5rem;
            border-radius: 2rem;
            font-weight: 600;
        }

        .gallery-grid {
            column-count: 3;
            column-gap: 1rem;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 0.75rem;
            margin-bottom: 1rem;
            display: inline-block;
            width: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1rem;
            color: white;
            opacity: 0;
            transition: opacity 0.4s ease;
            cursor: pointer;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .gallery-item .overlay .icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.8);
            font-size: 2.5rem;
            opacity: 0;
            transition: all 0.4s ease;
        }

        .gallery-item:hover .overlay .icon {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }

        .modal-lg {
            max-width: 900px;
        }

        .modal-content {
            border: none;
        }

        .modal-body {
            padding: 0;
        }

        .modal-body img {
            border-radius: 0.5rem;
        }

        .modal-caption {
            text-align: center;
            color: white;
            margin-top: 1rem;
        }

        .client-logo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 2rem;
        }

        .client-logo-item {
            padding: 1.5rem;
            background-color: #ffffff;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            border: 1px solid #e9ecef;
        }

        .client-logo-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(var(--bs-primary-rgb), 0.1);
        }

        .client-logo-item img {
            max-width: 100%;
            height: auto;
            transition: all 0.3s ease;
        }

        .client-logo-item:hover img {
            filter: grayscale(0%);
            opacity: 1;
        }

        .testimonial-section {
            background-color: var(--bs-primary);
            border-radius: 1rem;
        }

        .testimonial-section blockquote {
            font-size: 1.25rem;
            font-style: italic;
        }

        .testimonial-section .blockquote-footer {
            color: rgba(255, 255, 255, 0.7);
        }
    </style>
</head>

<body>