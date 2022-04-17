<!DOCTYPE html>
<html>
	<head>
		<title>K9 Breeds</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
		
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/quiz.css">
		
		<script type = "text/javascript" src="javascript/quiz.js"></script>

		<style type="text/css">
			img{width:60%;}
		</style>
	</head>
	
	<body>
		<div class="topnav">
			<a href="index.html">Home</a>
			<a href="about.html">About</a>
			<a class="active" href="#quiz">Dog Matcher</a>
			<a href="database.html">Database</a>
		</div>
		
		<?php
		
		session_start();
	
		$user = "root";
		$pword = NULL;
		$dbase = "dogdb";
		$table = "quiz_data";
		$table2 = "results";
		$mydb = new mysqli('localhost', $user, $pword, $dbase);
		if ($mydb->connect_error) {
		  die( "Failed to connect to MySQL: " . $mydb->connect_error);
		}
		
		$query = "SELECT * FROM $table";
		$updates = "SELECT * FROM $table2";
		
		$result = $mydb->query($query);
		$row = $result->fetch_assoc();
		$row2 = $result->fetch_assoc();
		$row3 = $result->fetch_assoc();
		$row4 = $result->fetch_assoc();
		$row5 = $result->fetch_assoc();
		$row6 = $result->fetch_assoc();
		
		if (!isset($_SESSION['datab'])) {
			$db = array();
			$_SESSION['datab'] = $db;
		}
		$db = array();
		//print_r ($_SESSION['datab']);
		
		
		$db = $_SESSION['datab'];
		if ($db[0] = null) 
			$len = 1;
		else
			$len = sizeof($db);
		//echo $len;
		if ($len == 1){
			$id = $row["ID"];
			$question = $row["Question"];
			$ans1 = $row["Ans1"];
			$ans2 = $row["Ans2"];
			$ans3 = $row["Ans3"];
			$ans4 = $row["Ans4"];
			$ans5 = $row["Ans5"];
			$img = $row["Img"];
			$qdata = "question1";
			
			array_push($db, $id);
		}
		else if ($len == 2) {
			$id = $row2["ID"];
			$question = $row2["Question"];
			$ans1 = $row2["Ans1"];
			$ans2 = $row2["Ans2"];
			$ans3 = $row2["Ans3"];
			$ans4 = $row2["Ans4"];
			$ans5 = $row2["Ans5"];
			$img = $row2["Img"];
			$qdata = "question2";
			
			array_push($db, $id);
		}
		else if ($len == 3) {
			$id = $row3["ID"];
			$question = $row3["Question"];
			$ans1 = $row3["Ans1"];
			$ans2 = $row3["Ans2"];
			$ans3 = $row3["Ans3"];
			$ans4 = $row3["Ans4"];
			$ans5 = $row3["Ans5"];
			$img = $row3["Img"];
			$qdata = "question3";
			
			array_push($db, $id);
		}
		else if ($len == 4) {
			$id = $row4["ID"];
			$question = $row4["Question"];
			$ans1 = $row4["Ans1"];
			$ans2 = $row4["Ans2"];
			$ans3 = $row4["Ans3"];
			$ans4 = $row4["Ans4"];
			$ans5 = $row4["Ans5"];
			$img = $row4["Img"];
			$qdata = "question4";
			
			array_push($db, $id);
		}
		else if ($len == 5) {
			$id = $row5["ID"];
			$question = $row5["Question"];
			$ans1 = $row5["Ans1"];
			$ans2 = $row5["Ans2"];
			$ans3 = $row5["Ans3"];
			$ans4 = $row5["Ans4"];
			$ans5 = $row5["Ans5"];
			$img = $row5["Img"];
			$qdata = "question5";
			
			array_push($db, $id);
		}
		else if ($len == 6) {
			$id = $row6["ID"];
			$question = $row6["Question"];
			$ans1 = $row6["Ans1"];
			$ans2 = $row6["Ans2"];
			$ans3 = $row6["Ans3"];
			$ans4 = $row6["Ans4"];
			$ans5 = $row6["Ans5"];
			$img = $row6["Img"];
			$qdata = "question6";
			
			array_push($db, $id);
		}
		
		if ($len > 6) {
			echo "<script>final()</script>";
			session_destroy();
			session_unset();
		}

		//print("db: ");
		//print_r($db);
		$_SESSION['datab'] = $db;
		
		$num = $id+1;
		echo "<h3>Question $num</h3>";
		
		echo "<center>";
		
		echo "<h1>$question</h1>";
		print ("<img src=\"$img\">\n");
		
		echo "<br>";
		
		//stupidly long code to update results table
		if (isset($_POST['button1'])) {
			if ($len == 2){
				$sql = "UPDATE results SET question1='1' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 3){
				$sql = "UPDATE results SET question2='1' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 4){
				$sql = "UPDATE results SET question3='1' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 5){
				$sql = "UPDATE results SET question4='1' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 6){
				$sql = "UPDATE results SET question5='1' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else {
				$sql = "UPDATE results SET question6='1' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
		}
		
		if (isset($_POST['button2'])) {
			if ($len == 2){
				$sql = "UPDATE results SET question1='2' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 3){
				$sql = "UPDATE results SET question2='2' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 4){
				$sql = "UPDATE results SET question3='2' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 5){
				$sql = "UPDATE results SET question4='2' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 6){
				$sql = "UPDATE results SET question5='2' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else {
				$sql = "UPDATE results SET question6='2' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
		}
		
		if (isset($_POST['button3'])) {
			if ($len == 2){
				$sql = "UPDATE results SET question1='3' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 3){
				$sql = "UPDATE results SET question2='3' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				 // echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 4){
				$sql = "UPDATE results SET question3='3' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 5){
				$sql = "UPDATE results SET question4='3' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 6){
				$sql = "UPDATE results SET question5='3' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				 // echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else {
				$sql = "UPDATE results SET question6='3' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
		}
		
		if (isset($_POST['button4'])) {
			if ($len == 2){
				$sql = "UPDATE results SET question1='4' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				 // echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 3){
				$sql = "UPDATE results SET question2='4' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 4){
				$sql = "UPDATE results SET question3='4' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 5){
				$sql = "UPDATE results SET question4='4' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 6){
				$sql = "UPDATE results SET question5='4' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else {
				$sql = "UPDATE results SET question6='4' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
		}
		
		if (isset($_POST['button5'])) {
			if ($len == 2){
				$sql = "UPDATE results SET question1='5' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 3){
				$sql = "UPDATE results SET question2='5' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 4){
				$sql = "UPDATE results SET question3='5' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				 // echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 5){
				$sql = "UPDATE results SET question4='5' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else if ($len == 6){
				$sql = "UPDATE results SET question5='5' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
			else {
				$sql = "UPDATE results SET question6='5' WHERE id=0";

				if (mysqli_query($mydb, $sql)) {
				  //echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . mysqli_error($mydb);
				}
			}
		}
		echo "<br><br>";
		$mydb->close();
		?>

		<form method = "post">
		<input id = "ch1" class = "chbutton" type = "submit" value = <?php echo $ans1 ?> name = "button1">
		<input id = "ch2" class = "chbutton" type = "submit" value = <?php echo $ans2 ?> name = "button2">
		<input id = "ch3" class = "chbutton" type = "submit" value = <?php echo $ans3 ?> name = "button3">
		<input id = "ch4" class = "chbutton" type = "submit" value = <?php echo $ans4 ?> name = "button4">
		<input id = "ch5" class = "chbutton" type = "submit" value = <?php echo $ans5 ?> name = "button5">
		</form>
		<br><br>
		<!--<input id = "nextBtn" class = "nxtbttn" type = "button" value = "Next" onclick = "window.reload()">-->

		</center>
	</body>
</html>