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
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css"
    />
    <title>A propos</title>
    <link rel="stylesheet" href="assets/css/about.css" />
</head>
<body>
    <body>
        <section>
            <div class="container purple topBotomBordersIn">
                <div id="top-left-robot" class="robot">
				<span><img class="animate__animated animate__fadeInDown" style="width: 60px;" src="assets/img/brain.png" style="animation: fadeInUp;"></center></span>
                </div>
                <a href="index.php">Home</a>
            <?php if(isset($_SESSION['user']) && isValidSession($_SESSION['user'])){echo '<a href="teachai.php"></a>'; }else{echo '<a href="register.php">Sign Up</a> <a href="login.php">Sign In</a>'; } ?>
			<a href="about.php" >About</a>
			<a href="contact.php">Contact</a>
            <a href="logout.php">Logout</a>

            </div>
            <div class="login-box">
                <h1>A propos</h1><br>
                <p>
                    Projet effectué en 1 semaine à la Coding Factory dans le cadre d'un projet d'apprentissage de l'architecture Linux
                </p>
            </div>
            <div class="air air1"></div>
            <div class="air air2"></div>
            <div class="air air3"></div>
            <div class="air air4"></div>
        </section>
</body>
</html>