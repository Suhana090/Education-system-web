<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'links.php'; ?>
    <title>Assignment Dashboard</title>

    <link rel="stylesheet" href="css/index.css">
</head>

<body id="home">

    <section id="homePage">
        <header>
            <h1>Assignment Dashboard</h1>
        </header>
        <section id="reg_buttons">
            <a href="faculty.php"><button class='btn btn-info'>Register as a Faculty</button></a>
            <a href="student.php"><button class='btn btn-info'>Register as a student</button></a>
        </section>
        <section>
            <h3>Already have an account?</h3>
            <a href="loginf.php"><button class='btn btn-info'>Login as a Faculty</button></a>
            <a href="login.php"><button class='btn btn-info'>Login as a Student</button></a>
        </section>
    </section>
    
</body>
</html>