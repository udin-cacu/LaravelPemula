@extends ('layout.main')

@section ('title','Detail Anggota')

@section ('container')
<center>
<body>
  <br><br><br>
<div class="container">
      <div class="card bg-dark text-white" style="width: 55rem;">
          <img src="{{url('/img/pegawai1.jpg')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <center>
                <h3 class="mt-3 text-warning">Detail Anggota</h3>
    
                  <h4 class="card-title text-primary">{{$member->nama}}</h4>
                  <h5 class="card-subtitle mb-2 text-primary"><b>ID Anggota : </b>{{$member->id_member}}</h5>
                  <h5><p class="card-text text-primary"><b>Jenis Kelamin : </b>{{$member->jenis_kelamin}}</p>
                  <p class="card-text text-primary"><b>Email : </b>{{$member->email}}</p>
                  <p class="card-text text-primary"><b>Program Studi : </b>{{$member->jurusan}}</p>
                  <p class="card-text"><b>No HP : </b>{{$member->no_hp}}</p>
                  <p class="card-text text-primary"><b>Alamat Anggota : </b>{{$member->alamat}}</p>
                    </h5>
                  <a href="{{$member->id}}/edit" class="btn btn-success btn-sm">Edit</a>

                    <form action="/members/{{$member->id}}" method="post" class="d-inline">
                    {!! csrf_field() !!}
                    {{ method_field('delete') }}
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                   </form>

              <a href="/members" class="card-link btn-sm">Kembali</a>
              </center>
            </div>
          </div>
      </div>
</body></center>
@endsection

<style type="text/css">
  body {
    background-image: url("/img/pegawai1.jpg");
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