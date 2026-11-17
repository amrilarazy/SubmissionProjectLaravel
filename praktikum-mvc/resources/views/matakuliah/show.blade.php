<!DOCTYPE html>
<html>
<head>
    <title>Detail Mata Kuliah</title>
</head>
<body>

    <h1>Detail Mata Kuliah</h1>

    <p>
        <strong>Kode Mata Kuliah:</strong>
        {{ $mataKuliah->kode_matakuliah }}
    </p>

    <p>
        <strong>Nama Mata Kuliah:</strong>
        {{ $mataKuliah->nama_matakuliah }}
    </p>

    <p>
        <strong>SKS:</strong>
        {{ $mataKuliah->sks }}
    </p>

    <p>
        <strong>Created At:</strong>
        {{ $mataKuliah->created_at }}
    </p>

    <p>
        <strong>Updated At:</strong>
        {{ $mataKuliah->updated_at }}
    </p>

    <a href="{{ route('matakuliah.index') }}">
        Kembali
    </a>

</body>
</html>