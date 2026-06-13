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
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- FontAwesome (Keep for compatibility) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- SweetAlert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>

    <!-- Standard Loader -->
    <div id="loader" class="loader-wrapper bg-body d-flex flex-column justify-content-center align-items-center">
        <div class="spinner-border text-primary mb-3" style="width: 3rem; height: 3rem;" role="status"></div>
        <h5 class="fw-bold gradient-text" id="loadingText">กำลังเตรียมระบบ...</h5>
    </div>

    <!-- Clean Navbar -->
    <nav class="navbar navbar-expand-lg bg-body shadow-sm sticky-top py-3 transition-all">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4 d-flex align-items-center" href="<?php echo URLROOT; ?>">
                <i class="bi bi-mortarboard-fill text-primary me-2 fs-3"></i> 
                <span class="gradient-text">ระบบครูปิง</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="bi bi-list fs-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto fw-medium">
                    <li class="nav-item"><a class="nav-link px-3" href="<?php echo URLROOT; ?>">หน้าแรก</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#features">ระบบงาน</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#news">ข่าวประชาสัมพันธ์</a></li>
                </ul>
                <div class="d-flex align-items-center mt-3 mt-lg-0">
                    <button class="btn btn-outline-secondary rounded-circle me-3" id="themeToggle" title="สลับโหมดสว่าง/มืด">
                        <i class="bi bi-moon-stars-fill"></i>
                    </button>
                    <a href="<?php echo URLROOT; ?>/auth/login" class="btn btn-primary rounded-pill px-4 shadow-sm hover-lift">เข้าสู่ระบบ</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content Wrapper -->
    <main class="main-content">
