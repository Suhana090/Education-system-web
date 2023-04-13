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

  <br>
  <?php 


  $query = mysqli_query($conn,"SELECT student.fname, student.lname, upload.file,upload.comment,upload.id FROM student JOIN upload ON student.id = upload.user_id where upload.assign_id = '$class' ;");

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
<div class="mypanel" align="center";>
<h4 class="text-dark"><?php echo $r['fname']." ".$r['lname']; ?></h4>
<h6 class="text-dark"><?php 

echo $r['file']; 


?></h6>
<h6 class="text-dark"><?php echo $r['comment']; ?></h6>
<button class="btn btn-info"><a href="grade.php?id=<?php echo $r['id'] ?>">Grade</a></button>
</div>
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
         <label style="margin-left: 5px;color: black;"> <h2>No Work has been submitted</h2> </label>
      </center>

  </div>

  <?php

}

   ?>

</div>
   
</body>
</html> 
