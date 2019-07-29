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
			<h2><b> ADMISSION PORTAL</b></h2>
		</div>
		<div class="info">
				<h1> Verify the Application ID and the Password of the Candidate : </h1>
				<form action="" method="post">
					<p> Application ID </p>
					<input type="text" name="Application_ID" placeholder="Enter Application ID">
					<p> Password </p>
					<input type="Password" name="Password" placeholder="Enter Password">
					<input style="color:white" type="submit" name="Login" value="Delete Details">				
				</form>
				
		</div>
	</header>
	<?php
		  
		 if(isset($_POST['Login']))
        {

      	 $Ap_ID=$_POST['Application_ID'];
         $pswrd=$_POST['Password'];
         
      	
      	 
			 if($_SESSION['password']==$pswrd and $_SESSION['id']==$Ap_ID)
			 {
			 	 
				 $query1="delete from student_data where Application_ID = '$Ap_ID'" ;
              	 $query2="delete from documents where Application_ID = '$Ap_ID'";
             	mysqli_query($connect,$query1);
             	mysqli_query($connect,$query2);
             	header("location:VERIFY.php");
			 }
		    
		    
			 else
			 {
				 echo '<script type="text/javascript"> alert ("Invalid Credentials") </script>';
			 }

      }


	?>	
</body>
</html>