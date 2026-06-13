    </main>

    <!-- Footer -->
    <footer class="footer mt-5 py-4">
        <div class="container text-center">
            <h5 class="fw-bold text-primary-gradient mb-3">ระบบครูปิง (KruPing System)</h5>
            <p class="text-muted mb-2">ระบบบริหารจัดการการเรียนการสอนและธุรการครบวงจร</p>
            <div class="social-links mb-3">
                <a href="#" class="btn btn-icon btn-outline-primary rounded-circle me-2"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="btn btn-icon btn-outline-primary rounded-circle me-2"><i class="fa-brands fa-youtube"></i></a>
                <a href="#" class="btn btn-icon btn-outline-primary rounded-circle"><i class="fa-brands fa-line"></i></a>
            </div>
            <small class="text-muted">&copy; <?php echo date('Y'); ?> ระบบครูปิง สงวนลิขสิทธิ์.</small>
        </div>
    </footer>

    <!-- Floating Chatbot -->
    <div class="chatbot-wrapper position-fixed bottom-0 end-0 p-4" style="z-index: 1050;">
        <div id="chatWindow" class="card border-0 soft-shadow rounded-4 mb-3 d-none" style="width: 320px; overflow: hidden;">
            <div class="card-header bg-primary gradient-bg text-white d-flex justify-content-between align-items-center p-3">
                <span class="fw-bold"><i class="bi bi-robot me-2"></i> OS Assistant</span>
                <button type="button" class="btn-close btn-close-white" id="closeChatBtn"></button>
            </div>
            <div class="card-body bg-body-tertiary" style="height: 300px; overflow-y: auto;">
                <div class="d-flex mb-3">
                    <div class="bg-primary-subtle text-dark p-2 rounded-3 small" style="max-width: 80%;">
                        สวัสดีครับ! ผมคือ AI ประจำระบบครูปิง มีอะไรให้ผมช่วยแนะนำไหมครับ?
                    </div>
                </div>
            </div>
            <div class="card-footer bg-body p-2 border-0">
                <div class="input-group">
                    <input type="text" class="form-control border-0 bg-body-tertiary rounded-start-pill px-3" placeholder="พิมพ์คำถาม...">
                    <button class="btn btn-primary rounded-end-pill px-3"><i class="bi bi-send-fill"></i></button>
                </div>
            </div>
        </div>
        
        <button id="chatToggleBtn" class="btn btn-primary btn-lg rounded-circle shadow-lg d-flex align-items-center justify-content-center ms-auto hover-lift" style="width: 60px; height: 60px;">
            <i class="bi bi-chat-dots-fill fs-3"></i>
        </button>
    </div>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Define URLROOT for JS -->
    <script>
        const URLROOT = '<?php echo URLROOT; ?>';
    </script>
    
    <!-- Custom JS -->
    <script src="<?php echo URLROOT; ?>/assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>
