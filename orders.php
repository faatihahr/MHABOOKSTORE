<?php

include 'db.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <?php include 'header.php'; ?>
   <div class="heading">
      <h3>your orders</h3>
   </div>

   <section class="placed-orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">
       <p class="empty">no orders placed yet!</p>
   </div>

</section>

<?php include 'footer.php'; ?>
<!-- js file link  -->
<script src="js/script.js"></script>
</body>
</html>