<?php
	include("database.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	
		$fname = $_POST['fname'];
		$fname = stripslashes($fname);
		$fname = addslashes($fname);

		$lname = $_POST['lname'];
		$lname = stripslashes($lname);
		$lname = addslashes($lname);

		$email = $_POST['email'];
		$email = stripslashes($email);
		$email = addslashes($email);

		$password = $_POST['password'];
		$password = stripslashes($password);
		$password = addslashes($password);

		$prov = $_POST['prov'];
		$prov = stripslashes($prov);
		$prov = addslashes($prov);

		$str="SELECT user_name from users WHERE user_name='$email'";
		$result=mysqli_query($con,$str);
		
		if((mysqli_num_rows($result))>0)	
		{
            echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
            header("refresh:0;url=login.php");
        }
		else
		{
            $str="insert into users set fname='$fname', lname='$lname',user_name='$email',password='$password',province='$prov',type=2";
			if((mysqli_query($con,$str)))	
			echo "<center><h3><script>alert('Congrats.. You have successfully registered !!');</script></h3></center>";
			header('location: welcome.php');
		}
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Register | LiveCAN</title>
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="css/form.css">
        <style type="text/css">
            body{
                  width: 100%;
                  background: url(image/book.jpg) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
				.responsive {
                width: 60px;
                height: 60px;
                }
				.logohover:hover{
					color:red;
				}
          </style>
	</head>

	<body>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
							<center> <h5 style="font-family: Noto Sans;">Register to </h5><a href="index.php"><h4 style="font-family: Noto Sans;"><span class="logohover">Live<span><img class="responsive" src="image/leaf.png"></span>CAN</span></h4></a></center><br>
							<form method="post" action="register.php" enctype="multipart/form-data">
                                <div class="form-group">
									<label>Enter Your First Name:</label>
									<input type="text" name="fname" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Last Name:</label>
									<input type="text" name="lname" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Email Id:</label>
									<input type="email" name="email" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Password:</label>
									<input type="password" name="password" class="form-control" required />
                                </div>
								<div class="form-group">
									<label>Enter Your Province:</label>
									<select class="form-control" name="prov" required>
										<option value="">--Select--</option>
										<?php 
										$str = "SELECT * FROM province";
										$result = mysqli_query($con,$str);
										while($row=mysqli_fetch_array($result) )
                        					{
                            					$name= $row['name'];
												$provid= $row['id'];
												?>
											<option value="<?php echo $provid ?>"><?php echo $name; ?></option>
												<?php
											}
										?>
									</select>
								</div>
                                
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Register</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Already have an account! </span> <a href="login.php">Login </a> Here..
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
	</body>
</html>