<?php 
require_once('core/funcs.php');
if (isset($_SESSION['user'])) {
    if (isValidSession($_SESSION['user'])) {
        
    } else {
        header('Location: login.php'); 
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - jQuery ChatBot</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css'><link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

</head>
<body>
<!-- partial:index.partial.html -->

<head>
	<title>jQuery ChatBot</title>
</head>

	<section>
		<div class="container purple topBotomBordersIn">
			<div id="top-left-robot" class="robot">
				<span><img class="animate__animated animate__fadeInDown" style="width: 60px;" src="assets/img/brain.png" style="animation: fadeInUp;"></center></span>
			  </div>
			<a href="index.php">Home</a>
            <?php if(isset($_SESSION['user']) && isValidSession($_SESSION['user'])){echo '<a href="teachai.php">NutrIA</a>'; }else{echo '<a href="register.php">Sign Up</a> <a href="login.php">Sign In</a>'; } ?>
			<a href="about.php" >About</a>
			<a href="contact.php">Contact</a>
			
		  </div>
		  <body>

		  <section id="sectionExp">
			<center><img class="animate__animated animate__fadeInDown" style="width: 120px;" src="assets/img/brain.png" style="animation: fadeInUp;"></center>
		  <div class="header animate__animated animate__fadeInDown">
            <h1>Bienvenue sur NutritionistAI</h1>
            <p>Le Futur de la Nutrition</p>
        </div>

		<div class="chatbot-intro animate__animated animate__fadeInUp">
            <p>Rencontrez NutritionistAI - Votre partenaire de nutrition intelligent pour un avenir sain.</p>
            <p>Posez toutes vos questions à NutritionistAI - Votre guide intelligent dans la Nutrition.</p>

	<div class="project-info">
		<p>Un projet innovant développé par des étudiants de la Coding Factory.</p>

		
        </div>

		<a href="register.php"><button class="btn">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 265 63.6">
                <rect width="265" height="63.6"/>
                <line class="cls-1" y1="2.5" x2="214" y2="2.5"/>
            </svg>
            <a href="">Demander des Conseils</a>
        </button></a>
        </div>

        

    </section>

		<div class='air air1'></div>
		<div class='air air2'></div>
		<div class='air air3'></div>
		<div class='air air4'></div>

		
	  </section>


<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="assets/js/script.js"></script>

</body>
</html>