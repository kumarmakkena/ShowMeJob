<?php include 'DATABASE.php'; ?>
<?php session_start(); ?>
<?php 
	
	// Check to see if score is set_error_handler
	
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	
	if($_POST){
		
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;
		
		/*
		*	Get total questions
		*/
		
		$query = "SELECT * FROM questions";
		
		// Get Result
		
		$results = $mysqli ->query($query) or die($mysqli ->error);
		$total = $results ->num_rows;
		
		/*
		*	Get Correct Choice
		*/
		
		$query = "SELECT * FROM choices
		
						WHERE QNumber = $number AND IsCorrect = 1 ";
						
		// Get Result
		
		$result = $mysqli -> query($query) or die($mysqli ->error);
		
		// Get Row
		
		$row = $result -> fetch_assoc();
		
		// Set correct Choice
		
		$correct_choice = $row['ChoiceID'];
	
		// Compare
		
		if($correct_choice == $selected_choice) {
		
		// Answer is Correct
		
		$_SESSION['score']++;
		
		}
		
		//check if last question
		if($number == $total){
			
				header("Location: FINAL.php");
				exit();
		} else{
			
			header("Location: QUESTION.php?n=".$next);
			
		}
		
	}

	
?>