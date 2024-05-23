<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
  font-size: 120%;
	background-image: url("https://img.freepik.com/free-vector/paper-style-dynamic-lines-background_23-2149008629.jpg?w=996&t=st=1715246257~exp=1715246857~hmac=6e7ed1a798575b83bd1e2bcadeaa56a3713328b3af98110085e4d8b90f441955"); 
    background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;
	background-color: #cccccc;
}
h2{
  color:white;
  text-align:center;
}
h4{
  color:wheat;
  text-align:center;
}
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
  <a class="active" href="admin_manage.php">Home</a>
  <a href="register2.php">Staff Registration</a>
  <a href="admin_studentdetail.php">Student Complaint Details</a>
  <a href="about1.html">About</a>
</div>

<div class="content">
  <h2>WELCOME TO HOSTELIZE</h2>
  <br><br>
  <h4>Don't let discomfort linger. <br>Lodge your hostel complaints now and help us create a better living environment for all !</h4>
  <!-- <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
  <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
  <h3>Resize the browser window to see the effect.</h3> -->
</div>
<p> <a href="a.php?logout='1'" style="color: red;">logout</a> </p>
</body>
</html>