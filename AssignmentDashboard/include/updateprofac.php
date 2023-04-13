<?php
require 'connection.php';
session_start();
if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $sql = "SELECT * FROM faculty WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Faculty Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/index.css">
    <?php include '../links.php'; ?>
</head>

<body id="studentPortal">
    <section id="studentForm">
        <?php 

if(isset($_POST['submit'])){
        $fname =  $_POST['fname'];
        $lname = $_POST['lname'];
        $idnumber =  $_POST['idnumber'];
        $username = $_POST['username'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];

    $query = "UPDATE faculty SET fname='$fname', lname='$lname', idnumber='$idnumber', username='$username', contact='$contact', password='$password' WHERE email='$email'";

    $res = mysqli_query($conn, $query);


    if ($res) {
        ?>
        <script>
            window.alert("Profile Updated");
        </script>
        <?php
        header('location:updateprofac.php');
    }else{
        ?>
        <script>
            alert("Profile not Updated");
        </script>
        <?php
    }
}

?>


    <header>
        <h1>
            Profile
        </h1>
    </header>

    <form action=" " method="post">
        <input type="text" name="fname" value="<?php echo $row['fname']; ?>">
        <input type="text" name="lname" value="<?php echo $row['lname']; ?>">
        <input type="text" name="idnumber" value="<?php echo $row['idnumber']; ?>">
        <input type="text" name="username" value="<?php echo $row['username']; ?>">
        <input type="text" name="contact" value="<?php echo $row['contact']; ?>">
        <input type="email" name="email" name="email" value="<?php echo $row['email']; ?>" disabled>
        <input type="password" name="password" value="<?php echo $row['password']; ?>">
        <input type="submit" name="submit" value="Update" class='btn btn-info'>
    </form>
        </section>
        <a href="facultydb.php"><button class='btn btn-info'>back to homepage</button></a>
        <br><br><br>
</body>
</html>
