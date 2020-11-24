<!DOCTYPE html>
<html>
<?php
include_once 'connection.php';

?>

 <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title> Retrive data</title>
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 70%;
}

td, th {
    border: 1px solid black;
    text-align: left;
    padding: 8px;

}
tr:nth-child(even) {
  background-color: #eee;
}
tr:nth-child(odd) {
 background-color: #fff;
}
</style>
<body>

<div class="sidebar">
  <a href="search.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="test.php"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div>
<div class="content">
<h1>ABOUT HOSPITAL AND DOCTORS.....</h1>
<?php
$conn = mysqli_connect("localhost", "root", "","hospitals");
if($_REQUEST['submit']){
$id=$_POST['submit'];
$sele = "SELECT * FROM hospital WHERE hid = '$id' ";
	$result = mysqli_query($conn,$sele);
$doc = "SELECT * FROM doctor WHERE hid = '$id' ";
	$final = mysqli_query($conn,$doc);
	
	if($row = mysqli_num_rows($result) > 0){
	?><table>


<?php
		while($row = mysqli_fetch_assoc($result)){
	?>
		
		<tr>
		<th scope="row">hospital id</th>
		<td><?php echo $row['hid']; ?></td></tr>
		<tr><th scope="row">hospital name</th>
		<td><?php echo $row['hname']; ?></td></tr>
		<tr><th scope="row">address</th>
		<td><?php echo $row['address']; ?></td></tr>
		<tr><th scope="row">city</th>
		<td><?php echo $row['city']; ?></td></tr>
		<tr><th scope="row">email</th>
		<td><?php echo $row['email']; ?></td></tr>
		<tr><th scope="row">phone number</th>
 		<td><?php echo $row["phone"]; ?></td></tr>
	
</table>

<?php
}
}

mysqli_free_result($result);
}


if($row = mysqli_num_rows($final) > 0){
	?><br><table>
<tr>
<th>Doctor ID</th>
<th>Doctor Name</th>
<th>Phone Number</th>
<th>Qualification</th>
<th>Experience</th>
</tr>
<?php
		while($row = mysqli_fetch_assoc($final)){
	?>
	<tr>

		<td><?php echo $row['docid']; ?></td>
		<td><?php echo $row['docname']; ?></td>
		<td><?php echo $row['phone_no']; ?></td>
		<td><?php echo $row['qualification']; ?></td>
		<td><?php echo $row['experience']; ?></td>
	</tr>
<?php
}}
mysqli_free_result($final);
mysqli_close($conn);
?>
</div>
 </body>
</html>