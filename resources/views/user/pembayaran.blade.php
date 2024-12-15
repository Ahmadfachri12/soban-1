<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>
<body>
    <h1>Pembayaran Pesanan</h1>
    <p>Silakan klik tombol di bawah untuk melakukan pembayaran.</p>

    <!-- Tombol Pembayaran -->
    <button id="pay-button">Bayar Sekarang</button>

    <script type="text/javascript">
        // Ambil Snap Token yang diterima dari controller
        var snapToken = "{{ $snapToken }}";

        // Event handler untuk tombol bayar
        document.getElementById('pay-button').onclick = function () {
            // Memanggil Snap pop-up Midtrans dengan token
            snap.pay(snapToken, {
                onSuccess: function(result){
                    alert("Pembayaran berhasil!");
                    // Anda bisa mengarahkan ke halaman sukses pembayaran atau update status pembayaran
                    window.location.href = "/pesanan/berhasil/" + result.order_id;
                },
                onPending: function(result){
                    alert("Pembayaran sedang diproses.");
                    // Anda bisa mengarahkan ke halaman proses pembayaran atau menunggu konfirmasi
                },
                onError: function(result){
                    alert("Terjadi kesalahan saat pembayaran.");
                    // Handle error jika ada masalah dengan pembayaran
                }
            });
        }
    </script>
</body>
</html>
