<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data report</title>
    <style>
        table.static{
            position: relativ;
            border: 1px solid black;
        }
        table.static tr td{
            text-align: center;
            padding: 5px 0;
        }
    </style>
</head>
<body>
    <div class="form-group">
        <h1 align="center">Financial Data Reports</h1>
        <table class="static" align="center" rules="all" border="1px" style="width: 70%">
            <tr>
                <th>No</th>
                <th>Keterangan</th>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
                <th>Tanggal</th>
            </tr>
            @forelse($expense as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->pemasukan }}</td>
                <td>{{ $item->pengeluaran }}</td>
                <td>{{ $item->created_at->format('d/m/y') }}</td>
            </tr>
            @empty
            <tr>
                <td class="border px-4 py-2 text-center" colspan="6">Tidak ada data</td>
            </tr>
            @endforelse
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>