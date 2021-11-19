<?php
require "dbCredentials.php";

//connecting to the database
    $connec = new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);

    if ($connec->connect_error){
        echo("there is an error, can not connect to database");

    }
    
    ?>