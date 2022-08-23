<?php include("connect.php");


session_start();
    $_SESSION; 

	include("connect.php");
	include("functions.php");

	$flowersObj = new Flowers();

	$data = $flowersObj->viewFlowers();
    
    // if (isset(($_GET['all']))) {
	// 	$data = $flowersObj->viewFlowers();
	// }

    if (isset(($_GET['birthday']))) {
		$data = $flowersObj->viewCategory("1");
	}

    if (isset(($_GET['v_day']))) {
		$data = $flowersObj->viewCategory("2");
	}

    if (isset(($_GET['anniversary']))) {
		$data = $flowersObj->viewCategory("3");
	}

    //echo var_dump($data[3])
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;800&family=Raleway:wght@200;400&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="/CSS/flowers.css">

        
        <title>Bloom Boutique</title>



</head>
<body>
<div class="allwrapper">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" style="padding-left: 20px" href="#">Bloom</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="padding-left: 20px" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      

    </ul>

  </div>
</nav>
<!-----BANNER------->
    <div class="banner">
        <div class="bannerText">
            <h2>Bloom</h2>
            <p> Flower Boutique </p>
        </div>
    </div>

<!------MAIN CONTENT------>


<div class="buttonBox">
<!-- <div class="buttonHeader">Filter Products</div> -->
    <form method="GET" class="row justify-content-center">
        <input type="submit" style="margin:20px;" name="all" value="All Flowers" class="col-sm-12 col-md-6 col-lg-3 productBtn">  
        <input type="submit" style="margin:20px;" name="birthday" value="Birthdays" class="col-sm-12 col-md-6 col-lg-3 productBtn">
        <input type="submit" style="margin:20px;" name="anniversary" value="Anniversaries" class="col-sm-12 col-md-6 col-lg-3 productBtn">
        <input type="submit" style="margin:20px;" name="v_day" value="Valentine's Day" class="col-sm-12 col-md-6 col-lg-3 productBtn">
    </form>
</div>

<!-----display---->
    <div class="contentWrapper row">

    <?php
    foreach ($data as $flowers){
    ?>

        <div class="productWrapper col-sm-6 col-md-6 col-lg-3">
            <img class = "flower_image" src = <?php echo $flowers['flower_image']?>>
                
      
           
            <div class="flower_name"><?php echo $flowers['flower_name']?></div>
            <div class="price">$<?php echo $flowers['price']?></div>
            <div class="rating"><?php echo $flowers['rating']?><i style= "color: #edd22e" class ="fas fa-star star"></i></div>
            <button class=" btn addButton mt-2" style="color: black">Add To Cart</button>
        </div>

    <?php } ?>
    </div>
<!-----displayEND---->

</body>

</html>
