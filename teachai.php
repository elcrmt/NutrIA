
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
  <title>NutrIA - Ask a question</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css'><link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width"/>
</head>
<body>
<!-- partial:index.partial.html -->
<html>

<head>
	<title>jQuery ChatBot</title>
</head>

<body>
	<section>
		<div class="container purple topBotomBordersIn">
			<div id="top-left-robot" class="robot">
			<span><img class="animate__animated animate__fadeInDown" style="width: 60px;" src="assets/img/brain.png" style="animation: fadeInUp;"></center></span>
			  </div>
			<a href="index.php">Home</a>
            <a href="teachai.php">NutrIA</a>
			<a href="about.php" >About</a>
			<a href="contact.php">Contact</a>
			<a href="logout.php">Logout</a>
		  </div>
		  
	<div id="phone-wrapper">
		<div id="app">
			<div id="landing" class="bg-dark text-light" style="">
			<center><img class="animate__animated animate__fadeInDown" style="width: 120px;" src="assets/img/brain.png" style="animation: fadeInUp;"></center>
				<div>
					<h1 class="mt-3">NutrIA</h1>
				</div>
				<form id="form-start">
                    <p>Please specify your area of research</p>
					<input type="text" name="username" id="username" value="" placeholder="Ex: Mathematics" required>
                    <input type="hidden" name="userid" id="userid" value="<?php echo $_SESSION['user']['id']; ?>" placeholder="" required>

					<button class="buttonn" type="submit" id="start-chat">Start chat</button>
				</form>
			</div>
			<div id="header" class="bg-dark">
				<div><button id="back-button" class="text-light btn-transparent btn-icon fas fa-arrow-left"></button></div>
				<div class="text-light align-center">
					<h2>NutrIA</h2>
				</div>
				<div>
					<button id="nav-icon" class="text-light btn-transparent btn-icon fas fa-bars"></button>
					<nav id="nav-container" style="display: none;">
						<ul class="nav">
							<li id="search" class="nav-link"><span class="fas fa-search"></span>Search</li>
							<li id="clear-history" class="nav-link"><span class="fas fa-trash-alt"></span>Clear history</li>
							<li id="theme" class="nav-link"><span class="fas fa-cogs"></span>Settings</li>
							<hr>
							<li id="sign-out" class="nav-link"><span class="fas fa-sign-out-alt"></span>Sign out</li>
						</ul>
					</nav>
				</div>
			</div>
			
			<div id="message-board">


			</div>
			<div id="form" class="bg-light">
				<div id="emoijis" style="display: none;">
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin-beam"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin-wink"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin-tongue"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin-tongue-wink"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-kiss-wink-heart"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin-hearts"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-surprise"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-angry"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-tired"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-sad-tear"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-grin-squint-tears"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-sad-cry"></span></button>
					<button class="smiley btn-transparent btn-icon"><span class="far fa-dizzy"></span></button>
				</div>
				<div><button id="emoi" class="btn-transparent btn-icon far fa-grin"></button></div>
				<div id="message" placeholder="Type your message here" rows="1" contenteditable></div>
				<div><button id="send" type="" class="btn-transparent btn-icon fas fa-paper-plane"></button></div>
			</div>
		</div>
	</div>
		<div class='air air1'></div>
		<div class='air air2'></div>
		<div class='air air3'></div>
		<div class='air air4'></div>

		<div class="wrapper">
  <a class="cta" href="#">
    <span>NEXT</span>
    
  </a>
</div>
	  </section>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="assets/js/script.js"></script>
    <script src="assets/js/controller.js"></script>
    <script>


    </script>

</body>
</html>
