<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Faculty Dashboard</title>
	<link rel="stylesheet" href="../css/user.css">
	<?php include 'nav1.php';?>

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
<body>
	<h1>Faculty DashBoard</h1>
	<div align="center">
		<a href="create.php">
			<button class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Create Class</button>
		</a>
	</div><br><br><br>

<?php

require 'connection.php';
$email = $_SESSION['email'];

$sql = "SELECT * FROM createclass where email='$email' ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;


  while($row = mysqli_fetch_assoc($result)){
  	//$_SESSION['cid'] = $row['id'];
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post">
<a href="assign.php?id=<?php echo $row["id"]; ?>"><div class="mypanel" align="center";>
<!--<img src="<?php //echo $row["images_path"]; ?>" class="img-responsive"> -->
<h2 class="text-dark"><?php echo $row["subject"]; ?></h2>
<h5 class="text-info"><?php echo $row["classname"]; ?></h5>
<h5 class="text-danger"><?php echo $row["section"]; ?></h5>
<h5 class="text-danger">Classcode : <?php echo $row["classcode"]; ?></h5>
<h5 class="text-info"></h5>
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
         <label style="margin-left: 5px;color: black;"> <h2>No Class Room has been created.</h2> </label>
      </center>

  </div>

  <?php

}

?>

     
</body>
</html>