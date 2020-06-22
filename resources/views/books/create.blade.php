@extends ('layout.main')

@section ('title','Form Tambah Data Buku')

@section ('container')
<body>
<div class="container">
	<div class="row">
		<div class="col-8">
			<h4 class="mt-3">Form Tambah Data Buku</h4>
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
				
        <form method="post" action="/books">
          @csrf
          <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control " id="judul" placeholder="Masukan Judul" name="judul" value="{{ old('judul') }}">           
          <div class="form-group">
          <label for="pengarang">Pengarang</label>
          <input type="text" class="form-control" id="pengarang" placeholder="Masukan Pengarang" name="pengarang" value="{{ old('pengarang') }}">
          <div class="form-group">
          <label for="kd_book">Kode Buku</label>
          <input type="text" class="form-control" id="kd_book" placeholder="Masukan Kode Buku" name="kd_book" value="{{ old('kd_book') }}">
          <div class="form-group">
          <label for="th_terbit">Tahun Terbit</label>
          <input type="date" class="form-control" id="th_terbit" placeholder="Masukan Tahun Terbit" name="th_terbit" value="{{ old('th_terbit') }}">
          <div class="form-group">
          <label for="stock">Stock Buku</label>
          <input type="number" class="form-control" id="stock" placeholder="Masukan stock" name="stock" value="{{ old('stock') }}">
          <button type="submit" class="btn btn-primary btn-sm my-3">Tambah Data</button>
          <a href="/books" class="card-link btn-sm"> Kembali</a>
        </form>


		</div>
	</div>
</div>
</body>
@endsection

<style type="text/css">
  body {
    background-image: url("/img/book.jpg");
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