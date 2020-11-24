<!DOCTYPE html>
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title> insert data</title>
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
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=email]{
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number]{
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
   margin: 25px 350px 75px 20px;
  padding: 20px;
}
.button {
  background-color: #000066;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
  <body><div class="sidebar">
  <a href="search.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="test.php"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div>
<div class="content"><h1>Insert New Data</h1>
<div class="container">
	<form method="post" action="admin.php">
		Test ID:<br>
		<input type="text" name="tid">
		<br>
		Test name:<br>
		<input type="text" name="tname">
		<br>
		address<br>
		<input type="text" name="address">
		<br>
		Test amount<br>
		<input type="text" name="tamount">
		<br><br>
		<input type="submit" class="button" name="save3" value="submit">
	</form></div></div>
  </body>
</html>