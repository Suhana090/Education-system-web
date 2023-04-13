<?php
require 'connection.php';
session_start();
if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $sql = "SELECT * FROM student WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/index.css">
    <?php include '../links.php'; ?>
</head>

<body id="studentPortal">


    <?php 

if(isset($_POST['submit'])){
        $fname =  $_POST['fname'];
        $lname = $_POST['lname'];
        $rgnumber =  $_POST['rgnumber'];
        $course = $_POST['course'];
        $username = $_POST['username'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];

    $query = "UPDATE student SET fname='$fname', lname='$lname', rgnumber='$rgnumber', course='$course', username='$username', contact='$contact', password='$password' WHERE email='$email'";

    $res = mysqli_query($conn, $query);
    


    if ($res) {
         echo "Profile updated";
    }else{   

          echo("Profile not Updated");    
    }
}

?>

    <section id="studentForm">
    <header>
        <h1>Profile</h1>
    </header>

    <form action="#" method="post" id="studentRegistrationForm">
        <input type="text" name="fname" value="<?php echo $row['fname']; ?>">
        <input type="text" name="lname" value="<?php echo $row['lname']; ?>">
        <input type="text" name="rgnumber" value="<?php echo $row['rgnumber']; ?>">
        <input type="text" name="course" value="<?php echo $row['course']; ?>">
        <input type="text" name="username" value="<?php echo $row['username']; ?>">
        <input type="text" name="contact" value="<?php echo $row['contact']; ?>">
        <input type="email" name="email" value="<?php echo $row['email']; ?>" disabled>
        <input type="password" name="password" value="<?php echo $row['password']; ?>">
        <input type="submit" name="submit" value="Update"><br><br><br>
    </form>
    </section>
    <a href="studentdb.php"><button class='btn btn-info'>back to homepage</button></a>
<br><br><br>
</body>
</html>

