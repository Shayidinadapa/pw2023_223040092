<?php

@include 'config.php';

session_start();

if(isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>

    <!-- =======Style.css======= -->
    <link rel="stylesheet" href="css/styleb.css">


</head>
<body>



    <div class="container">


        <div class="content">
            <h3>Hi, <span> Kawan </span></h3>
            <h1>Welcome <span><?php echo $_SESSION['user_name']?></span></h1>
            <p>ini adalah halaman user</p>
            <a href="login_form.php" class="btn">Login</a>
            <a href="register_form.php" class="btn">register</a>
            <a href="Logout.php" class="btn">Logout</a>

        </div>
    
    </div>
    
</body>
</html>