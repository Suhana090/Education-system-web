
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
    <?php
include 'connection.php';
$aid = $_GET['id'];


$sq = "SELECT * FROM assignment WHERE id='$aid'";
        $result = mysqli_query($conn, $sq);
        $row = mysqli_fetch_array($result);

    if(isset($_POST['submit']))
    {
        
        $title =  $_POST['title'];
        $description = $_POST['description'];
        $deadline =  $_POST['deadline'];
        $file = $_POST['file'];

        
        $sql = "UPDATE assignment SET title='$title', description='$description', deadline='$deadline', file='$file' WHERE id='$aid'";


        $res = (mysqli_query($conn,$sql));

        if($res)
        {
            
            header('location: facultydb.php');
        }
        else
        {
            echo "error :".mysqli_error($conn);
        }

    }

?>
    
    <section id="login">
        <h1>Assign work</h1>

        <form action="#" method="post">
            <input type="text" name="title" value="<?php echo $row['title']; ?>">
            <input type="text" name="description" value="<?php echo $row['description']; ?>">
            <label style="color: white;">Enter Due date   : </label><input type="date" name="deadline" value="<?php echo $row['deadline']; ?>">
            <input type="file" name="file" value="<?php echo $row['file']; ?>">

            <input type="submit" name="submit" value="Update">
        </form>
         <a href="assign.php"><button class='btn btn-info'>back</button></a>

    </section>
</body>
</html>

