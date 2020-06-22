@extends ('layout.main')

@section ('title','Daftar Anggota')

@section ('container')
<body>
<div class="container">
	<div class="row">
		<div class="col-6">
			<h3 class="mt-3">Daftar Anggota</h3>
			<a href="/members/create" class="btn btn-primary btn-sm my-3">Tambah Data Anggota</a>
			<form action="{{ url('members/{laporan}') }}" method="post" class="d-inline">
                		{!! csrf_field() !!}
                		{{ method_field('put') }}
    					<button type="submit" class="btn btn-danger btn-sm">PDF</button>
             			 </form>
			@if (session('status'))
    		<div class="alert alert-success">
        	{{ session('status') }}
   			 </div>
			@endif
			<ul class="list-group">
				@foreach($members as $member) 
  				<li class="list-item d-flex justify-content-between align-items-center my-3">
    				{{$member ->nama}}
   				 	<a href="/members/{{$member->id}}" class="badge badge-info ">Detail</a>
  				</li>
  				@endforeach
			</ul>
		</div>
	</div>
</div>
</body>
@endsection

<style type="text/css">
	body {
		background-image: url("/img/student.jpg");
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