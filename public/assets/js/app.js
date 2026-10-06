document.addEventListener('DOMContentLoaded', function () {
    // Auto-dismiss bootstrap alerts after 6s
    document.querySelectorAll('.alert-dismissible').forEach(function (el) {
        setTimeout(function () {
            var alert = bootstrap.Alert.getOrInitInstance(el);
            if (alert) {
                alert.close();
            }
        }, 6000);
    });

    // Confirm consultation submit with SweetAlert2 (progress feedback)
    var form = document.getElementById('consultationForm');
    if (form) {
        form.addEventListener('submit', function () {
            var btn = form.querySelector('button[type="submit"]');
            if (btn && form.checkValidity()) {
                btn.disabled = true;
                btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Mengirim...';
            }
        });
    }
});
