@extends ('layout.main')

@section ('title','Detail Buku')

@section ('container')
<center>
<body>
  <br><br><br>
<div class="container">
	<div class="card bg-dark text-white" style="width: 28rem;">
          <img src="{{url('/img/book-bindings.jpg')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <center>
			         <h3 class="mt-3 text-danger">Detail Buku</h3><br>
   						 <h5 class="card-title text-primary">{{$book->judul}}</h5>
               <p class="card-text text-primary"><b>Pengarang</b> : {{$book->pengarang}}</p>
               <h6 class="card-subtitle mb-2 text-muted"><b>Kode Buku</b> : {{$book->kd_book}}</h6>
               <p class="card-text "><b>Tahun Terbit</b> : {{$book->th_terbit}}</p>
               <p class="card-text "><b>Stok Buku</b> : {{$book->stock}}</p>

    					<a href="{{$book->id}}/edit" class="btn btn-success btn-sm">Edit</a>

              			<form action="/books/{{$book->id}}" method="post" class="d-inline">
                		{!! csrf_field() !!}
                		{{ method_field('delete') }}
    					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
             			 </form>

    					<a href="/books" class="card-link btn-sm">Kembali</a>
              </center>
  					</div>
				</div>
		</div>
	</div>
</div>
</body></center>
@endsection

<style type="text/css">
  body {
    background-image: url("/img/books.jpg");
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