<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>delete from database</title>

    <style>
        body{
            background-color:#a2cc78 ;

        }
        input{
            border-radius: 05px;
            box-shadow: 1px 1px 2px 1px #d964d3;

        }
        a{
            
            background-color: #d964d3;
            color: white;
            padding: 2px 4px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
</style>

</head>
<body>
<h2>SearchBox 1</h2>
<form method="post">
<label> Search from database </label>
        <input type="text" name="searchbox1">
        <input type="submit" name="send">
    </form>

    <h2>SearchBox 2</h2>
    <form action="results_page.php" method="post">
        <label> Insert into database </label>
    <input type="text" name="searchbox2">
    <input type="submit" name="submit">
    </form>

<?php
        require "dbConnection.php"; 
        echo "<br>"."Here is the result from your search: ";
        
            $query="select * from practical_lab_table";
            $run_query=mysqli_query($connec,$query);
            if($run_query){
                while($row=mysqli_fetch_array($run_query)){
                $id=$row['id'];
                $search=$row['search_term'];
                echo "<br>";
                echo "<tr>";
                    echo "<td>".$row['search_term']."<td>";
                    echo "<td>"."                   "."<td>";   

                    echo "<td>" ."<a href='edit_form.php?update_id= $id ' > "."Edit"."</a>"."</td>";
                    echo "<td>"."                   "."<td>";                  

            
                    echo "<td>" ."<a href='delete.php?delete_id= $id ' > "."Delete"."</a>"."</td>";
                    echo "<br>";
                echo "</tr>";

                


        }    

            }
           
?>

</body>
</html>
