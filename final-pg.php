<!DOCTYPE html>
<html>
	<head>
		<title>K9 Breeds Database</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
		
		<link rel="stylesheet" href="css/style.css">

	</head>
	
	<body>
		<!--nav bar-->
		<div class="topnav">
			<a href="index.html">Home</a>
			<a href="about.html">About</a>
			<a class = "active" href="quiz-pg.php">Dog Matcher</a>
			<a href="database.html">Database</a>
		</div>
	
		<?php
			//connects to database
			session_start();
	
			$user = "root";
			$pword = NULL;
			$dbase = "dogdb";
			$table = "dog_breeds";
			$table2 = "answers";
			$table3 = "dogimg";
			$mydb = new mysqli('localhost', $user, $pword, $dbase);
			if ($mydb->connect_error) {
			  die( "Failed to connect to MySQL: " . $mydb->connect_error);
			}
			
			//fetching the top 3 dog breeds using the dog id that was outputted from the back-end
			$end = "SELECT * FROM $table2";
			$goal = $mydb->query($end) or die($mydb->error);
			$match = $goal->fetch_assoc();
			
			$dog1 = $match["First_Answer"];
			$dog2 = $match["Second_Answer"];
			$dog3 = $match["Third_Answer"];

			$query = "SELECT Dog_Breed FROM $table WHERE DogID = $dog1";
			$query2 = "SELECT Dog_Breed FROM $table WHERE DogID = $dog2";
			$query3 = "SELECT Dog_Breed FROM $table WHERE DogID = $dog3";
			$result = $mydb->query($query) or die($mydb->error);
			$result2 = $mydb->query($query2) or die($mydb->error);
			$result3 = $mydb->query($query3) or die($mydb->error);
			$row = $result->fetch_assoc();
			$row2 = $result2->fetch_assoc();
			$row3 = $result3->fetch_assoc();
			
			$name = $row["Dog_Breed"];
			$name2 = $row2["Dog_Breed"];
			$name3 = $row3["Dog_Breed"];
				
			$imgq = "SELECT * FROM $table3 WHERE DogID = $dog1";
			$imgq2 = "SELECT * FROM $table3 WHERE DogID = $dog2";
			$imgq3 = "SELECT * FROM $table3 WHERE DogID = $dog3";
			$imgresult = $mydb->query($imgq) or die($mydb->error);
			$imgresult2 = $mydb->query($imgq2) or die($mydb->error);
			$imgresult3 = $mydb->query($imgq3) or die($mydb->error);
			$image_row = $imgresult->fetch_assoc();
			$image_row2 = $imgresult2->fetch_assoc();
			$image_row3 = $imgresult3->fetch_assoc();
			
			$dog_img = $image_row["Image"];
			$dog_img2 = $image_row2["Image"];
			$dog_img3 = $image_row3["Image"];
			
			$dognm = $image_row["dog_breed"];
			$dognm2 = $image_row2["dog_breed"];
			$dognm3 = $image_row3["dog_breed"];
			
			
		?>
		
		<!--prints out the top 3 dog breeds and links to their 'database' site page-->
		<!--all images are from pexel.com-->
		<center><h1>Your results are...</h1>
			<div class="result1">
				<?php 
				echo "<h2><a href =\"breeds/$dognm.html\">$name</a></h2>";
				
				print("<img id = \"best_img\" src =\"$dog_img\"  alt = \"$name\" width = \"75%\"> ");
				?>
			</div>
			<br>
			<div class="result2">
				<?php 
				echo "<h2><a href =\"breeds/$dognm2.html\">$name2</a></h2>";
				
				print("<img id = \"sec_img\" src =\"$dog_img2\"  alt = \"$name2\" width = \"75%\"> ");
				?>
			</div>
			<br>
			<div class="result2">
				<?php 
				echo "<h2><a href =\"breeds/$dognm3.html\">$name3</a></h2>";
				
				print("<img id = \"third_img\" src =\"$dog_img3\"  alt = \"$name3\" width = \"75%\"> ");
				?>
			</div>
		</center>
	</body>
</html>