<?php
    $db_server = "localhost";
    $db_name = "fakebook";
    $db_user = "root";
    $db_pass = "";
    $db_port = 4306;
    $conn = "";

    try{
        $conn = mysqli_connect($db_server,$db_user,
        $db_pass,$db_name, $db_port);
    }
    catch(mysqli_sql_exception){
        echo "You are not connected!<br>";
    }

    if($conn)
    {
        echo "You are connected!<br>";
    }
    else{
        die("Connection failed: " . mysqli_connect_error());
    }

    

?>