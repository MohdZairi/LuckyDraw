<?php
    require_once "inc/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>Lucky Draw</title>
    <!-- add icon link -->
    <link rel = "icon" href ="assets/imgs/logo.svg">
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="assets/css/leadmark.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo.svg" alt="">    
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- End Of Second Navigation -->


    
    
    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">Congratulations</h1>
            <?php if (isset($_GET['name'])) { ?>
                <h1 class="subtitle"><?php echo $_GET['name']; ?></h1>
		    <?php } ?>
            <?php if (isset($_GET['noacc'])) { ?>
                <h1 class="title"><?php echo $_GET['noacc']; ?></h1>
		    <?php } ?>
            <?php if (isset($_GET['random'])) { ?>
                <h1 class="title"><?php echo $_GET['random']; ?></h1>
		    <?php } ?>
            
        </div>
    
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div> 
        
        <form action= "luckydraw.php"  onsubmit="return luckydraw()">
            <button><div class="mouse-icon"><div class="wheel"></div></div></button>
        </form>
        
        
    </header>
    <!-- End Of Page Header -->


    <script>
        function luckydraw() {
            return true;
        }

    </script>

	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="assets/js/leadmark.js"></script>

</body>
</html>
