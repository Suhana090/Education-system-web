<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<link rel="stylesheet" href="../css/user.css">
	<?php include 'nav.php';?>

	<style type="text/css">
		

.mypanel{
  border: 1px solid black; 
  margin: 10px 29px 3px 10px; 
  box-shadow: 0 1px 2px rgba(0,0,0,0.05); 
  background-color: lightgrey;  
  padding:35px;
  border-radius: 5px;
}
.col-md-3 a{
      text-decoration: none;
      color: black;
}
	</style>

</head>
<body id=home><br>
     <h1>Student DashBoard</h1>
    <div align="center">
    	<a href="join.php">
    		<button class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Join Class</button>
<!--         <?php// echo $_SESSION['sid'];  ?> -->
    	</a>
    </div><br><br><br>

<?php

require 'connection.php';
$email = $_SESSION['email'];
$user = $_SESSION['sid'];

$sql = "SELECT createclass.classname, createclass.subject, createclass.section, createclass.name, createclass.id 
FROM createclass JOIN joinclass ON createclass.id = joinclass.class_id where joinclass.user_id = '$user';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
   // $_SESSION['cid'] = $row['id'];
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post">
<a href="submit.php?id=<?php echo $row["id"]; ?> "><div class="mypanel" align="center";>
<h2 class="text-dark"><?php echo $row["subject"]; ?></h2>
<h5 class="text-info"><?php echo $row["classname"]; ?></h5>
<h5 class="text-danger"><?php echo $row["section"]; ?></h5>
<h5 class="text-info"> <?php echo $row["name"]; ?></h5>
</div></a>
</form>
          
</div>

<?php
$count++;
if($count==4)
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
         <label style="margin-left: 5px;color: black;"> <h2>No Class Room has been Joined.</h2> </label>
      </center>

  </div>

  <?php

}

?>
   
</body>
</html>

