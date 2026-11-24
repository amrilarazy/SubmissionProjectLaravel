
<!DOCTYPE html>
<html>
<head>
    <title>Data Berita</title>
</head>
<body>

    <h2>Daftar Data Berita</h2>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('berita.create') }}">Tambah Berita</a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0"
           style="width: 100%; border-collapse: collapse;">

        <thead>
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 20%;">Judul Berita</th>
                <th style="width: 40%;">Isi Berita</th>
                <th style="width: 15%;">Kategori Berita</th>
                <th style="width: 20%;">Tanggal Dibuat</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($beritas as $berita)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $berita->judul_berita }}</td>

                    <td>
                        {{ \Illuminate\Support\Str::limit($berita->isi_berita, 100) }}
                    </td>

                    <td>{{ $berita->kategori_berita }}</td>

                    <td>{{ $berita->created_at }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

</body>
</html>
