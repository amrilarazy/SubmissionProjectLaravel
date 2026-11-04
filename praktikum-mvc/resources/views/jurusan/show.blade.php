<h1>Detail Jurusan</h1>

<table border="1" cellpadding="6">
    <tr>
        <th>Kode</th>
        <td>{{ $jurusan->kode }}</td>
    </tr>
    <tr>
        <th>Nama Jurusan</th>
        <td>{{ $jurusan->nama }}</td>
    </tr>
    <tr>
        <th>Dibuat</th>
        <td>{{ $jurusan->created_at->format('d-m-Y H:i') }}</td>
    </tr>
    <tr>
        <th>Terakhir Diubah</th>
        <td>{{ $jurusan->updated_at->format('d-m-Y H:i') }}</td>
    </tr>
</table>