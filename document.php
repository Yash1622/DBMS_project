<?php 
	session_start();
	include("connection.php");
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
			<h2> <b> ADMISSION PORTAL </b></h2>
		</div>
		<div class="info">
				<h1> Enter your details here : </h1>
				<form method="POST">
					<p> SSC_marks </p>
					<input type="text" name="SSC_marks" placeholder="Enter SSC_marks" required>
					<p> HSC_marks </p>
					<input type="text" name="HSC_marks" placeholder="Enter HSC_marks" required>
					<p> Aadhar_no </p>
					<input type="text" name="Aadhar_no" placeholder="Enter Aadhar_no" required>
					
					<input style="color:white" id="btn" type="submit" name="insert" value="Insert Details">
				</form>
				<!-- <a href="Start.html"><button type="button"> Insert Details </button></a>-->
		</div>
	</header>
	<?php 
	
         if(isset($_POST['insert']))
         {
         	$Application_ID=$_SESSION['id'];
         	$SSC_marks=$_POST['SSC_marks'];
			$HSC_marks=$_POST['HSC_marks'];
			$Aadhar_no=$_POST['Aadhar_no'];
			
			if(!empty($SSC_marks) && !empty($HSC_marks) && !empty($Aadhar_no)){

					$query="insert into documents values('$Application_ID',$SSC_marks,$HSC_marks,'$Aadhar_no')";

					mysqli_query($connect,$query);

					echo "Details Inserted Successfully";
					header("location:Start.html");
			}
			else{
				echo "All fields are required";
			}
         }

	?>

</body>
</html>