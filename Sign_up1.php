<?php
   include("connection.php");
   error_reporting(0);
?>
<html>
<head>
	<title> VJTI COLLEGE ADMISSION PORTAL </title>
	<link rel="stylesheet" type="text/css" href="CSS_/Style.css">
</head>
<body>
	<header>
		<div class = "main">
			<div class = "logo">
				<img src="VJTI.jpg">
			</div>
		</div>
		<div class="title">
			<h2> <b> WELCOME TO VJTI </b></h2>
		</div>
		<div class="loginbox">
			<img src="VJTI.jpg" class="avatar">
				<h1>Sign_up Here</h1>

			<form action="" method="post" autocomplete="off">
		   
			 <label><b>Application_ID</b></label><br>
			 <input name="Application_ID" type="text" placeholder="Enter Application ID">
			 <label><b>Password</b></label><br>
			 <input name="Password" type="Password" placeholder="Enter Password">
			 <input style="color:white"id= "btn" type="submit" name="submit" value="Create Account"><br>
			 
			 
		  	</form>
				<!--<form >
					<p> Application ID </p>
					<input type="text" name="" placeholder="Enter Application ID"/>
					<p> Password </p>
					<input type="password" name="" placeholder="Enter Password"><br>
					<input type="submit" name="" value="Login"><br>
				</form>-->
		</div>
		</header>
		<?php
			 if($_POST['submit'])
      {

      	 $Ap_ID=$_POST['Application_ID'];
         $pswrd=$_POST['Password'];
         
      	if($Ap_ID!="" && $pswrd!="" )
      	{
             $query="insert into login_details values('$Ap_ID','$pswrd')";
               $data=  mysqli_query($connect, $query) or die (mysqli_error()); 

               echo "account created successfully";
               header("location:VERIFY.php");
      	}

      	else
      	{
      		echo "All fileds are required";
      	}

      }


	?>	

</body>
</html>

