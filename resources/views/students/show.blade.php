@extends ('layout.main')

@section ('title','Detail Mahasiswa')

@section ('container')
<body>
<br><br><br>
<div class="container">
      <div class="card bg-dark text-white" style="width: 25rem;">
          <img src="{{url('/img/students.jpg')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <center>
                <h3 class="mt-3 text-warning">Detail Mahasiswa</h3>
   						 <h4 class="card-title ">{{$student->nama}}</h5>
   						 <h5 class="card-subtitle mb-2 text-primary"><b>NIM : </b>{{$student->nrp}}</h5>
   						 <h5><p class="card-text text-primary"><b>Email : </b>{{$student->email}}</p>
   						 <p class="card-text text-primary"><b>Program Studi : </b>{{$student->jurusan}}</p></h5>

    					<a href="{{$student->id}}/edit" class="btn btn-success btn-sm">Edit</a>

              			<form action="/students/{{$student->id}}" method="post" class="d-inline">
                		{!! csrf_field() !!}
                		{{ method_field('delete') }}
    					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
             			 </form>

    					<a href="/students" class="card-link btn-sm">Kembali</a>
              </center>
  					</div>
				</div>
		</div>
	</div>
</body>
@endsection

<style type="text/css">
  body {
    background-image: url("/img/students.jpg");
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