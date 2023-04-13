<?php 
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Faculty Dashboard</title>

	<link rel="stylesheet" href="../css/user.css">
	<?php include 'nav1.php';?>

<style>
body {font-family: Arial;}


.tab {
  
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  
}

.tab button {
  
  background-color: inherit;
  
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}
.tab button:hover {
  background-color: #ddd;
}

.tab button.active {
  background-color: #ccc;
}

.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.mypanel{
  border: 1px solid black; 
  margin: 10px 29px 3px 10px; 
  box-shadow: 0 1px 2px rgba(0,0,0,0.05);   
  padding:20px;
  border-radius: 5px;
}
.col-md-3 a{
      text-decoration: none;
      color: black;
}

</style>
</head>
<body>
<?php  
		require 'connection.php';
		$class = $_GET['id'];
		$sql = mysqli_query($conn, "SELECT * FROM createclass where id='$class' ");
		$row = mysqli_fetch_assoc($sql);

 ?>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')"><?php echo $row["subject"]; ?></button>
  <button style="float: none;position: absolute;top: 11%;left: 45%;transform: translate(-50%, -50%);" class="tablinks" onclick="openCity(event, 'classwork')">Classwork</button>
  <button style="float: none;position: absolute;top: 11%;left: 55%;transform: translate(-50%, -50%);" class="tablinks" onclick="openCity(event, 'people')">People</button>

</div><br><br>





<div id="people" class="tabcontent">
  <?php

$email = $_SESSION['email'];

$sql = "SELECT student.fname, student.lname
FROM student JOIN joinclass ON student.id = joinclass.user_id where joinclass.class_id = '$class';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;


  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>

<div class="col-md-4">

<form method="post">
<div class="mypanel" align="center";>
<h4 class="text-dark"><?php echo $row["fname"]." ".$row["lname"]; ?></h4>
<h5 class="text-info"></h5>
</div>
</form>
          
</div>
<?php
$count++;
if($count==3)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>

  <div class="container">
      <center>
         <label style="margin-left: 5px;color: black;"> <h2>No Student has been joined.</h2> </label>
      </center>

  </div>

  <?php

}

?>
</div>




<div id="classwork" class="tabcontent">
  <div align="center">
    <a href="assignwork.php?id=<?php echo $_GET['id']; ?>">
      <button class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Assign Work</button>
    </a>
  </div><br><br><br>
  <?php 


  $query = mysqli_query($conn,"SELECT * From assignment where class_id='$class' ");

if (mysqli_num_rows($query) > 0)
{
  $c=0;

  while($r = mysqli_fetch_assoc($query)){
    //$_SESSION['aid']=$r['id'];
    if ($c == 0)
      echo "<div class='r'>";

?>

<div class="col-md-3">

<form method="post">
<a href="ashow.php?id=<?php echo $r["id"]; ?>"><div class="mypanel" align="center";>
<h4 class="text-dark"><?php echo $r['title']; ?></h4>
<h6 class="text-dark"><?php echo $r['description']; ?></h6>
<h5 class="text-dark"><?php echo $r['deadline']; ?></h5>
<button class="btn btn-info"><a href="editassign.php?id=<?php echo $r["id"]; ?>">Edit</a></button>
</div></a>
</form>
          
</div>
<?php
$c++;
if($c==3)
{
  echo "</div>";
  $c=0;
}
}
?>


<?php
}
else
{
  ?>

  <div class="container">
      <center>
         <label style="margin-left: 5px;color: black;"> <h2>No work has been assign.</h2> </label>
      </center>

  </div>

  <?php

}

   ?></div>




<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 
