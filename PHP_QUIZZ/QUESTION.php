<?php include 'DATABASE.php'; ?>
<?php session_start(); ?>
<?php
	// Set Question Number
	$number = (int) $_GET['n'];
	
	/*
	*	Get total questions
	*/
		
	$query = "SELECT * FROM questions";
		
	// Get Result
		
	$results = $mysqli ->query($query) or die($mysqli ->error);
	$total = $results ->num_rows;
		
	
	/*
	*	Get Question
	*/

	$query = "SELECT * FROM questions WHERE QNumber = $number";
	
	// Get Result
	
	$result = $mysqli -> query($query) or die($mysqli->error);
	$question = $result -> fetch_assoc();
	
	/*
	*	Get Choices
	*/

	$query = "SELECT * FROM choices WHERE QNumber = $number";
	
	// Get Results
	
	$choices = $mysqli -> query($query) or die($mysqli->error);
	
	
?>
<!DOCTYPE html>
<html>
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
 			<div class="current"> QUESTION <?php echo $question['QNumber'];?> Of <?php echo $total; ?> </div>
			<p class="question">
				<?php echo $question['QUESTION']; ?>
			</p>
			<form action="PROCESS.php" method="post">
			<u1 class="choices">
			
				<?php while($row = $choices -> fetch_assoc()): ?>
					<li><input name="choice" type="radio" value="<?php echo $row['ChoiceID']; ?>"/> <?php echo $row['Choice']; ?> </li>
				<?php endwhile; ?>
			</u1>
			<input type="submit" value="submit" />
			<input type="hidden" name="number" value="<?php echo $number; ?>" />
			
		</div>
	</main>
	<footer>
	
		<div class="container">
			Copyright &copy; 2017, PHP QUIZZER
		</div>
	
	</footer>
    
 </body>
</html>             