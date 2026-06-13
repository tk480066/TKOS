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
