<?php
		session_start()	;
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
				<h1>Login Here</h1>

			<form action ="" method="post" autocomplete="off">
		   
			 <label><b>Application_ID</b></label><br>
			 <input name="Application_ID" type="text" placeholder="Enter Application ID">
			 <label><b>Password</b></label><br>
			 <input name="Password" type="Password" placeholder="Enter Password">
			 <input style="color:white"id= "btn" type="submit" name="Login" value="Login"><br>
			<a href="Sign_up1.php"><input  style ="color:white" type="button" value="Sign Up"></a>

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
		  
		 if(isset($_POST['Login']))
        {

      	 $Ap_ID=$_POST['Application_ID'];
         $pswrd=$_POST['Password'];
         
      	
      	
             $query="select * from login_details where Application_ID_ = '$Ap_ID' AND Password='$pswrd' ";
              
             $query_run = mysqli_query($connect,$query);
			 
			 if((mysqli_num_rows($query_run))>0)
			 {
			 	 $_SESSION['id']=$Ap_ID	;
			 	 $_SESSION['password']=$pswrd;
				 header("location:Start.html");
			 }
		    
			 else
			 {
				 echo '<script type="text/javascript"> alert ("Invalid Credentials") </script>';
			 }

      }


	?>	

</body>
</html>

