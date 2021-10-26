<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
		}
		.box{
			width: 350px;
			height: 250px;
			border-radius: 5px;
			border: 1px solid black;
			text-align: center;
			background-color: #2c3338;
		}
		.box1{
			font-weight: bold;
			text-align: center;
			color: white;
		}
		.box2 div{
			margin-top:20px;
		}
	</style>
</head>
<body>
<div class="box container" style="margin-top:40px;">
	<div class="box1">
		<h1>Login</h1>
	</div>
	<div class="box2">
		<form method="post" action="index.php?controller=login&action=login">
			<div>
				<input type="email" name="email" required placeholder="Email">
			</div>
			<div>
				<input type="password" name="password" required placeholder="Password">
			</div>
			<div>
			<input type="submit" name="" value="Login" style="background-color: #d44179">
			<input type="reset" name="" value="Reset" style="background-color: #d44179">
			</div>
		</form>
	</div>
	<!-- <div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form method="post" action="index.php?controller=login&action=login">
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2">Email</div>
						<div class="col-md-9"><input type="email" name="email" required class="form-control"></div>
					</div>
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2">Password</div>
						<div class="col-md-9"><input type="password" name="password" required class="form-control"></div>
					</div>
					<div class="row" style="margin-top:5px;">
						<div class="col-md-2"></div>
						<div class="col-md-9"><input type="submit" value="Login" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger"></div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div> -->
</div>
</body>
</html>