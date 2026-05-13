<!DOCTYPE html>
<html>

<head>

    <title>Cetak Laporan Tahunan</title>

</head>

<body onload="window.print()">

<h2 align="center">
    LAPORAN TAHUNAN
</h2>

<hr>

<table border="1"
       width="100%"
       cellpadding="8"
       cellspacing="0">

    <tr>

        <th>No</th>
        <th>Penerima</th>
        <th>Jumlah Bantuan</th>
        <th>Tanggal</th>

    </tr>

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

</table>

</body>
</html>