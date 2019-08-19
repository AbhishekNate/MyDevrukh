
<html>
<head>
	<title>Login</title>
</head>
	<body>
	<link rel="stylesheet" type="text/css" href="./dist/css/login1.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" media="screen" />
	
	
	  <div class="container">
		<div class="row">
		  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
			  <div class="card-body">
				<h5 class="card-title text-center">Admin LogIn</h5>
				<form class	="form-signin" name="login" method="post" action="index.php" onSubmit="return validate();">
				  <div class="form-label-group">
					<input type="text" id="userid" class="form-control" placeholder="User Name" name="username" required autofocus>
					<label for="userid">User Name</label>
				  </div>

				  <div class="form-label-group">
					<input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
					<label for="password">Password</label>
				  </div>

				  <div class="custom-control custom-checkbox mb-3">
					<input type="checkbox" class="custom-control-input" id="customCheck1">
					<label class="custom-control-label" for="customCheck1">Remember password</label>
				  </div>
				  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Login">Login</button>
				</form>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <?php 
		include_once("DBConnection.php"); 
		session_start();
 		 //include_once("DBConnection.php"); 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{ 
		 
		$uname=$_POST['username'];
		$password=$_POST['password'];
		$sql ="SELECT username,password FROM admin WHERE username=:uname and password=:password";
		$query= $dbh -> prepare($sql);
		$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
		$query-> bindParam(':password', $password, PDO::PARAM_STR);
		$query-> execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ);
		if($query->rowCount() > 0)
		{
			$_SESSION['alogin']=$_POST['username'];
			$_SESSION["user_id"] = $uname;
			$_SESSION["user_name"] = $password;
			//echo "good";
			echo "<script type='text/javascript'> document.location = 'admin.php'; </script>";
		} 
		else
		{		
			echo "<script>alert('Invalid Details');</script>";
		}
		//session_destroy();
		}
		

	?>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	  <script src="./dist/js/login.js"></script>
	</body>
</html>