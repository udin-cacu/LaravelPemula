@extends ('layout.main')

@section ('title','Form Ubah Data Anggota')

@section ('container')
<body>
<div class="container">
	<div class="row">
		<div class="col-8">
			<h3 class="mt-3">Form Ubah Data Anggota</h3>
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
				
        <form method="post" action="/members/{{$member->id}}">
          {{ method_field('patch') }}
          {!! csrf_field() !!}
          <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control " id="nama" placeholder="Masukan Nama" name="nama" value="{{ $member->nama }}">           
          <div class="form-group">
          <label for="id_member">ID Anggota</label>
          <input type="text" class="form-control" id="id_member" placeholder="Masukan Id Anggota" name="id_member" value="{{ $member->id_member }}">
          <div class="form-group">
              <label for="jenis_kelamin">Gender</label>
              <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                <option {{old('jenis_kelamin',$member->jenis_kelamin)=="Lak-laki"? 'selected':''}} value="Laki-laki">Laki-laki</option>
                <option {{old('jenis_kelamin',$member->jenis_kelamin)=='Perempuan'? 'selected':''}} value="Perempuan">Perempuan</option>
              </select>
              </div>
          <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email" value="{{ $member->email }}">
          <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" value="{{ $member->jurusan }}">
          <div class="form-group">
          <label for="no_hp">No HP</label>
          <input type="number" class="form-control" id="no_hp" placeholder="Masukan No HP" name="no_hp" value="{{ $member->no_hp }}">
          <div class="form-group">
          <label for="alamat">Alamat Anggota</label>
          <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" value="{{ $member->alamat }}">
          <button type="submit" class="btn btn-success btn-sm my-3">Ubah Data</button>
          <a href="/members" class="card-link btn-sm">Kembali</a>
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