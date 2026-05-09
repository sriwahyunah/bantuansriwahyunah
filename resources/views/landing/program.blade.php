<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Bantuan</title>

    <!-- Bootstrap -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container mt-5">

    <h1 class="text-center mb-5">
        PROGRAM BANTUAN
    </h1>

    <div class="row">

        @foreach($program as $item)

            <div class="col-md-4 mb-4">

                <div class="card shadow-sm h-100">

                    <div class="card-body">

                        <h4>
                            {{ $item->judul }}
                        </h4>

                        <p>
                            {{ $item->deskripsi }}
                        </p>

                        <a href="{{ route('program.detail', $item->id) }}"
                           class="btn btn-primary">
                            Detail
                        </a>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</div>

</body>
</html>