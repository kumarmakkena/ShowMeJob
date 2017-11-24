<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> PHP QUIZZER </title>
	<link rel="stylesheet" href="CSS/STYLE.css" type="text/css"/>
  </head>
  <body>
	<header>
		<div class="container">
			<h1> PHP QUIZZER </h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2> You have Done! </h2>
				<p> Congrats! You have Completed the test </p>
				<p> Final Score: <?php echo $_SESSION['score']; ?> </p>
				<a href="QUESTION.php?n=1" class="start"> Take Again </a>
		</div>
	</main>
	<footer>
	
		<div class="container">
			Copyright &copy; 2017, PHP QUIZZER
		</div>
	
	</footer>
    
 </body>
</html>             