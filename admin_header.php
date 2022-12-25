<?php
   if (isset($message)) {
      foreach ($message as $message) {
         
      ?>
         <div class="message">
            <span><?=$message?></span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i> 
         </div>
      <?php        
      }
   }
?>

<header class="header">
    <div class="flex">
        <a href="admin_page.php" class="logo">Admin</a>
        <!-- nav bar -->
        <nav class="navbar">
         <a href="admin_products.php">Products</a>
         <a href="admin_orders.php">Orders</a>

        </nav>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
        </div>
        <div class="account-box">
            <p>Username: <span><?php echo $_SESSION['admin_name'];?></span></p>
            <p>Email: <span><?php echo $_SESSION['admin_email'];?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
        </div>
    </div>
</header>