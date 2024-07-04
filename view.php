<?php include ('templates/header.php') ?>
<?php include ('templates/connect.php') ?>

<?php 

$r_id = $_GET ['r_id'];

// get single data row from table
$get_row = "SELECT * FROM `recipe_tb` WHERE `r_id` = '$r_id'";

// send query to database
$send_row = mysqli_query($connection,$get_row);

// receive data from database
$recipe = mysqli_fetch_assoc($send_row);
?>

<div class="container">
    <img style="margin-top: 50px;" src="img/grilled-chicken.jpg" alt="">
    <h4><strong><?php echo $recipe['r_name']; ?></strong></h4>
    <h6>Ingredients: <?php echo $recipe['r_ingredients']; ?></h6>
    <h6>Author: <?php echo $recipe['r_author']; ?></h6>
    <h6>Date Created: <?php echo $recipe['date_created']; ?></h6>
</div>










<?php include ('templates/footer.php') ?>