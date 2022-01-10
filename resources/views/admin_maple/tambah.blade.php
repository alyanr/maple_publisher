<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Maple Publisher | Tambah Data Buku Terbit</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/icon_maple.png') }}" rel="shortcut icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body style="padding-top: 20px; background-image: url('../assets/img/home-bg.jpg');">

    <div class="container" data-aos="fade-up">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Buku Terbit</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="nim">ID Buku</label>
                        <input type="text" name="id_buku" class="@error('id_buku') is-invalid @enderror form-control transparent-input" value="{{ old('id_buku') }}" required>

                        @error('id_buku')
                            <div class="mt-1">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control" value="{{ old('judul_buku') }}" required>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="penulis">Penulis</label>
                        <input type="text" name="penulis" class="form-control" value="{{ old('penulis') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="jenis_buku">Jenis Buku</label>
                        <select name="jenis_buku" class="form-control">
                            <option value="">Pilih Jenis Buku</option>
                            <option value="novel" {{ old('jenis_buku') == 'novel' ? 'selected' : ''}}>Novel</option>
                            <option value="senandika" {{ old('jenis_buku') == 'senandika' ? 'selected' : ''}}>Senandika</option>
                            <option value="puisi" {{ old('jenis_buku') == 'puisi' ? 'selected' : ''}}>Puisi</option>
                            <option value="cerpen" {{ old('jenis_buku') == 'cerpen' ? 'selected' : ''}}>Cerpen</option>
                            <option value="non-fiksi" {{ old('jenis_buku') == 'non-fiksi' ? 'selected' : ''}}>Non-fiksi</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="text" name="tahun_terbit" class="form-control" value="{{ old('tahun_terbit') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea name="sinopsis" class="form-control">{{ old('sinopsis') }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="gambar">Cover</label>
                        <input type="file" name="gambar" class="form-control" value="{{ old('gambar') }}" required>
                    </div>

                    <div class="form-group d-flex">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <a href="{{ route('admin.index') }}" class="btn btn-secondary ms-1">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>