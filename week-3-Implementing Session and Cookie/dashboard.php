<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f2f2f2;
        }
        .container{
            width:500px;
            margin:50px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }
        h2{
            text-align:center;
        }
        p{
            font-size:18px;
        }
        a{
            text-decoration:none;
            padding:10px 15px;
            color:white;
            border-radius:5px;
            margin-right:10px;
        }
        .logout{
            background:red;
        }
        .cookie{
            background:orange;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Student Dashboard</h2>

    <p><strong>Student Name (Session): </strong>
        <?php
        if(isset($_SESSION['student_name'])){
            echo $_SESSION['student_name'];
        }else{
            echo "Session Not Available";
        }
        ?>
    </p>

    <p><strong>Student ID (Session): </strong>
        <?php
        if(isset($_SESSION['student_id'])){
            echo $_SESSION['student_id'];
        }else{
            echo "Session Not Available";
        }
        ?>
    </p>

    <p><strong>Student Name (Cookie): </strong>
        <?php
        if(isset($_COOKIE['student_name'])){
            echo $_COOKIE['student_name'];
        }else{
            echo "Cookie Not Available";
        }
        ?>
    </p>

    <br>

    <a href="logout.php" class="logout">Remove Session</a>

    <a href="remove_cookie.php" class="cookie">Remove Cookie</a>

</div>

</body>
</html>
