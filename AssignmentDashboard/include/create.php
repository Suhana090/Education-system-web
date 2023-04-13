
<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>faculty dashboard</title>
    <link rel="stylesheet" href="../css/index.css">
     <?php include '../links.php'; ?>


</head>
<body id="login_page">
    
    <section id="login">
        <h1>Create Class</h1>

        <form action="#" method="post">

            <input type="text" name="classname" placeholder="Enter class name" required>
            <input type="text" name="section" placeholder="Enter section">
            <input type="text" name="name" placeholder="Enter your name">
            <input type="text" name="subject" placeholder="Enter subject name">

            <input type="submit" name="submit" value="Create">
        </form>
         <a href="facultydb.php"><button class='btn btn-info'>back to homepage</button></a>

    </section>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        include 'connection.php';
        $classname =  $_POST['classname'];
        $section = $_POST['section'];
        $name =  $_POST['name'];
        $subject = $_POST['subject'];
        $classcode = substr(md5(mt_rand()), 0,5);
        $email = $_SESSION['email'];
        
        $sql = "INSERT INTO createclass(classname,section,name,subject,classcode,email)  VALUES ('$classname',
            '$section','$name','$subject','$classcode','$email')";

        $res = (mysqli_query($conn,$sql));

        if($res)
        {
            echo "class Room create sucessfully";
        }
        else
        {
            echo "error :".mysqli_error($conn);
        }

    }

?>