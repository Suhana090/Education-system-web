<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student dashboard</title>
    <link rel="stylesheet" href="../css/index.css">
     <?php include '../links.php'; ?>


</head>
<body id="login_page">
    
    <section id="login">
        <h1>Grade</h1>

        <form action="#" method="post">

            <input type="text" name="grade" placeholder="Enter grade">

            <input type="submit" name="submit" value="submit">
        </form>
         <a href="facultydb.php"><button class='btn btn-info'>back</button></a>

    </section>
</body>
</html>



<?php

    if(isset($_POST['submit']))
    {
        include 'connection.php';
        $grade =  $_POST['grade'];
        $id = $_GET['id'];

        $data_query = mysqli_query($conn, "UPDATE upload SET grade = '$grade' WHERE id='$id'");

    }

?>


