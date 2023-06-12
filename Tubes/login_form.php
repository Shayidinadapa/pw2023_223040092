<?php

@include 'config.php';

session_start();

if(isset($_POST['login'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];


    $result = mysqli_query(" SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ");

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);
        if( password_verify($pass, $row["password"]) ) {
             header("location: index.php");
             exit;
        }

    }else{
        $error[] = 'email atau password kamu salah!';
    }

};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


        <!-- =======Style.css======= -->
        <link rel="stylesheet" href="css/styleb.css">


</head>
<body>

    <div class="form-container">

        <form action="" method="post">
            <h3>Login</h3>
            <?php 
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="email" name="email" Require placeholder="Masukan email kamu">
            <input type="password" name="password" require placeholder="Masukan Password kamu">
            <input type="submit" name="submit" value="login sekarang juga" class="form-btn">
            <p>Tidak punya akun?? <a href="register_form.php">Register sekarang</a></p>
        </form>

    </div>

    
</body>
</html>