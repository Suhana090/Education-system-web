<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php  include '../links.php' ?>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: skyblue;
  color: white;
}

.topnav-right {
  float: right;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="facultydb.php">Home</a>
  <a href="updateprofac.php">Profile</a>
  <div class="topnav-right">
    <a href="#search">welcome <?php echo $_SESSION['username']; ?></a>
    <a href="logoutf.php">Logout</a>
  </div>
</div>

</body>
</html>
