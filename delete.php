<?php

require "dbConnection.php"; 


    if(isset($_GET['delete_id'])){
        // get the id from the URL
        $id=$_GET['delete_id']; 
        
        //delete record corresponding to the id
        $deleteqry="delete from practical_lab_table where id=$id";

        $result=mysqli_query($connec,$deleteqry); 

        if($result){
           
        header('location:form.php');
    }
    
    else{
       die(mysqli_error($connec)); 
    }
    
    }

?>

