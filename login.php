<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select_users = mysqli_query($conn, "SELECT*FROM `users` WHERE email=`$email` AND password=`$pass") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {
        $row = mysqli_num_rows($select_users);
    }
    if ($row['user_type'] == 'admin') {
        $_SESSION['admin_name'] = $row['name'];
        $_SESSION['admin_email'] = $row['email'];
        $_SESSION['admin_id'] = $row['id'];
        header('location:admin_page.php');
    } elseif ($row['user_type'] == 'user') {
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location:home.php');
    }
}else{
    $message[] = 'incorrect email or password';
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '
        <div class="message">
        <span>message</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
        }
    }

    ?>



    <div class="form-container">
        <form action="method=" post">
            <h3>register now</h3>

            <input type="email" name="email" placeholder="enter email" required class="box">
            <input type="password" name="password" placeholder="enter password" required class="box">
            <input type="password" name="cpassword" placeholder="confirm password" required class="box">
            <input type="submit" name="submit" value="login now" class="btn">
            <p>don't have an account? <a href="register.php">register now</a></p>



        </form>
    </div>
</body>

</html>