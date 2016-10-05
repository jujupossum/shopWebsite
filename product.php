<!DOCTYPE html>
<html lang="en-us">

<head>
<meta charset="utf-8">
<title>Dragon Flowers</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

<div id="header">
	<?php include('methods/header.php'); ?>
</div>

<div class="bufferLarge"></div>

<div class="container">
	<h1 class="text-center">Products</h1><br>
	
	<div class="bufferSmall"></div>
	
	<div class="row">
		<div class="col-sm-2"><img src="images/product.png"></div>
		<div class="col-sm-2"><img src="images/product.png"></div>
		<div class="col-sm-2"><img src="images/product.png"></div>
		<div class="col-sm-2"><img src="images/product.png"></div>
		<div class="col-sm-2"><img src="images/product.png"></div>
		<div class="col-sm-2"><img src="images/product.png"></div>
	
	</div>
	
	
	<div class="row">
		<div class="col-sm-2">
			<h3>Product Title 1</h3><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		</div>
		<div class="col-sm-2">
			<h3>Product Title 2</h3><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		</div>
		<div class="col-sm-2">
			<h3>Product Title 3</h3><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		</div>
		<div class="col-sm-2">
			<h3>Product Title 4</h3><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		</div>
		<div class="col-sm-2">
			<h3>Product Title 5</h3><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		</div>
		<div class="col-sm-2">
			<h3>Product Title 6</h3><br>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
		</div>
	</div>
</div>

<div class="bufferLarge"></div>

<div class="container">
	
	
	<h1 class="text-center">Place an Order</h1>
	
	<div class="bufferSmall"></div>
	
	<div class="row">
		<form  action="action_page.php">
			<div class="col-sm-3 col-md-offset-2">
  				<h4>Your information</h4>
  				<input class="inputSmall" type="text" name="firstname" placeholder="First name"><br>
  				<input class="inputSmall" type="text" name="lastname" placeholder="Last name">
  				<input class="inputSmall" type="text" name="email" placeholder="Email">
  				<input class="inputSmall" type="text" name="phone" placeholder="Phone number">  		
  			</div>
			<div class="col-sm-3">
  				<h4>Destination information</h4>
  				<input class="inputSmall" type="text" name="firstname" placeholder="First name"><br>
  				<input class="inputSmall" type="text" name="lastname" placeholder="Last name">
  				<input class="inputSmall" type="text" name="email" placeholder="Email">
  				<input class="inputSmall" type="text" name="phone" placeholder="Phone number">  		
  				<input class="inputSmall" type="text" name="address" placeholder="Address">
  				<input class="inputSmall" type="time" name="time">

  			</div>  		
  			<div class="col-sm-3">
  				<h4>Additional requests</h4>
  				<textarea name="message" rows="10" cols="30" placeholder="Requests"></textarea><br>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-sm-1 col-md-offset-5">
  				<input type="submit" value="Submit">
  			</div>
  			<div class="col-sm-1">
  				<input type="reset" value="Reset">
  			</div>
		</div>
		</form>

</div>



<div class="bufferLarge"></div>

<div id="footer">
	<?php include('methods/footer.php'); ?>
</div>



</body>
</html>