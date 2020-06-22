@extends ('layout.main')

@section ('title','Form Tambah Data Pegawai')

@section ('container')
<body>
<div class="container">
	<div class="row">
		<div class="col-8">
			<h3 class="mt-3">Form Tambah Data Pegawai</h3>
			{{-- menampilkan error validasi --}}
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                   <ul>
                   @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
                   </ul>
                   </div>
                   @endif
				
        <form method="post" action="/pegawais">
          {!! csrf_field() !!}
            <div class="form-group">
              <label for="id_pegawai">Id Pegawai</label>
              <input type="text" name="id_pegawai" class="form-control" id="id_pegawai" placeholder="Id Pegawai" value="{{ old('id_pegawai') }}">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Pegawai" value="{{ old('nama') }}">
              </div>
              <div class="form-group">
              <label for="Jenis_kelamin">Gender</label>
              <select name="Jenis_kelamin" id="Jenis_kelamin" class="form-control">
                <option value="">--Pilih--</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              </div>
              <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Email Pegawai" value="{{ old('email') }}">
              </div>
              <div class="form-group">
              <label for="no_hp">No Hp</label>
              <input type="nomor" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor Hp" value="{{ old('no_hp') }}">
              </div>
          <button type="submit" class="btn btn-primary btn-sm my-3">Tambah Data</button>
          <a href="/pegawais" class="card-link btn-sm">Kembali</a>
        </form>


		</div>
	</div>
</div>
</body>
@endsection

<style type="text/css">
  body {
    background-image: url("/img/book-bindings.jpg");
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
    
  }
  h1{
    text-align: center;
    font-family: blue;
    font-size: 100px;

  }

</style>