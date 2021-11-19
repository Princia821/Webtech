<?php

require "dbConnection.php";
// get the id from the URL
$id=$_GET['update_id']; 
$qry= "select * from practical_lab_table where id= $id";
$update=mysqli_query($connec,$qry);
$row=mysqli_fetch_assoc($update);
$search=$row['search_term'];



if(isset($_POST['searchbox1'])&&isset($_POST['submit'])){ 
   $updated=$_POST['searchbox1'];

   //query for updating
$qry="update practical_lab_table set id=$id, search_term = '$updated' where id=$id";
    $update=mysqli_query($connec,$qry);
    if(!$update){
        die(mysqli_error($connec)); 
            } 

    else{
        //echo "Updated successfully";

        header('location:form.php');// redirect to the main page after inserting successfully
    }
}

    ?>

    <form method="Post" >
        <label>Update</label>     
        <input type="text"  placeholder="type" name="searchbox1" value="<?php echo $search; ?>">

        <br> <br>

        <button type="submit" name="submit" value="submit">Submit</button>

    </form>

