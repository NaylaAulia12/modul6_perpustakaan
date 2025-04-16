<!DOCTYPE html>
<html>
<head>
    <title>Daftar Perpustakaan dan Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-5">
    <div class="container">
        <h1 class="mb-4">Daftar Perpustakaan dan Buku</h1>

        @foreach ($perpustakaans as $perpustakaan)
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <strong>{{ $perpustakaan->nama }}</strong> - {{ $perpustakaan->alamat }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">Buku:</h5>
                    <ul>
                        @foreach ($perpustakaan->bukus as $buku)
                            <li>
                                <strong>{{ $buku->judul }}</strong> oleh {{ $buku->pengarang }} ({{ $buku->tahun_terbit }})
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
