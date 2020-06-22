@extends ('layout.main')

@section ('title','Daftar Books')

@section ('container')
<body>
<div class="container">
	<div class="row">
		<div class="col-8">
			<h4 class="mt-3">Daftar Buku</h4>

			<a href="/books/create" class="btn btn-primary btn-sm form-inline my-3">Tambah Data Buku</a>
			<form action="{{ url('books/{laporan}') }}" method="post" class="d-inline">
                		@csrf
                		@method ('put')
    					<button type="submit" class="btn btn-danger btn-sm">PDF</button>
             			 </form>
			@if (session('status'))
    		<div class="alert alert-success">
        	{{ session('status') }}
   			 </div>
			@endif

			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Judul</th>
						<th scope="col">Kode Buku</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($books as $book)
					<tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$book->judul}}</td>
						<td>{{$book->kd_book}}</td>
						<td>
						
						<a href="/books/{{$book->id}}" class="badge badge-warning">Detail</a>
							
						</td>
					</tr>
					@endforeach
				</tbody>
				
			</table>
		</div>
	</div>
</div>
</body>
@endsection

<style type="text/css">
	body {
		background-image: url("/img/notebook.jpg");
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