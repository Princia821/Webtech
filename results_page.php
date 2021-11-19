<?php

require "dbConnection.php";
if(isset($_POST['searchbox2'])&&isset($_POST['submit'])){
    $value=$_POST['searchbox2'];

$querry="INSERT INTO `practical_lab_table`( `Search_term`) VALUES ('$value')";
    $addToDB=mysqli_query($connec,$querry);
    if(!$addToDB){
        echo "Failed to add to database";
            }

    else{
       
        // redirect to the main page after inserting successfully
        header('location:form.php');
    }
}

?>

