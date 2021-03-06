@extends ('layout.main')

@section ('title','Form Tambah Data Mahasiswa')

@section ('container')
<body>
<div class="container">
	<div class="row">
		<div class="col-8">
			<h3 class="mt-3">Form Tambah Data Mahasiswa</h3>
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
				
        <form method="post" action="/students">
          {!! csrf_field() !!}
          <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control " id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama') }}">           
          <div class="form-group">
          <label for="nrp">NIM</label>
          <input type="text" class="form-control" id="nrp" placeholder="Masukan nrp" name="nrp" value="{{ old('nrp') }}">
          <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email" value="{{ old('email') }}">
          <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" value="{{ old('jurusan') }}">
          <button type="submit" class="btn btn-primary btn-sm my-3">Tambah Data</button>
          <a href="/students" class="card-link btn-sm">Kembali</a>
        </form>


		</div>
	</div>
</div>
</body>
@endsection

<style type="text/css">
  body {
    background-image: url("/img/typing-849806.jpg");
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