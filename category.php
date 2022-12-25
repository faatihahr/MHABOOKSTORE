<?php

include 'db.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php include 'header.php'; ?>

    <div class="heading">
        <h3>Category</h3>
        <div class="box-container">

        <?php  
            $select_category = mysqli_query($conn, "SELECT * FROM `category` ORDER BY `id` Desc ") or die('query failed');
            if(mysqli_num_rows($select_category) > 0){
                while($fetch_category = mysqli_fetch_assoc($select_category)){
        ?>
            <form action="" method="post" class="box">
                <div class="name"><?php echo $fetch_category['name']; ?></div>
                <input type="hidden" name="category_name" value="<?php echo $fetch_category['name']; ?>">
            </form>
        <?php
            }
        }else{
            echo '<p class="empty">no products added yet!</p>';
        }
        ?>
    </div>
    

<?php include 'footer.php'; ?>
</body>

<script src="js/script.js"></script>

</html>