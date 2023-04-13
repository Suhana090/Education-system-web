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
        <h1>Join Class</h1>

        <form action="join.php" method="post">

            <input type="text" name="classcode" placeholder="Enter code">

            <input type="submit" name="submit" value="Join">
        </form>
         <a href="studentdb.php"><button class='btn btn-info'>back to homepage</button></a>

    </section>
</body>
</html>



<?php

    if(isset($_POST['submit']))
    {
        include 'connection.php';
        $classcode =  $_POST['classcode'];
        $email = $_SESSION['email'];

        $query1 = mysqli_query($conn,"SELECT * FROM student WHERE email='$email'");
        $fetchQ = mysqli_fetch_array($query1);
        $userID = $fetchQ['id'];

        $sql = mysqli_query($conn,"SELECT * FROM createclass where classcode='$classcode' ");
        $fetchQ1 = mysqli_fetch_array($sql);
        $classID = $fetchQ1['id'];

        $query_user = mysqli_query($conn,"SELECT * FROM joinclass WHERE class_id='$classID' and user_id='$userID' ");
        
        if(mysqli_num_rows($query_user)>0)
        {
            echo "You have already join the class.";
        }else
        {
        $query3 = mysqli_query($conn, "INSERT INTO joinClass(class_id, user_id) VALUES('$classID','$userID')");

        $data_query = mysqli_query($conn, "UPDATE createclass SET stud_array=CONCAT(stud_array,'$email ,') WHERE classcode='$classcode'");
        header('Location:studentdb.php');
        }

    }

?>


