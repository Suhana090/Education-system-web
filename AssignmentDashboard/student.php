<?php
session_start();
?>

<?php
include 'include/connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student registration portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <?php include 'links.php'; ?>
</head>

<body id="studentPortal">
    <section id="studentForm">
    <header>
        <h1>
        Register as a Student
        </h1>
    </header>

    <form action="#" method="post" id="studentRegistrationForm">
        <input type="text" name="fname" placeholder="enter your first name" required>
        <input type="text" name="lname" placeholder="enter your last name" required>
        <input type="text" name="rgnumber" placeholder="enter your GR Number" required>
        <input type="text" name="course" placeholder="enter your course name" required>
        <input type="text" name="username" placeholder="Choose your username" required>
        <input type="text" name="contact" placeholder="Enter contact No." required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="choose a password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        <input type="submit" name="submit" value="Register"><br><br><br>
    </form>
    </section>
    <a href="index.php"><button class='btn btn-info'>back to homepage</button></a>
<br><br><br>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
    

        $fname =  $_POST['fname'];
        $lname = $_POST['lname'];
        $rgnumber =  $_POST['rgnumber'];
        $course = $_POST['course'];
        $username = $_POST['username'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $result = mysqli_query($conn,"SELECT * from student where email = '$email' ");

        if(mysqli_num_rows($result)>0){
            ?> 
        <script>
            alert("Email is already exist..");
        </script>
            <?php
        }else{
        
        $sql = "INSERT INTO student(fname,lname,rgnumber,course,username,contact,email,password)  VALUES ('$fname',
            '$lname','$rgnumber','$course','$username','$contact','$email','$password')";

        $res = (mysqli_query($conn,$sql));

        if($res)      
        {
            ?> 
        <script>
            alert("You have Sucessfully Register....");
        </script>
            <?php
        }
        else
        {
            echo "error :".mysqli_error($conn);
        }
    }

    }

?>