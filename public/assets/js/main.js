// Loader Logic
window.addEventListener('load', () => {
    const loader = document.getElementById('loader');
    if (loader) {
        setTimeout(() => {
            loader.classList.add('fade-out');
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500); // Wait for transition
        }, 800); // Show loader for a minimum of 800ms
    }
});

document.addEventListener('DOMContentLoaded', () => {
    // 1. Theme Toggle (Dark Mode)
    const themeToggleBtn = document.getElementById('themeToggle');
    const htmlElement = document.documentElement;
    const themeIcon = themeToggleBtn.querySelector('i');

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
            themeIcon.classList.remove('bi-moon-stars-fill');
            themeIcon.classList.add('bi-brightness-high-fill');
        } else {
            themeIcon.classList.remove('bi-brightness-high-fill');
            themeIcon.classList.add('bi-moon-stars-fill');
        }
    }

    // 2. Animated Counter
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 20);
            } else {
                counter.innerText = target;
            }
        };

        const observer = new IntersectionObserver((entries) => {
            if(entries[0].isIntersecting) {
                updateCount();
                observer.disconnect();
            }
        });
        observer.observe(counter);
    });

    // 3. Navbar Shrink on Scroll
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if(window.scrollY > 50) {
            navbar.style.padding = '0.5rem 0';
            navbar.classList.add('shadow');
            navbar.classList.remove('shadow-sm');
        } else {
            navbar.style.padding = '1rem 0';
            navbar.classList.add('shadow-sm');
            navbar.classList.remove('shadow');
        }
    });

    // 4. Chatbot Toggle Logic
    const chatToggleBtn = document.getElementById('chatToggleBtn');
    const closeChatBtn = document.getElementById('closeChatBtn');
    const chatWindow = document.getElementById('chatWindow');

    if (chatToggleBtn && closeChatBtn && chatWindow) {
        chatToggleBtn.addEventListener('click', () => {
            chatWindow.classList.toggle('d-none');
            // Animate icon change
            const icon = chatToggleBtn.querySelector('i');
            if(chatWindow.classList.contains('d-none')) {
                icon.classList.remove('bi-x-lg');
                icon.classList.add('bi-chat-dots-fill');
            } else {
                icon.classList.remove('bi-chat-dots-fill');
                icon.classList.add('bi-x-lg');
            }
        });

        closeChatBtn.addEventListener('click', () => {
            chatWindow.classList.add('d-none');
            const icon = chatToggleBtn.querySelector('i');
            icon.classList.remove('bi-x-lg');
            icon.classList.add('bi-chat-dots-fill');
        });
    }
});

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
        icon: icon,
        title: title
    });
}
