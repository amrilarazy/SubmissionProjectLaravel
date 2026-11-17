<!DOCTYPE html>
<html>
<head>
    <title>Data Mata Kuliah</title>
</head>
<body>

    <h1>Data Mata Kuliah</h1>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('matakuliah.create') }}">
        Tambah Mata Kuliah
    </a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($mataKuliahs as $mataKuliah)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mataKuliah->kode_matakuliah }}</td>
                    <td>{{ $mataKuliah->nama_matakuliah }}</td>
                    <td>{{ $mataKuliah->sks }}</td>
                    <td>
                        <a href="{{ route('matakuliah.show', $mataKuliah->id) }}">
                            Detail
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>