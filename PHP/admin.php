<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title> admin</title>
 </head>
<style>
body {
background-image: url('https://image.freepik.com/free-photo/medical-mockup-with-stethoscope-red-heart_72482-690.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 150px;
  background-color: #000066;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

input[type=submit]:hover {
background-color: #555;
 color: white;
}
.button {
  border-radius: 4px;
  background-color:#cc0000;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 230px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<body>

<div class="sidebar">
  <a href="admin.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="admin.php"><i class="fa fa-fw fa-wrench"></i> Services</a>
    <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="search.php"><i class="fa fa-fw fa-user"></i> logout </a>
</div>
<div class="content">
<h1>HOSPITAL UPDATES</h1>
<?php
$conn = mysqli_connect("localhost", "root", "","hospitals");
//mysql_select_db("hospitals", $conn);
//search code
//error_reporting(0);?>
<table><tr><td><form action=" hospital.php" method="post">
	<button class="button"><span>insert hospital </span></button>
</form></td><td>
<form action=" disease.php" method="post">
	<button class="button"><span>insert disease </span></button>
</form></td><td>
<form action="doctor.php" method="post">
	<button class="button"><span>insert doctor </span></button>
</form></td><td>
<form action="testupdate.php" method="post">
	<button class="button"><span>insert test </span></button>
</form></td><tr>
<td><form action=" viewtest.php" method="post">
	<button class="button"><span>view test </span></button>
</form></td>
<td><form action=" viewhospital.php" method="post">
	<button class="button"><span>view hospital </span></button>
</form></td>
<td><form action=" viewdoctor.php" method="post">
	<button class="button"><span>view doctor </span></button>
</form></td>
<td><form action=" viewdisease.php" method="post">
	<button class="button"><span>view disease </span></button>
</form></td>
	</tr><tr><td>
	<form action="viewdisease.php" method="post">
	<button class="button"><span>update disease </span></button>
</form></td>
	</tr>
	</table>

<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	 $hid = $_POST['hid'];
	 $hname = $_POST['hname'];
	 $address = $_POST['address'];
	 $city = $_POST['city'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $sql = "INSERT INTO hospital (hid,hname,address,city,phone,email)
	 VALUES ('$hid','$hname','$address','$city','$phone','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<?php
include_once 'connection.php';
if(isset($_POST['save1']))
{	 
	 $did = $_POST['did'];
	 $dname = $_POST['dname'];
	 $recovery_no = $_POST['recovery_no'];
	 $hid = $_POST['hid'];
	 $sql = "INSERT INTO disease (did,dname,recovery_no,hid)
	 VALUES ('$did','$dname','$recovery_no','$hid')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<?php
include_once 'connection.php';
if(isset($_POST['save2']))
{	 
	 $docid = $_POST['docid'];
	 $docname = $_POST['docname'];
	 $phone_no = $_POST['phone_no'];
	 $qualification = $_POST['qualification'];
	 $experience = $_POST['experience'];
	 $hid = $_POST['hid'];
	 $sql = "INSERT INTO doctor (docid,docname,phone_no,qualification,experience,hid)
	 VALUES ('$docid','$docname','$phone_no','$qualification','$experience','$hid')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<?php
include_once 'connection.php';
if(isset($_POST['save3']))
{	 
	 $tid = $_POST['tid'];
	 $tname = $_POST['tname'];
	 $address = $_POST['address'];
	 $tamount = $_POST['tamount'];
	 $sql = "INSERT INTO test (tid,tname,address,tamount)
	 VALUES ('$tid','$tname','$address','$tamount')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

</div>
</body>
</html>