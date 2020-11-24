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
  color:white;
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

* {
  box-sizing: border-box;
}

#myInput {
 background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 90%;
  border: 1px solid black;
  font-size: 15px;
}

#myTable th{
border: 1px solid black;
  text-align: left;
  padding: 15px;
  background-color: #fff;
  color: black;
}
#myTable td {
border: 1px solid black;
padding: 8px;
}
#myTable tr {
  border-bottom: 1px solid black;
}

#myTable tr:nth-child(even) {
    background-color:#eee ;
}
#myTable tr:nth-child(odd) {
    background-color:#fff ;
}
#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
.hero-image {

  height: 20%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left:20%;
  transform: translate(-50%, -50%);
  color: black;
}
.input-icons i { 
            position: absolute; 
        } 
          
.input-icons { 
            width: 100%; 
            margin-bottom: 10px; 
        } 
          
.icon { 
            padding: 10px; 
            color: green; 
            min-width: 50px; 
            text-align: center; 
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
<div class="hero-image">
  <div class="hero-text">
    <h1 >Test Services</h1>
    <h4>Search for Tests</h4>
<div class="input-icons">  <i class="fa fa-search icon"> 
              </i> 
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter Test Name.." title="Type in a Test name" size="35">
  </div></div>
</div>


<?php

$conn = mysqli_connect("localhost", "root", "","hospitals");
	$sele = "SELECT * FROM test";
	$result = mysqli_query($conn,$sele);
	if($row = mysqli_num_rows($result) > 0){
	?><table id="myTable">
<tr class="header">
<th style="width:10%;">TEST ID</th>
<th style="width:30%;">TEST NAME</th>
<th style="width:30%;">TEST AMOUNT</th>
<th style="width:30%;">ADDRESS </th>
</tr><?php
		while($row = mysqli_fetch_assoc($result)){
	?>
	<tr>
		<td><?php echo $row['tid']; ?></td>
		<td><?php echo $row['tname']; ?></td>
		<td><?php echo $row['tamount']; ?></td>
		<td><?php echo $row['address']; ?></td>
		  
	</tr> 

<?php
	}}
?>
</table>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</div>
</body>
</html>