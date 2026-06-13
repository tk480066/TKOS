<!-- Hero Section -->
<section class="hero-section d-flex align-items-center position-relative overflow-hidden">
    <!-- Animated background blobs -->
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    
    <div class="container position-relative z-1">
        <div class="row align-items-center min-vh-100 pt-5 mt-5">
            <div class="col-lg-6 mb-5 mb-lg-0 text-center text-lg-start fade-in-up">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-3 px-3 py-2 rounded-pill fw-medium">New Version 2.0</span>
                <h1 class="display-4 fw-bold mb-4 text-gradient">ระบบบริหารการศึกษา<br>ยุคดิจิทัล</h1>
                <p class="lead mb-4 text-muted">ลดภาระงานเอกสาร เพิ่มเวลาพัฒนาผู้เรียน ด้วยระบบประเมินผล จัดทำวิทยฐานะ (PA/SAR) และห้องเรียนดิจิทัลที่ครบจบในที่เดียว</p>
                <div class="d-flex justify-content-center justify-content-lg-start gap-3">
                    <a href="<?php echo URLROOT; ?>/auth/login" class="btn btn-primary btn-gradient rounded-pill px-4 py-2 btn-lg shadow-sm">เข้าสู่ระบบ</a>
                    <a href="#features" class="btn btn-outline-secondary rounded-pill px-4 py-2 btn-lg glass-btn">ดูฟีเจอร์ทั้งหมด</a>
                </div>
                
                <div class="mt-5 d-flex justify-content-center justify-content-lg-start gap-4">
                    <div class="text-center">
                        <h3 class="fw-bold mb-0 text-primary counter" data-target="1500">0</h3>
                        <small class="text-muted">นักเรียน</small>
                    </div>
                    <div class="text-center">
                        <h3 class="fw-bold mb-0 text-primary counter" data-target="80">0</h3>
                        <small class="text-muted">รายวิชา</small>
                    </div>
                    <div class="text-center">
                        <h3 class="fw-bold mb-0 text-primary counter" data-target="100">0</h3>
                        <small class="text-muted">% รองรับมือถือ</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fade-in-up delay-1">
                <!-- Mockup Image / Illustration Container (Using CSS placeholder for now) -->
                <div class="hero-image-wrapper glass-card p-4 rounded-4 shadow-lg position-relative">
                    <div class="mockup-header d-flex gap-2 mb-3">
                        <span class="dot bg-danger rounded-circle"></span>
                        <span class="dot bg-warning rounded-circle"></span>
                        <span class="dot bg-success rounded-circle"></span>
                    </div>
                    <div class="bg-body-secondary rounded-3" style="height: 350px; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-chart-line fa-5x text-muted opacity-50"></i>
                    </div>
                    <!-- Floating Badge -->
                    <div class="floating-badge glass-card p-3 rounded-4 shadow position-absolute top-0 start-0 translate-middle mt-5 ms-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box bg-success bg-opacity-10 text-success rounded-circle p-2">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div>
                                <h6 class="mb-0 fw-bold">PA อนุมัติแล้ว</h6>
                                <small class="text-muted">เมื่อ 2 นาทีที่แล้ว</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5 bg-body-tertiary">
    <div class="container py-5">
        <div class="text-center mb-5 fade-in-up">
            <h2 class="fw-bold text-gradient">ครอบคลุมทุกระบบงานครู</h2>
            <p class="text-muted">ออกแบบมาเพื่อตอบโจทย์การทำงานของครูยุคใหม่</p>
        </div>
        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-md-6 col-lg-3 fade-in-up delay-1">
                <div class="card glass-card h-100 border-0 feature-card p-3">
                    <div class="card-body text-center">
                        <div class="icon-wrapper bg-primary bg-opacity-10 text-primary rounded-circle mb-3 mx-auto">
                            <i class="fa-solid fa-users fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">ระบบงานที่ปรึกษา</h5>
                        <p class="text-muted small">เช็คชื่อ บันทึกพฤติกรรม ประเมิน SDQ/EQ และเยี่ยมบ้าน</p>
                    </div>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-md-6 col-lg-3 fade-in-up delay-2">
                <div class="card glass-card h-100 border-0 feature-card p-3">
                    <div class="card-body text-center">
                        <div class="icon-wrapper bg-success bg-opacity-10 text-success rounded-circle mb-3 mx-auto">
                            <i class="fa-solid fa-laptop-file fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">ห้องเรียนดิจิทัล</h5>
                        <p class="text-muted small">สร้างบทเรียน สั่งงาน ตัดเกรด และสอบออนไลน์</p>
                    </div>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-md-6 col-lg-3 fade-in-up delay-3">
                <div class="card glass-card h-100 border-0 feature-card p-3">
                    <div class="card-body text-center">
                        <div class="icon-wrapper bg-warning bg-opacity-10 text-warning rounded-circle mb-3 mx-auto">
                            <i class="fa-solid fa-file-signature fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">ประเมิน PA / SAR</h5>
                        <p class="text-muted small">จัดทำข้อตกลง อัปโหลดหลักฐาน และออกเล่ม SAR อัตโนมัติ</p>
                    </div>
                </div>
            </div>
            <!-- Feature 4 -->
            <div class="col-md-6 col-lg-3 fade-in-up delay-4">
                <div class="card glass-card h-100 border-0 feature-card p-3">
                    <div class="card-body text-center">
                        <div class="icon-wrapper bg-info bg-opacity-10 text-info rounded-circle mb-3 mx-auto">
                            <i class="fa-solid fa-calendar-check fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">ระบบธุรการ</h5>
                        <p class="text-muted small">ยื่นใบลา สารบรรณ ลงเวลาเข้าออก และบันทึกอบรม PLC</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
