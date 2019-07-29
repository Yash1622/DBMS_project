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
				<h1> Update details here : </h1>
				<?php 
					$id=$_SESSION['id'];
					$query1="select * from student_data where Application_ID = '$id' ";
					$fetch1=mysqli_query($connect,$query1);
					$row=mysqli_fetch_array($fetch1);
					$query2="select * from documents where Application_ID = '$id' ";
					$fetch2=mysqli_query($connect,$query2);
					$row2=mysqli_fetch_array($fetch2);
				?>
				<form action=" " method="POST">
					
					<p> Candidate_Name </p>
					<input type="text" name="Candidate_Name" value="<?php echo $row['Candidate_Name']?>"placeholder="Enter your name" required>
					<p> MHTCET_Score </p>
					<input type="text" name="MHTCET_Score" value="<?php echo $row['MHTCET_Score']?>" placeholder="Enter MHT-CET Score" required>
					<p> Merit_Rank </p>
					<input type="text" name="Merit_Rank" value="<?php echo $row['Merit_Rank']?>" placeholder="Enter Merit Rank" required>
					<p> Gender </p>
					<input type="text" name="Gender" value="<?php echo $row['Gender']?>" placeholder="Enter Gender (M/F/O)" required>
					<p> Candidate_Category </p>
					<input type="text" name="Candidate_Category" value="<?php echo $row['Candidate_Category']?>" placeholder="Enter Category" required>
					<p> Seat_Type </p>
					<input type="text" name="Seat_Type" value="<?php echo $row['Seat_Type']?>" placeholder="Enter Seat Type" required>
					<p> Branch_code </p>
					<input type="text" name="Branch_code" value="<?php echo $row['Branch_code']?>" placeholder="Enter Branch" required>	
					<p> SSC_marks </p>
					<input type="text" name="SSC_marks" value="<?php echo $row2['SSC_marks']?>" placeholder="Enter SSC_marks" required>
					<p> HSC_marks </p>
					<input type="text" name="HSC_marks" value="<?php echo $row2['HSC_marks']?>" placeholder="Enter HSC_marks" required>
					<p> Aadhar_no </p>
					<input type="text" name="Aadhar_no" value="<?php echo $row2['Aadhar_no']?>" placeholder="Enter Aadhar_no" required>
					<input style="color:white" id="btn" type="submit" name="modify" value="Modify Details">

				</form>
		</div>
	</header>

	<?php 
	session_start();
         if(isset($_POST['modify']))
         {
         	$Application_ID=$_SESSION['id'];
			$Candidate_Name=$_POST['Candidate_Name'];
			$MHTCET_Score=$_POST['MHTCET_Score'];
			$Merit_Rank=$_POST['Merit_Rank'];
			$Gender=$_POST['Gender'];
			$Candidate_Category=$_POST['Candidate_Category'];
			$Seat_Type=$_POST['Seat_Type'];
			$Branch_code=$_POST['Branch_code'];
			$SSC_marks=$_POST['SSC_marks'];
			$HSC_marks = $_POST['HSC_marks'];
			$Aadhar_no=$_POST['Aadhar_no'];
			
			if(!empty($Application_ID) && !empty($Candidate_Name) && !empty($MHTCET_Score) && !empty($Merit_Rank) && !empty($Gender) &&  
   				!empty($Candidate_Category) && !empty($Seat_Type) && !empty($Branch_code)){

					$query1="update student_data set 
							Candidate_Name='$Candidate_Name',
							MHTCET_Score=$MHTCET_Score,
							Merit_Rank=$Merit_Rank,
							Gender='$Gender',
							Candidate_Category='$Candidate_Category',
							Seat_Type='$Seat_Type',
							Branch_code='$Branch_code' where Application_ID='$Application_ID'";
					$query2 =" update documents set 
							  SSC_marks ='$SSC_marks',
							  HSC_marks = '$HSC_marks',
							  Aadhar_no = '$Aadhar_no'";

					mysqli_query($connect,$query1);
					mysqli_query($connect,$query2);
					echo "Details updated successfully";
					header("location:Start.html");
			}
			else{
				echo "All fields are required";
			}
         }

	?>
</body>
</html>