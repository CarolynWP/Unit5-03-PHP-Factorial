<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" />

		<!-- Cherry Tree Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/site.webmanifest" />
		
		<!-- title -->
    <title>YOU WILL ALL BECOME NUMBERS!</title>
	</head>
	
	<!-- Body -->
	<body>
		<div class="margin">
			<?php echo "<h2>MWAHAAHAHAAH!!! WITH ALL THIS POWER, NO-ONE CAN STOP ME!! SOON, EVERYONE ON EARTH WILL BE A NUMBER!!</h2>" ?>

			<?php echo '<img src="./images/number_king.png" width="600px" alt="The Number King!!!">' ?>
			<br>
			<br>

			<?php echo "<h2>You must help us, numberless being! In the process of turning others into numbers, he has been harming actual numbers! Quick! Use factorials to damage him! You are our only hope!!</h2>" ?>
			<?php echo '<img src="./images/brother.png" width="300px" alt="The Number Kings brother">' ?>
			<br>
			<!-- Factorial text box -->
			<?php echo '<h2>The factorial weapon:</h2>' ?>
			<form method = "post">
				<?php echo '<h3>Damage:</h3>' ?>
				<input type="number" name="number" min="0" step="1">  
				<br>
				<br>
				<br>
				<!-- Submit button -->
				<input type = "submit" name = "submit" value="ENTER!">  
					<br>
					<br>
				
				<!-- calculation area -->
				<?php   
					if (isset($_POST["submit"])) {   
						// variables
						$number= $_POST["number"]; 
						$factorial = 1;
						$counter = 1;
						
						//do while loop for factorials
					 do {
						 $factorial = $factorial * $counter;
						 $counter++;
						} while ($counter <= $number);
						
						//output
						echo "<h1>Great job! You did $factorial damage!!</h1>";
						echo "<h2>WHAT?? NO!!! THIS CANNOT BE!! I HAVE BEEN DEFEATED! AAAAAAHHHHHHHHHH!!</h2>";
						echo "<img src='./images/number_gone.png' width='800px' alt='Number King is gone!!'>";
						echo "<h2>I am so very proud of you, numberless being! You have saved the world from my brother. A funeral will be held tomorrow at 4:00, if you would like to join us? Although he turned evil in the end, he was just in love with numbers.</h2>";
						echo "<img src='./images/brother.png' width='350px' alt='Brother'";
						
					}
					?>
						<br>
					<br>
				</form>	
		</div>
	</body>
</html>