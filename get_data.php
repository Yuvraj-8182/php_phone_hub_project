<?php
function getData()
{
   //connectiom database file
   require('database/dbconnect.php');
     
   //products showing database table 
  
   $query = "SELECT * FROM products";

   $run = mysqli_query($conn, $query);

   if(mysqli_num_rows($run) > 0)
   {
       return $run;
   }
}

function cat_getData()
{
         //connectiom database file
         require('database/dbconnect.php');
    
         //products showing database table 
        
         $query = "SELECT * FROM categries";
    
         $run = mysqli_query($conn, $query);
    
         if(mysqli_num_rows($run) > 0)
         {
             return $run;
         }
}

?>