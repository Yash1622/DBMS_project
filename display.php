<?php 
	session_start();
	include("connection.php");
?>
<html>
<head>
	<title> VJTI COLLEGE ADMISSION PORTAL </title>
	<link rel="stylesheet" type="text/css" href="CSS_/Style.css">
	<style>
	table,th,td,tr{
		color:white;
		border:1px solid white;
		font-size: 20px;
		text-align:center;
		height:50%;
		width:70%;
	}
</style>
</head>
<body>
	<header>
		<div class = "main">
			<div class = "logo">
				<img style="border-radius:350px" src="VJTI.jpg">
			</div>
		</div>
		<div class="title">
			<h2> <b> YOUR DETAILS </b></h2>
		</div>
		<div class="info">
			<?php 
					$id=$_SESSION['id'];
					$query1="select * from student_data where Application_ID = '$id' ";
					$fetch1=mysqli_query($connect,$query1);
					$row=mysqli_fetch_array($fetch1);
					$query2="select * from documents where Application_ID = '$id' ";
					$fetch2=mysqli_query($connect,$query2);
					$row2=mysqli_fetch_array($fetch2);
				?>
	

				<table>
						<tr> <th>Application_ID </th> 	<td><?php echo $row['Application_ID'] ?></td> </tr>
						<tr> <th>Candidate_Name </th>	<td><?php echo $row['Candidate_Name'] ?></td> </tr>
						<tr> <th>MHTCET_Score </th> 	<td><?php echo $row['MHTCET_Score'] ?></td> </tr>
						<tr> <th>Merit_Rank </th> 	<td><?php echo $row['Merit_Rank'] ?></td> </tr>
						<tr> <th>Gender </th>	<td><?php echo $row['Gender'] ?></td> </tr>
						<tr> <th>Candidate_Category </th>	 <td><?php echo $row['Candidate_Category'] ?></td> </tr>
						<tr> <th>Seat_Type </th>	<td><?php echo $row['Seat_Type'] ?></td> </tr>
						<tr> <th>Branch_code </th>	<td><?php echo $row['Branch_code'] ?></td> </tr>
						<tr> <th>SSC_marks </th> 	<td><?php echo $row2['SSC_marks'] ?></td> </tr>
						<tr> <th>HSC_marks </th> 	<td><?php echo $row2['HSC_marks'] ?></td> </tr>
						<tr> <th>Aadhar_no </th> 	<td><?php echo $row2['Aadhar_no'] ?></td> </tr>



				</table>
		</div>
	</header>
	
</body>
</html>