<!DOCTYPE html>
<html lang="th" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo isset($data['description']) ? $data['description'] : SITENAME; ?>">
    <title><?php echo isset($data['title']) ? $data['title'] : SITENAME; ?></title>
    
    <!-- Google Fonts (Thai & English) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- SweetAlert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/style.css">
</head>
<body>
    <!-- 🐕 Corgi Preloader -->
    <div class="preloader-overlay" id="preloader">
        <div class="corgi-loader-wrapper">
            <!-- The Corgi -->
            <div class="corgi-character">🐕</div>
            <!-- The Energy Bar -->
            <div class="energy-bar-container">
                <div class="energy-bar-fill"></div>
            </div>
        </div>
        <div class="loading-text text-gradient">LOADING...</div>
    </div>

    <!-- Navbar (Glassmorphism) -->
    <nav class="navbar navbar-expand-lg fixed-top glass-nav">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary-gradient" href="<?php echo URLROOT; ?>">
                <i class="fa-solid fa-graduation-cap me-2"></i> ระบบครูปิง
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo URLROOT; ?>">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">ข่าวสาร</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">ระบบงาน</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-icon theme-toggle me-3" id="themeToggle" title="สลับโหมดสว่าง/มืด">
                            <i class="fa-solid fa-moon"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo URLROOT; ?>/auth/login" class="btn btn-primary btn-gradient rounded-pill px-4">เข้าสู่ระบบ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Main Content Wrapper -->
    <main class="main-content">
