<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>
<h1>{{ $buku->judul }}</h1>
    <p>ISBN: {{ $buku->isbn }}</p>
    <p>Penulis:
        @foreach ($buku->penulis as $penulis)
            <a href="{{ route('penulis.show', $penulis->id) }}">{{ $penulis->nama }}</a>{{ !$loop->last ? ', ' : '' }}
        @endforeach
    </p>

    <h2>Reviews</h2>
    @if ($buku->review->isEmpty())
        <p>Belum ada review.</p>
    @else
        <ul>
            @foreach ($buku->review as $review)
                <li>
                    <strong>Rating:</strong> {{ $review->rating }}<br>
                    <strong>Komentar:</strong> {{ $review->komentar }}<br>
                    <small>Dibuat pada: {{ $review->waktu_dibuat }}</small>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>