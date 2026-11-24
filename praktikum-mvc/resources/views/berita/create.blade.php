
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita</title>
</head>
<body>

    <h2>Form Tambah Berita</h2>

    <form action="{{ route('berita.store') }}" method="POST">
        @csrf

        <label>Judul Berita</label><br>
        <input
            type="text"
            name="judul_berita"
            value="{{ old('judul_berita') }}"
            style="width: 690px; height: 35px; box-sizing: border-box;"
        >
        @error('judul_berita')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <label>Isi Berita</label><br>
        <textarea
            name="isi_berita"
            rows="8"
            style="width: 690px; box-sizing: border-box;"
        >{{ old('isi_berita') }}</textarea>
        @error('isi_berita')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <label>Kategori Berita</label><br>
        <select name="kategori_berita">
            <option value="">-- Pilih Kategori --</option>
            <option value="Politik">Politik</option>
            <option value="Ekonomi">Ekonomi</option>
            <option value="Olahraga">Olahraga</option>
            <option value="Teknologi">Teknologi</option>
            <option value="Pendidikan">Pendidikan</option>
        </select>
        @error('kategori_berita')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Simpan Berita</button>
        <a href="{{ route('berita.index') }}">Kembali</a>

    </form>

</body>
</html>
