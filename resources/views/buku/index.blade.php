<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Buku</h1>
    <ul>
        @foreach ($buku as $item)
            <li>
                <a href="{{ route('buku.show', $item->isbn) }}">{{ $item->judul }}</a>
                - Ditulis oleh: 
                @foreach ($item->penulis as $penulis)
                    <a href="{{ route('penulis.show', $penulis->id) }}">{{ $penulis->nama }}</a>{{ !$loop->last ? ', ' : '' }}
                @endforeach
            </li>
        @endforeach
    </ul>
</body>
</html>