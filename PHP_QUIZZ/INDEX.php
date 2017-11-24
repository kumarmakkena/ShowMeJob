<?php include 'DATABASE.php'; ?>
<?php

/*
*	Get Total Questions
*/

	$query = "SELECT * FROM questions";
	
// Get Results

	$results = $mysqli ->query($query) or die($mysqli->error);
	$total = $results ->num_rows;
	
?>
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
			<h2> TEST YOUR PHP KNOWLEDGE </h2>
			<p> This is a multiple choice quiz to test your knowledge of PHP </p>
			<u1> 
				<li><strong>Number of Questions: </strong> <?php echo $total; ?><li>
				<li><strong>Type: </strong>Multiple Choice<li>
				<li><strong>Estimated Time: </strong><?php echo $total*0.5; ?><li>
			</u1>
			<a href="QUESTION.php?n=1" class="start"> Start Quiz </a>
		</div>
	</main>
	<footer>
	
		<div class="container">
			Copyright &copy; 2017, PHP QUIZZER
		</div>
	
	</footer>
    
 </body>
</html>             