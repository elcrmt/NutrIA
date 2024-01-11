
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
    <script src="https://kit.fontawesome.com/fd7b39a087.js" crossorigin="anonymous"></script>

    <title>A propos</title>
    <link rel="stylesheet" href="assets/css/contact.css" />
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
            <div class="contact-box">
            <section>
    <!-- Votre contenu existant -->

    <!-- Début des présentations -->
    <div class="presentation-container">
        <div class="presentation">
            <h2>Julien Das Dores</h2>
            <p>Étudiant Coding Factory Paris (L1)</p>
          
            <span style="float: left;margin-top: 20%;">
            <i class="fa-solid fa-envelope-circle-check"></i> jdd78800@gmail.com
            </span>
    <br>
            <span style="float: left;margin-top: 10%;">
            <i class="fa-brands fa-github"></i> <a href="https://github.com/JulienDDD">JulienDDD</a>
            </span>
        </div>

        <div class="presentation">
            <h2>Eliott Cormillot</h2>
            <p>Étudiant Coding Factory Paris (L1)</p>

            <span style="float: left;margin-top: 20%;">
            <i class="fa-solid fa-envelope-circle-check"></i>  adresse_email@gmail.com
            </span>
    <br>
            <span style="float: left;margin-top: 10%;">
            <i class="fa-brands fa-github"></i> <a href="https://github.com/JulienDDD">Github</a>
            </span>

        </div>

        <div class="presentation">
            <h2>Sébastien Hubert</h2>
            <p>Étudiant Coding Factory Paris (L1)</p>
            
            <span style="float: left;margin-top: 20%;">
            <i class="fa-solid fa-envelope-circle-check"></i>  adresse_email@gmail.com
            </span>
    <br>
            <span style="float: left;margin-top: 10%;">
            <i class="fa-brands fa-github"></i> <a href="https://github.com/JulienDDD">Github</a>
            </span>
        </div>
    </div>
    <!-- Fin des présentations -->

    <!-- Votre contenu existant -->
</section>
            </div>
            <div class="air air1"></div>
            <div class="air air2"></div>
            <div class="air air3"></div>
            <div class="air air4"></div>
            
        </section>
</body>
</html>