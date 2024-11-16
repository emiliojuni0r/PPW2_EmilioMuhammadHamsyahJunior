<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum Pemrograman Web</title>
</head>

<body>
    <h2>Pengguna Baru Terdaftar</h2>
    <p><strong>Nama:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Deskripsi:</strong> {{ $data['body'] }}</p>
    <p>Terima kasih,</p>
    <p>Tim Website</p>
</body>

</html>
