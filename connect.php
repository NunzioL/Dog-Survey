<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<!-- THIS FILE IS TO CONNECT TO THE DB -->

    <?php // this is for the server



        // make your sql connection here to connect to the DB

    $serverName = 'localhost';
    $username = 'root';
    $password = NULL;
    $dbName = 'dogdb';

    $con = mysqli_connect(

        $serverName,
        $username,
        $password,
        $dbName
    );

    if( mysqli_connect_errno() ){ // if cannot connect

        print('connection not made');
    }else{

        echo "Database connected to '$dbName' ";
    }



    ?>

</body>
</html>