<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
<div class="container">
	<div class="row">
		<div class="col-15">
			<h4 class="mt-3">Laporan Daftar Anggota</h4>

			<table class="table">
				<thead>
					<tr class="table-info">
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">ID Anggota</th>
						<th scope="col">Gender</th>
						<th scope="col">Jurusan</th>
						<th scope="col">No HP</th>
						<th scope="col">Alamat</th>
						
					</tr>
				</thead>
				<tbody>
					@foreach ($members as $member)
					<tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$member->nama}}</td>
						<td>{{$member->id_member}}</td>
						<td>{{$member->jenis_kelamin}}</td>
						<td>{{$member->jurusan}}</td>
						<td>{{$member->no_hp}}</td>
						<td>{{$member->alamat}}</td>
					</tr>
					@endforeach
				</tbody>
				
			</table>

		</div>
	</div>
</div>
	

<!-- Scripts -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>