<!DOCTYPE html>
<html>

<head>

    <title>Cetak Laporan Bulanan</title>

    <style>

        body{
            font-family: Arial;
        }

        table{
            width:100%;
            border-collapse: collapse;
        }

        table, th, td{
            border:1px solid black;
            padding:8px;
        }

    </style>

</head>

<body onload="window.print()">

<h2 align="center">
    LAPORAN BULANAN
</h2>

<hr>

<table>

    <thead>

        <tr>

            <th>No</th>
            <th>Penerima</th>
            <th>Jumlah Bantuan</th>
            <th>Tanggal</th>

        </tr>

    </thead>

    <tbody>

        @foreach ($penyalurans as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->penerima->nama ?? '-' }}</td>

            <td>
                Rp {{ number_format($item->jumlah_bantuan,0,',','.') }}
            </td>

            <td>{{ $item->tanggal }}</td>

        </tr>

        @endforeach

    </tbody>

</table>

</body>
</html>