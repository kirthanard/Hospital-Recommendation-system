<!DOCTYPE html>
<html>
<head>

<style>
  html,body{
background-image: url('https://image.freepik.com/free-photo/medical-mockup-with-stethoscope-red-heart_72482-690.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}


/* Darker background on mouse-over */

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
 padding: 3px;
  text-align: center;
  font-size: 25px;
  color:#000066;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 80px;
}
</style>
</head>
<body>
<div class="header" id="myHeader">
  <h3><i>HOSPINFO</I></H3>
  <h4 align="center"><i>CHOOSE WELL BE WELL....</i></h2>
</div>
<br><br><br>
<br><br>

<form action="result.php" method="POST">
<center><h3><i>Enter Disease To Find Best Hospital <i></h3></center>
<center><table>
<tr>
	<td>Search</td>
	<td><input type="text" name="name" size="50" required></td>
	<td><input type="submit" name="submit"></td>
</tr>
</table></center>
</form>
</body>
</html>

</html>