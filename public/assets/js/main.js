document.addEventListener('DOMContentLoaded', () => {
    // 1. Theme Toggle (Dark Mode)
    const themeToggleBtn = document.getElementById('themeToggle');
    const htmlElement = document.documentElement;
    const themeIcon = themeToggleBtn.querySelector('i');

    // ตรวจสอบ Theme เดิมจาก LocalStorage
    const savedTheme = localStorage.getItem('theme') || 'light';
    htmlElement.setAttribute('data-theme', savedTheme);
    updateThemeIcon(savedTheme);

    themeToggleBtn.addEventListener('click', () => {
        const currentTheme = htmlElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        
        htmlElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateThemeIcon(newTheme);
    });

    function updateThemeIcon(theme) {
        if(theme === 'dark') {
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        } else {
            themeIcon.classList.remove('fa-sun');
            themeIcon.classList.add('fa-moon');
        }
    }

    // 2. Animated Counter
    const counters = document.querySelectorAll('.counter');
    const speed = 200; // ค่าความเร็วในการนับ (ยิ่งน้อยยิ่งเร็ว)

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 20); // ทำซ้ำทุก 20ms
            } else {
                counter.innerText = target;
            }
        };

        // เริ่มนับเมื่อ Scroll มาถึง (ใช้ IntersectionObserver)
        const observer = new IntersectionObserver((entries) => {
            if(entries[0].isIntersecting) {
                updateCount();
                observer.disconnect(); // นับแค่ครั้งเดียว
            }
        });
        observer.observe(counter);
    });

    // 3. Navbar Shrink on Scroll
    const navbar = document.querySelector('.glass-nav');
    window.addEventListener('scroll', () => {
        if(window.scrollY > 50) {
            navbar.style.padding = '0.5rem 0';
            navbar.style.boxShadow = 'var(--glass-shadow)';
        } else {
            navbar.style.padding = '1rem 0';
            navbar.style.boxShadow = 'none';
        }
    });
});

// ฟังก์ชัน Utility สำหรับแสดง Toast Notification ด้วย SweetAlert2
function showToast(icon, title) {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        background: document.documentElement.getAttribute('data-theme') === 'dark' ? '#1e1e1e' : '#ffffff',
        color: document.documentElement.getAttribute('data-theme') === 'dark' ? '#ffffff' : '#000000'
    });

    Toast.fire({
        icon: icon, // 'success', 'error', 'warning', 'info'
        title: title
    });
}
