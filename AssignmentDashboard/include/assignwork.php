
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

    ?>
    
    <section id="login">
        <h1>Assign work</h1>

        <form action="#" method="post">
            <input type="text" name="title" placeholder="Enter Title">
            <input type="text" name="description" placeholder="Enter Description" required>
            <label style="color: white;">Enter Due date   : </label><input type="date" name="deadline">
            <input type="file" name="file">

            <input type="submit" name="submit" value="Assign">
        </form>
         <a href="studentdb.php?id=<?php echo $_GET['id']; ?>"><button class='btn btn-info'>back</button></a>

    </section>
</body>
</html>

<?php
include 'connection.php';

    if(isset($_POST['submit']))
    {
        
        $title =  $_POST['title'];
        $description = $_POST['description'];
        $deadline =  $_POST['deadline'];
        $class = $_GET['id'];
        $file = $_POST['file'];


        $result = mysqli_query($conn, "SELECT * FROM createclass where id='$class' ");
        $row = mysqli_fetch_assoc($result);

        $code = $row['classcode'];
        
        
        $sql = "INSERT INTO assignment(title,description,deadline,file,class_id,classcode)  VALUES ('$title',
            '$description','$deadline','$file','$class','$code')";


        $res = (mysqli_query($conn,$sql));

        if($res)
        {
            ?>

            <script>
                alert("Assignment assign sucessfully.");
            </script>
            <?php
            header('location: facultydb.php');
        }
        else
        {
            echo "error :".mysqli_error($conn);
        }

    }

?>