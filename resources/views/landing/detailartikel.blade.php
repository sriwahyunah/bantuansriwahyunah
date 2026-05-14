<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-body">

            <h2 class="mb-3">
                {{ $artikel->judul ?? 'Detail Artikel' }}
            </h2>

            <p class="text-muted">
                {{ $artikel->created_at ?? now() }}
            </p>

            <hr>

            <p>
                {{ $artikel->isi ?? 'Isi artikel belum tersedia.' }}
            </p>

            <a href="/" class="btn btn-primary">
                Kembali
            </a>

        </div>

    </div>

</div>

</body>
</html>