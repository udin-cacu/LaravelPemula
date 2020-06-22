@extends ('layout.main')

@section ('title','Form Ubah Data Pegawai')

@section ('container')
<body>
<div class="container">
	<div class="row">
		<div class="col-8">
			<h3 class="mt-3">Form Ubah Data Pegawai</h3>
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
				
        <form method="post" action="/pegawais/{{$pegawai->id}}">
          {{ method_field('patch') }}
          {!! csrf_field() !!}
          <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control " id="nama" placeholder="Masukan Nama" name="nama" value="{{ $pegawai->nama }}">           
          <div class="form-group">
          <label for="id_pegawai">ID Pegawai</label>
          <input type="text" class="form-control" id="id_pegawai" placeholder="Masukan ID Pegawai" name="id_pegawai" value="{{ $pegawai->id_pegawai }}">
          <div class="form-group">
              <label for="jenis_kelamin">Gender</label>
              <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option {{old('jenis_kelamin',$pegawai->jenis_kelamin)=="Lak-laki"? 'selected':''}} value="Laki-laki">Laki-laki</option>
                <option {{old('jenis_kelamin',$pegawai->jenis_kelamin)=='Perempuan'? 'selected':''}} value="Perempuan">Perempuan</option>
              </select>
              </div>
          <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email" value="{{ $pegawai->email }}">
          <div class="form-group">
          <label for="no_hp">No HP</label>
          <input type="nomor" class="form-control" id="no_hp" placeholder="Masukan Nomor HP" name="no_hp" value="{{ $pegawai->no_hp }}">
          <button type="submit" class="btn btn-success btn-sm my-3">Ubah Data</button>
          <a href="/pegawais" class="card-link btn-sm">Kembali</a>
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