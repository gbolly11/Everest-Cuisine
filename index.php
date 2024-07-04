<?php include ('templates/header.php') ?>
<?php include ('templates/connect.php') ?>


<?php
// Query to get data from database
$fetch = "SELECT * FROM `recipe_tb`";

// Send query to database
$send_fetch = mysqli_query($connection,$fetch);

// receieve data from database 
$recipes = mysqli_fetch_all($send_fetch,MYSQLI_ASSOC);

// rendering data from the database
foreach ($recipes as $recipe) {

}

?>


<div class="slider">
    <ul class="slides">
      <li class="responsive-img"><img src="img/welcome-banner.jpg" alt=""></li>
      <li class="responsive-img"><img src="img/chicken-main.jpg" alt=""></li>
    </ul>
</div>
<div class="container">
    <h1 class="center amber-text"><em>Famous Chicken Recipes</em></h1>
</div> 
<div class="container">
    <div class="row">
        <?php foreach ($recipes as $recipe) { ?>
        <div class="col l6">
            <div class="card amber lighten-3">
                <div class="card-content">
                    <h5><?php echo $recipe['r_name']; ?></h5>
                    <p style="text-align: justify;"><?php echo $recipe['r_description']; ?></p>
                </div>
                <div class="card-action center">
                    <a href="view.php?r_id=<?php echo$recipe['r_id'] ?>" class="btn black white-text">View details🤗</a>
                </div>
            </div>
        </div>
        <?php }?>       
    </div>
</div>





<?php include ('templates/footer.php') ?>