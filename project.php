    <?php 
        require 'connect.php';

        // print_r('hello');

        $select = "SELECT * FROM dogdb.dog_breeds"; // the command

        $readFromDb = mysqli_query($con, $select);
        //$dbStuff = mysqli_fetch_all($readFromDb);
        if (mysqli_num_rows($readFromDb)>0){
            while ($row = mysqli_fetch_array($readFromDb,MYSQLI_ASSOC)){
                print "*".$row["DogID"]."+".$row["Dog_Breed"]."+".$row["Shedding"]."+".$row["Active"]."+".$row["Size"]."+".$row["Intelligence"]."+".$row["Access to Space"]."+".$row["Totelrance to Kids"];
            }
        }

        // print($dbStuff);
    

        // it works but it dshows them as an array which you can use to index


        // ex. array[0] = DogId



     ?>