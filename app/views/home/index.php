<!-- Hero Section -->
<section class="hero-section py-5 my-md-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 hero-text text-center text-lg-start">
                <span class="badge bg-primary-subtle text-primary mb-3 px-3 py-2 rounded-pill border border-primary-subtle">เวอร์ชัน 2.0 พร้อมใช้งานแล้ว</span>
                <h1 class="display-4 fw-bolder mb-3">ยกระดับการศึกษาด้วย<br><span class="gradient-text">เทคโนโลยีที่ทันสมัย</span></h1>
                <p class="lead text-muted mb-4">ลดภาระงานเอกสาร เพิ่มเวลาดูแลนักเรียน ด้วยแพลตฟอร์มบริหารจัดการที่ออกแบบมาเพื่อคุณครูโดยเฉพาะ</p>
                <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start gap-3">
                    <a href="#features" class="btn btn-primary btn-lg rounded-pill px-4 shadow hover-lift">ดูระบบทั้งหมด</a>
                    <a href="<?php echo URLROOT; ?>/auth/login" class="btn btn-outline-primary btn-lg rounded-pill px-4 hover-lift">เริ่มต้นใช้งาน</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <div class="position-absolute top-50 start-50 translate-middle w-100 h-100 bg-primary opacity-10 rounded-circle blur-effect"></div>
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&q=80&w=1000" alt="Teaching" class="img-fluid rounded-4 soft-shadow position-relative z-1 hover-lift-img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-primary gradient-bg text-white">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <i class="bi bi-people-fill fs-1 mb-2 opacity-75"></i>
                <h2 class="display-5 fw-bold counter" data-target="1500">0</h2>
                <p class="mb-0 fs-5">นักเรียนในระบบ</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-person-badge fs-1 mb-2 opacity-75"></i>
                <h2 class="display-5 fw-bold counter" data-target="80">0</h2>
                <p class="mb-0 fs-5">รายวิชา</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-phone fs-1 mb-2 opacity-75"></i>
                <h2 class="display-5 fw-bold counter" data-target="100">0</h2>
                <p class="mb-0 fs-5">% รองรับมือถือ</p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5 my-5">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-primary fw-bold">OUR FEATURES</h6>
            <h2 class="fw-bolder">ระบบปฏิบัติการครบวงจร</h2>
            <p class="text-muted">คลิกเพื่อเข้าสู่แต่ละระบบงานย่อย</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo URLROOT; ?>/auth/login" class="text-decoration-none text-body">
                    <div class="card h-100 border-0 feature-card soft-shadow rounded-4 hover-lift">
                        <div class="card-body p-4 text-center">
                            <div class="icon-box bg-primary-subtle text-primary rounded-circle mb-3 mx-auto">
                                <i class="bi bi-house-heart fs-2"></i>
                            </div>
                            <h5 class="fw-bold">งานที่ปรึกษา</h5>
                            <p class="text-muted small mb-0">เช็คชื่อ, เยี่ยมบ้าน, บันทึกพฤติกรรม และประเมิน SDQ/EQ</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo URLROOT; ?>/auth/login" class="text-decoration-none text-body">
                    <div class="card h-100 border-0 feature-card soft-shadow rounded-4 hover-lift">
                        <div class="card-body p-4 text-center">
                            <div class="icon-box bg-success-subtle text-success rounded-circle mb-3 mx-auto">
                                <i class="bi bi-easel2 fs-2"></i>
                            </div>
                            <h5 class="fw-bold">ห้องเรียนดิจิทัล</h5>
                            <p class="text-muted small mb-0">สร้างบทเรียน, สั่งงาน, ตัดเกรด และสอบออนไลน์</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo URLROOT; ?>/auth/login" class="text-decoration-none text-body">
                    <div class="card h-100 border-0 feature-card soft-shadow rounded-4 hover-lift">
                        <div class="card-body p-4 text-center">
                            <div class="icon-box bg-warning-subtle text-warning rounded-circle mb-3 mx-auto">
                                <i class="bi bi-award fs-2"></i>
                            </div>
                            <h5 class="fw-bold">ประเมิน PA / SAR</h5>
                            <p class="text-muted small mb-0">จัดทำข้อตกลง, อัปโหลดหลักฐาน และออกเล่ม SAR อัตโนมัติ</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 offset-md-4 offset-sm-3">
                <a href="<?php echo URLROOT; ?>/auth/login" class="text-decoration-none text-body">
                    <div class="card h-100 border-0 feature-card soft-shadow rounded-4 hover-lift">
                        <div class="card-body p-4 text-center">
                            <div class="icon-box bg-info-subtle text-info rounded-circle mb-3 mx-auto">
                                <i class="bi bi-folder-check fs-2"></i>
                            </div>
                            <h5 class="fw-bold">ระบบธุรการ</h5>
                            <p class="text-muted small mb-0">ยื่นใบลา, สารบรรณ, ลงเวลาเข้าออก และบันทึกอบรม</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section id="news" class="py-5 bg-body-tertiary">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
            <div>
                <h6 class="text-primary fw-bold">LATEST NEWS</h6>
                <h3 class="fw-bolder">ข่าวประชาสัมพันธ์</h3>
            </div>
            <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-3 align-self-start align-self-md-auto">ดูข่าวทั้งหมด</a>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 soft-shadow rounded-4 h-100 overflow-hidden hover-lift-img">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="News 1" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4">
                        <span class="badge bg-primary mb-2">วิชาการ</span>
                        <h5 class="card-title fw-bold">กำหนดการสอบปลายภาคเรียน</h5>
                        <p class="card-text text-muted small">ขอแจ้งกำหนดการสอบปลายภาคเรียนสำหรับนักเรียนทุกคน โดยเริ่มสอบในสัปดาห์หน้า...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 soft-shadow rounded-4 h-100 overflow-hidden hover-lift-img">
                    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="News 2" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4">
                        <span class="badge bg-success mb-2">อบรมครู</span>
                        <h5 class="card-title fw-bold">อบรมการใช้ AI</h5>
                        <p class="card-text text-muted small">ขอเชิญคณะครูเข้าร่วมอบรมเชิงปฏิบัติการ "AI for Education" ในวันศุกร์นี้...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 soft-shadow rounded-4 h-100 overflow-hidden hover-lift-img">
                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="News 3" style="height: 200px; object-fit: cover;">
                    <div class="card-body p-4">
                        <span class="badge bg-warning text-dark mb-2">กิจกรรม</span>
                        <h5 class="card-title fw-bold">งานกีฬาสีประจำปี</h5>
                        <p class="card-text text-muted small">ประมวลภาพความสนุกสนานและสามัคคีในงานกีฬาสีที่จัดขึ้นเมื่อสัปดาห์ที่ผ่านมา...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
