<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
table, th, td {

  border: 1px solid wheat;
  border-collapse: collapse;
}

th, td {
  padding: 5px;
  text-align: left;  
  color:lightgray;  
}
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
.panel-heading{
  color: white;
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

<?php
if(isset($_GET['del']))
{
  $id=intval($_GET['del']);
  $adn="delete from complaints where Student_Id=?";
    $stmt= $mysqli->prepare($adn);
    $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();    
        echo "<script>alert('Data Deleted');</script>" ;
}
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "dbms");
$query = "
    SELECT aa.Student_Id AS Student_Id, aa.roomno, aa.phoneno, aa.complaint_date , aa.complaint_type, aa.description, bb.staffname
    FROM complaints AS aa 
    INNER JOIN staff AS bb
    ON aa.complaint_type = bb.department ";
$result = mysqli_query($conn, $query) or die( mysqli_error($conn));

echo '
<div class="ts-main-content">
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2 class="page-title">Student Complaints Table</h2>
            <div class="panel panel-default">
              <div class="panel-heading">Student Complaints</div>
              <br>
              <div class="panel-body">
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>Student Id</th>
                          <th>Room No</th>
                          <th>Phone No</th>
                          <th>Complaint Date</th>
                          <th>Complaint Type</th>
                          <th>Description</th>
                          <th>Staff Name</th>
                          <th>Action</th>
                          </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Student Id</th>
                          <th>Room No</th>
                          <th>Phone No</th>
                          <th>Complaint Date</th>
                          <th>Complaint Type</th>
                          <th>Description</th>
                          <th>Staff Name</th>
                          <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>';
                


while($row = mysqli_fetch_array($result)) {
  echo '<td>'.$row['Student_Id'].'</td>';
    echo '<td>'.$row['roomno'].'</td>';
    echo '<td>'.$row['phoneno'].'</td>';
    echo '<td>'.$row['complaint_date'].'</td>';
    echo '<td>'.$row['complaint_type'].'</td>';
    echo '<td>'.$row['description'].'</td>';
    echo '<td>'.$row['staffname'].'</td>';
    echo "<td><a href='delete.php?id=".$row['Student_Id']."' onClick=\"javascript:return confirm('are you sure you want to delete this?');\">x</a></td><tr>";
   
  
}
echo '
        </tbody>
    </table>';
?>
</div>
<p> <a href="a.php?logout='1'" style="color: red;">logout</a> </p>

</body>
</html>