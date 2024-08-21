<?php
include "config.php";
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
</head>

<body>
    <?php include'header.php'; ?>
   
    <div class="heading">
        <h3>placed orders</h3>
        <P><a href="home.php">home</a>/orders</P>
     </div>
     <section class="placed-order">
        <h1 class="title">placed orders</h1>
        <div class="box-container">
            <?php 
             $order_query=mysqli_query($conn,"SELECT*FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
             if(mysqli_num_rows($order_query)>0){
              while($fetch_orders=mysqli_fetch_assoc($order_query)){
            ?>
            <div class="box">
            <p>placed on: <span><?php echo $fetch_orders['placed on']; ?></span></p>
            <p>name: <span><?php echo $fetch_orders['name']; ?></span></p>
            <p>number: <span><?php echo $fetch_orders['number']; ?></span></p>
            <p>email: <span><?php echo $fetch_orders['email']; ?></span></p>
            <p>address: <span><?php echo $fetch_orders['address']; ?></span></p>
            <p>payment method: <span><?php echo $fetch_orders['method']; ?></span></p>
            <p>your orders: <span><?php echo $fetch_orders['total_products']; ?></span></p>
            <p>total price: <span><?php echo $fetch_orders['total_price']; ?></span></p>
            <p>payment status: <span style="color:<?php if($fetch_orders['payment_status']=='pending'){echo 'red';}else{echo 'green';}?>;"><?php echo $fetch_orders['payment_status']; ?></span></p>
            </div>
            <?php 
             }
            }else{
               echo'<p class="empty"no orders placed yet</p>';
            }
            ?>
        </div>
     </section>



     <?php include 'footer.php'; ?> 
    <script src="js/script.js"></script>
</body>

</html>