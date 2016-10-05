<html lang="en-us">

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    
<?php

   if ($_GET["name"]=="chan" && $_GET["password"]=="password"){
       echo("User logged in");
                
    }else{
        echo("Incorrect username or password");
    }
            
        
        
    

?>

</body>
</html>