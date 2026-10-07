document.addEventListener('DOMContentLoaded', function () {
    // 1. Sticky Navbar on Scroll
    const header = document.querySelector('.law-header, .site-header');
    if (header) {
        const handleScroll = function () {
            if (window.scrollY > 30) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        };
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll();
    }

    // 2. Auto-collapse mobile navbar on link click
    const navLinks = document.querySelectorAll('.navbar-collapse .nav-link:not(.dropdown-toggle), .navbar-collapse .btn');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    if (navbarCollapse) {
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    }
                }
            });
        });
    }

    // 3. Consultation Form Validation & SweetAlert2 Feedback
    const consultationForms = document.querySelectorAll('#consultationForm, #homeConsultationForm, .law-consultation-form');
    consultationForms.forEach(function (form) {
        form.addEventListener('submit', function (e) {
            if (!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
                form.classList.add('was-validated');

                if (typeof Swal !== 'undefined') {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Formulir Belum Lengkap',
                        text: 'Mohon periksa kembali isian bertanda bintang (*) dan setujui ketentuan sebelum mengirim.',
                        confirmButtonText: 'Periksa Kembali',
                        confirmButtonColor: '#0c1f38'
                    });
                }
                return false;
            }

            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Memproses...';
            }
        });
    });

    // 4. Auto-dismiss Bootstrap Alerts after 6 seconds
    document.querySelectorAll('.alert-dismissible').forEach(function (el) {
        setTimeout(function () {
            const alert = bootstrap.Alert.getOrInitInstance(el);
            if (alert) {
                alert.close();
            }
        }, 6000);
    });

    // 5. Floating WhatsApp Tooltip 5-Second Interval Cycle
    const waTooltip = document.getElementById('waTooltip');
    const waContainer = document.getElementById('waFloatContainer');
    const waClose = document.getElementById('waTooltipClose');
    if (waTooltip) {
        let isHovered = false;
        let isDismissed = false;
        let isVisible = false;

        const showTip = function () {
            if (isDismissed) return;
            waTooltip.classList.add('is-visible');
            waTooltip.setAttribute('aria-hidden', 'false');
            isVisible = true;
        };

        const hideTip = function () {
            if (isHovered) return;
            waTooltip.classList.remove('is-visible');
            waTooltip.setAttribute('aria-hidden', 'true');
            isVisible = false;
        };

        // Muncul pertama kali setelah 1.5 detik
        setTimeout(showTip, 1500);

        // Siklus muncul setiap 5 detik
        setInterval(function () {
            if (isDismissed || isHovered) return;
            if (isVisible) {
                hideTip();
            } else {
                showTip();
            }
        }, 5000);

        // Tetap tampil saat kursor diarahkan ke tooltip atau tombol WA
        const waFloatBtn = waContainer ? waContainer.querySelector('.wa-float') : null;
        [waTooltip, waFloatBtn].forEach(function (el) {
            if (!el) return;
            el.addEventListener('mouseenter', function () {
                isHovered = true;
                showTip();
            });
            el.addEventListener('mouseleave', function () {
                isHovered = false;
            });
        });

        // Tombol tutup tooltip
        if (waClose) {
            waClose.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                hideTip();
                isDismissed = true;
                setTimeout(function () {
                    isDismissed = false;
                }, 30000);
            });
        }
    }
});
