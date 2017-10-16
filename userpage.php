<?php


session_start();

$user_id=$_SESSION["id"];

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title></title>


   </head>
   <body>

    <?php
    include "data.php";

    $select= "select * from users where user_id='$user_id'";

    $result=mysqli_query($con,$select);

    while ($row=mysqli_fetch_array($result)) {

      echo $row["username"];

      echo '<div><img src="userspic/'.$row["pic"].'"></div>';
    }




     ?>

<a href="logout.php"> logout</a>
   </body>
 </html>
