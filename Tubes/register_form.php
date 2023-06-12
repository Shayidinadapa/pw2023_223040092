<?php

@include 'config.php';

if(isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['User_type'];


    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {

        $error[] = 'user already exist!';

    }else{

        if($pass != $cpass){
            $error[] = 'password not matched';
        }else{
            $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email',
            '$pass','$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }

    }

};


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>


        <!-- =======Style.css======= -->
        <link rel="stylesheet" href="css/styleb.css">


</head>
<body>


    <div class="form-container">

    <form action="" method="post">
        <h3>Register sekarang juga</h3>
        <?php 
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>

        <input type="text" name="name" require placeholder="Masukan nama kamu">
        <input type="email" name="email" require placeholder="Masukan email kamu">
        <input type="password" name="password" require placeholder="Masukan Password kamu">
        <input type="password" name="cpassword" require placeholder="Konfirmasi Password kamu">
        <select name="User_type">   
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        <input type="submit" name="submit" value="Register sekarang juga" class="form-btn">
        <p>Sudah mempunya akun?? <a href="login_form.php">Login sekarang</a></p>
    </form>

    </div>

    
</body>
</html>