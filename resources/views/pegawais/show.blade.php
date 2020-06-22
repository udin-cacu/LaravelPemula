@extends ('layout.main')

@section ('title','Detail Pegawai')

@section ('container')
<center>
<body>
  <br><br><br>
<div class="container">
      <div class="card bg-dark text-white" style="width: 43rem;">
          <img src="{{url('/img/pegawai1.jpg')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <center>
                <h3 class="mt-3 text-warning">Detail Pegawai</h3>
    
                  <h4 class="card-title text-primary">{{$pegawai->nama}}</h4>
                  <h5 class="card-subtitle mb-2 text-primary"><b>ID Pegawai : </b>{{$pegawai->id_pegawai}}</h5>
                  <h5><p class="card-text text-primary"><b>Jenis Kelamin : </b>{{$pegawai->jenis_kelamin}}</p>
                  <p class="card-text text-primary"><b>Email : </b>{{$pegawai->email}}</p>
                  <p class="card-text"><b>No HP : </b>{{$pegawai->no_hp}}</p></h5>

                  <a href="{{$pegawai->id}}/edit" class="btn btn-success btn-sm">Edit</a>

                    <form action="/pegawais/{{$pegawai->id}}" method="post" class="d-inline">
                    {!! csrf_field() !!}
                    {{ method_field('delete') }}
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                   </form>

              <a href="/pegawais" class="card-link btn-sm">Kembali</a>
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