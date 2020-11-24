<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title> Retrive results</title>
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
    width: 100%;
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

input[type=submit]:hover {
background-color: #555;
 color: white;
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
<h1>AVAILABLE HOSPITALS</h1>
<?php
$conn = mysqli_connect("localhost", "root", "","hospitals");
//mysql_select_db("hospitals", $conn);
//search code
//error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM hosdis WHERE dname LIKE '%$name%'";
	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
	?><table>
<tr>
<th>hospital name</th>
<th>disease name</th>
<th>recovery number</th>
<th>hospital details</th>
</tr><?php
		while($row = mysqli_fetch_assoc($result)){
	?>
	<tr>

		<?php $id = $row['hid']; ?>
		<td><?php echo $row['hname']; ?></td>
		<td><?php echo $row['dname']; ?></td>
		<td><?php echo $row['recovery_no']; ?></td>
		<td>
		<form action="retrive.php" method="post">
		<input type="hidden" name="submit" value="<?php echo $row['hid']; ?>"/>
		<input type='submit' value='get details' /></form>
	</td>
		  
	</tr>
<?php
	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}

?>
</div>
</form>
</body>
</html>