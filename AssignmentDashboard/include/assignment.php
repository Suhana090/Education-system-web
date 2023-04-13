
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

    <?php
include 'connection.php';

    if(isset($_POST['submit']))
    {
        
        $comment =  $_POST['comment'];

        $file = $_POST['file'];
        $user_id = $_SESSION['sid'];
        $class_id = $_SESSION['classid'];
        $assign_id = $_SESSION['aid'];

        $result = mysqli_query($conn,"SELECT * from upload where assign_id = '$assign_id' ");

        if(mysqli_num_rows($result)>0){

            $a = mysqli_query($conn,"UPDATE upload SET comment = '$comment', file = '$file' where assign_id = '$assign_id' ");

        }else{
        
        $sql = "INSERT INTO upload(class_id,assign_id,user_id,file,status,comment)  VALUES ('$class_id','$assign_id','$user_id','$file','Submitted','$comment')";


        $res = (mysqli_query($conn,$sql));

        if($res)
        {
            
            header('location: studentdb.php');
        }
        else
        {
            echo "error :".mysqli_error($conn);
        }
    }

    }
?>


 <section id="login">
        <h1>Assign work</h1>

        <form action="assignment.php" method="post">
            <input type="text" name="comment" placeholder="Enter comment">
            <input type="file" name="file">

            <input type="submit" name="submit" value="Update">
        </form>
         <a href="studentdb.php"><button class='btn btn-info'>back</button></a>

    </section>
</body>
</html>
    
    
