<html>
<head>

	<style type="text/css">
	


	
	.blur{
		background-color: #000;
		width:100%;
		height: 100%;
		opacity: 0.7;
		

	}
	.absolute{
		position: fixed;
		top:0;
		z-index: -1;
	}
	.center{
		margin: auto;
		left:0;
		right: 0;
		top: 0;
		bottom: 0;
	}

		</style>
	<title></title>
</head>
<body >


<div class="container"> 

	<div class="con-md-12 ">


		<div class="col-md-4 box-border col-md-offset-4  x animated fadeInDown">
				<div class="col-md-10 col-md-offset-1">
			<div class="text-center text-muted"> <h3>Login dulu !</h3>
				
				<hr>

				</div>

			<form method='POST' action='/cakeauth2/users/login'>
					

				<div class="form-group">
					<label class="form-label">Username</label>
					<input class="form-control"  name="data[User][username]" placeholder="Masukin Username">

				</div>	
				<div class="form-group">
					<label class="form-label">Password</label>
					<input type="password" name="data[User][password]" class="form-control" placeholder="Masukin Password">

				</div>	
				<br>
				<div class="form-group">
					<button class="btn btn-success col-md-4 col-md-offset-4">Masuk</button>
					
				</div>	

			</form>	
			</div>

		</div>

	</div>




 </div>


<div class="absolute center">
<img src="img/images.jpg" style="width:1373px;">


</div>

<div class="container-fluid absolute blur">





</div>




</body>
</html>