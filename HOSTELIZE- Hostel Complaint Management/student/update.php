<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<style>
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color:darkgrey;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color:lightslategrey;
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
</style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="student_manage.php">Home</a>
  <a href="update.php"> Update Form Details</a>
  <a href="main.php">Complaint Registration</a>
  <a href="about2.html">About</a>
</div>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2 style="color:white; text-align:center" >UPDATE DATA </h2>
</div>
<br>
<br><br>
<center>
<div class="divB">
<div class="divD">
<p style="color:white;" >Click On ID</p>
<br>
<br>

<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection , "dbms");
if (isset($_GET['submit'])) {
$Student_Id = $_GET['Student_Id'];
$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];
$roomno = $_GET['roomno'];
$query = mysqli_query( $connection, "update registration set
username='$username', email='$email', password='$password',
roomno='$roomno' where Student_Id='$Student_Id'");
}
$query = mysqli_query($connection, "select * from registration");
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href='update.php?update={$row['Student_Id']}'>{$row['Student_Id']}</a></b>";
echo "<br />";
}
?>
</div></center><center><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysqli_query($connection ,"select * from registration where Student_Id='$update'");
while ($row1 = mysqli_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='Student_Id' value='{$row1['Student_Id']}' />";
echo "<br />";
echo "<label>" . "Username:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='username' value='{$row1['username']}' />";
echo "<br />";
echo "<label>" . "Email:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='email' value='{$row1['email']}' />";
echo "<br />";
echo "<label>" . "Password:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='password' value='{$row1['password']}' />";
echo "<br />";
echo"<input class='input' type='text' name='roomno' value='{$row1['roomno']}' />";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}

if (isset($_GET['submit'])) {
echo '<div  class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?></center>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysqli_close($connection);
?>
</body>
</html>