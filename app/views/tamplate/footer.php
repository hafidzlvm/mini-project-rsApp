</div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var alert = document.getElementById('alert');
        var closeAlert = document.getElementById('closeAlert');

        // Tangani penutupan pesan peringatan
        closeAlert.addEventListener('click', function () {
            alert.style.display = 'none'; // Sembunyikan pesan peringatan saat tombol ditutup
        });
        // Sembunyikan pesan peringatan setelah beberapa detik (opsional)
        setTimeout(function () {
            alert.style.display = 'none';
        }, 3000); // 3000 milidetik (3 detik), sesuaikan dengan kebutuhan Anda
    });
</script>
</body>

</html>