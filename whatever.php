<?php
require "connect.php";
$select = "SELECT * FROM dogdb.results"; // the command

        $readFromDb = mysqli_query($con, $select);
        //$dbStuff = mysqli_fetch_all($readFromDb);
        if (mysqli_num_rows($readFromDb)>0){
            while ($row = mysqli_fetch_array($readFromDb,MYSQLI_ASSOC)){
                print "*".$row["question1"]."+".$row["question2"]."+".$row["question3"]."+".$row["question4"]."+".$row["question5"]."+".$row["question6"];
            }
        }
?>