<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

    <!-------------------------------- Navbar ---------------------------------------------------------->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">
       <img src="images/LaundryCahayaLogo.png" width="60" height="60" alt="">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">SHOP <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="codeprogramer.html">:PROGRAMMER</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">:GAMER</a>
	      </li>
	      
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn " type="submit"><img src="images/search.png" width="25" height="25"></button>
	    </form>
	  </div>
	</nav>

    <h1> Laundry Cahya </h1>

    
    <br>
    <h1>Yay! Selamat datang : <?php echo $_SESSION['nama']; ?></h1>

    <br>
    <a href="logout.php">Klik disini untuk logout.</a>
    
</body>
</html>