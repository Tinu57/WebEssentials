<?php include('server2.php');
if (isset($_POST["insert"]))  
{  
	 $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
	 $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
	 if(mysqli_query($db1, $query))  
	 {  
		  echo '<script>alert("Image Inserted into Database")</script>';  
	 }  
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   -->
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

<body>

<div class="sidebar">
  <a class="active" href="student_manage.php">Home</a>
  <a href="update.php"> Update Form Details</a>
  <a href="main.php">Complaint Registration</a>
  <a href="about2.html">About</a>
</div>
<body>
	<div class="header">
		<h2>Student Complaints Page</h2>
	</div>


	<form method="post" action="main.php">


		<?php include('errors.php'); ?>

		<label for="complaint_date">Date of Complaint:</label>
  		<input type="date" id="complaint_date" name="complaint_date">

		<div class="input-group">
			<label>Student Id</label>
			<input type="text" name="Student_Id" value="<?php echo $Student_Id; ?>">
		</div>
		<div class="input-group">
			<label>Phone No.</label>
			<input type="text" name="phoneno">
		</div>
		<div class="input-group">
			<label>Room No.</label>
			<input type="text" name="roomno">
		</div>
		<div class="input-group">
			<label for="complaint_type">Complaint Type</label>
    		<select id="complaint_type" name="complaint_type">
      			<option value="Electricity issue">Electricity issue</option>
      			<option value="Carpentry issue">Carpentry issue</option>
      			<option value="leakage issue">leakage issue</option>
      			<option value="Cleaning/housekeeping issue">Cleaning/housekeeping issue</option>
      			<option value="Mess food issue">Mess food issue</option>
      			<option value="Other issue">Other issue</option>
    		</select>
		</div>
		<div class="input-group">
		<label for="description">Problem Description</label>
    	<textarea id="description" name="description" placeholder="Write something.." rows="5" cols="43"></textarea>
    	</div>
		<!-- <div class="container" style="width:500px;">  
               
                <br />  
                <form method="post" enctype="multipart/form-data"> 
					<label>Add images:</label>  -->
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                <!-- </form>   -->
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($db1, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  
        <!-- </div>   -->
		<!-- <div class="input-group">
			<button type="submit" class="btn" name="sub_user">Submit</button>
		</div>
		<p> <a href="a.php?logout='1'" style="color: red;">logout</a> </p> -->
				
	
	    <div class="input-group">
			<button type="submit" class="btn" name="sub_user">Submit</button>
		</div>
		<p> <a href="a.php?logout='1'" style="color: red;">logout</a> </p>	
	</form>				
</body>
</html>