<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Buku yang Ditulis oleh {{ $penulis->nama }}</h1>
    <ul>
        @foreach ($penulis->buku as $buku)
            <li>
                <a href="{{ route('buku.show', $buku->isbn) }}">{{ $buku->judul }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>