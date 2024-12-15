<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pembayaran</title>
</head>
<body>
    <h1>Status Pembayaran Pesanan #{{ $pesanan->id }}</h1>
    
    <p>Status Pembayaran: {{ $pesanan->status_pembayaran }}</p>

    @if($pesanan->status_pembayaran == 'Berhasil')
        <p>Terima kasih telah melakukan pembayaran. Pesanan Anda sedang diproses.</p>
    @elseif($pesanan->status_pembayaran == 'Pending')
        <p>Pembayaran Anda sedang diproses.</p>
    @else
        <p>Terjadi masalah dengan pembayaran Anda. Silakan coba lagi.</p>
    @endif
</body>
</html>
