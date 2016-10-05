<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>Dragon Flowers</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div>
	<?php include('methods/header.php'); ?>
</div>

<div class="slide">
    <?php include('methods/carousel.php'); ?>
</div>

<div class="bufferLarge"></div>

<div class="container">
    <h1 class="text-center">Landing Page Text</h1><br>
    <div class="row">
        <div class="col-sm-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            </p>
        </div>
        <div class="col-sm-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            </p>
        </div>
    </div>
</div>

<div class="bufferLarge"></div>

<div class="container">
    <h1 class="text-center">Newsletter</h1>
</div>

<div class="bufferLarge"></div>


<div id="footer">
  <?php include('methods/footer.php'); ?>
</div>

</body>
</html>
