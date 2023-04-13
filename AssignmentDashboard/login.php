<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login dashboard</title>
    <link rel="stylesheet" href="css/index.css">
     <?php include 'links.php'; ?>


</head>
<body id="login_page">

    <?php 
    include 'include/connection.php';
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM student where email='$email' and password='$password' ";
        $query = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($query);

        if ($count) {
            $result = mysqli_fetch_assoc($query);
            $_SESSION['email'] = $result['email'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['sid'] = $result['id'];
            echo "Login Sucessful";  
            header('location:include/studentdb.php');         
        }else{
            ?>
            <script>
                alert('Invalid email and password');
            </script>

            <?php
        }
    }

     ?>
    
    <section id="login">
        <h1>login as a Student</h1>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

            <input type="text" name="email" placeholder="Enter your email or username">
            <input type="password" name="password" placeholder="Enter your password">

            <input type="submit" name="submit" value="submit">
        </form>
         <a href="index.php"><button class='btn btn-info'>back to homepage</button></a>

    </section>
</body>
</html>