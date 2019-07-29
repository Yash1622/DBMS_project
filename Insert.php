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
				<form action=" " method="POST">
					<p> Application_ID </p>
					<input type="text" name="Application_ID" value="<?php echo $_SESSION['id']?>" placeholder="Enter Application ID" disabled>
					<p> Candidate_Name </p>
					<input type="text" name="Candidate_Name" placeholder="Enter your name" required>
					<p> MHTCET_Score </p>
					<input type="text" name="MHTCET_Score" placeholder="Enter MHT-CET Score" required>
					<p> Merit_Rank </p>
					<input type="text" name="Merit_Rank" placeholder="Enter Merit Rank" required>
					<p> Gender </p>
					<input type="text" name="Gender" placeholder="Enter Gender (M/F/O)" required>
					<p> Candidate_Category </p>
					<input type="text" name="Candidate_Category" placeholder="Enter Category" required>
					<p> Seat_Type </p>
					<input type="text" name="Seat_Type" placeholder="Enter Seat Type" required>
					<p> Branch_code </p>
					<input type="text" name="Branch_code" placeholder="Enter Branch" required><br>	
					<input style="color:white" id="btn" type="submit" name="insert" value="Insert Details">
				</form>
				<!-- <a href="Start.html"><button type="button"> Insert Details </button></a>-->
		</div>
	</header>
	<?php 
	
         if(isset($_POST['insert']))
         {
         	$Application_ID=$_SESSION['id'];
			$Candidate_Name=$_POST['Candidate_Name'];
			$MHTCET_Score=$_POST['MHTCET_Score'];
			$Merit_Rank=$_POST['Merit_Rank'];
			$Gender=$_POST['Gender'];
			$Candidate_Category=$_POST['Candidate_Category'];
			$Seat_Type=$_POST['Seat_Type'];
			$Branch_code=$_POST['Branch_code'];
			
			if(!empty($Application_ID) && !empty($Candidate_Name) && !empty($MHTCET_Score) && !empty($Merit_Rank) && !empty($Gender) &&  
   				!empty($Candidate_Category) && !empty($Seat_Type) && !empty($Branch_code)){

					$query="insert into student_data values('$Application_ID','$Candidate_Name',$MHTCET_Score,$Merit_Rank,'$Gender','$Candidate_Category','$Seat_Type','$Branch_code')";
echo '<script type="text/javascript"> alert ("Invalid Credentials") </script>';

					mysqli_query($connect,$query) OR die(mysqli_error());
					header("location:document.php");
			}
			else{
				echo "All fields are required";
			}
         }

	?>

</body>
</html>