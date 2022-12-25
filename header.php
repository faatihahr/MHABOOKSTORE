<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<header class="header">

   <div class="header-2">
      <div class="flex">
         <div id="menu-select"></div>
         <a href="home.php" class="logo">
            <img src="img/icons/logo.png" alt="logo">
         </a>

         <nav class="navbar">

            <a href="home.php">
               <h2>Home</h2>
            </a>

            <a href="shop.php">
               <h2>Shop</h2>
            </a>

            <a href="category.php">
               <h2>Category</h2>
            </a>
            <a href="orders.php">
               <h2>Orders</h2>
            </a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> 
               <span class="message-count"><?= $cart_rows_number ?></span> 
            </a>
         </div>

         <div class="user-box">
            <p>Username : <span><?= $_SESSION['user_name'] ?></span></p>
            <p>Email : <span><?= $_SESSION['user_email'] ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
         </div>
      </div>
   </div>

</header>