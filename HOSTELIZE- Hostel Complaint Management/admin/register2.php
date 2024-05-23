<?php include('server4.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
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

	

	<div class="header">
		<h2>Staff Registration</h2>
	</div>
	
	<form method="post" action="register2.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Staff Name</label>
			<input type="text" name="staffname" value="<?php echo $staffname; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Phone No.</label>
			<input type="text" name="phone_no">
		</div>
		<div class="input-group">
			<label>Registration Date</label>
			<input type="date" name="reg_date" value="<?php echo date("Y-m-d h:i:s");?>">
		</div>
		<div class="input-group">
			<label for="department">Department</label>
    		<select id="department" name="department">
      			<option value="Electricity issue">Electricity issue</option>
      			<option value="Carpentry issue">Carpentry issue</option>
      			<option value="leakage issue">leakage issue</option>
      			<option value="Cleaning/housekeeping issue">Cleaning/housekeeping issue</option>
      			<option value="Mess food issue">Mess food issue</option>
      			<option value="Other issue">Other issue</option>
    		</select>
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="reg2_user">Add to List</button>
		</div>
	</form>
</body>
</html>