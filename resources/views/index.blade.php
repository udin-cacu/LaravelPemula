@extends ('layout.main')

@section ('title','Web-Perpustakaan')

@section ('container')
<center>
<body>
<div class="container ">
	<div class="row">
		<div class="col-10"><br><br><br><br><br>
			
			<h1 class="mt-3"><b>WelCome . . . ! ! !</b></h1>
			<p><h1><b>WEB PERPUSTAKAAN</b></h1></p>
			
		</div>
	</div>
</div>
</body></center>
@endsection
    <style type="text/css">
    	h1{
		text-align: center;
		font-family: blue;
		font-size: 100px;

	}
	b{
		font-size: 80px;
	}

	body {
		background-image: url("/img/hardwood-1851071.jpg");
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;

  animation-name: example;
  animation-duration: 15s;
}

@keyframes example {
  	50% {background-image: url("/img/girl.jpg");}
  	75% {background-image: url("/img/retail.jpg");}
}	
	}
	

</style>

    