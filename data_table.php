<?php

include "data.php";

$query="select * from users order by user_id asc";

$result=mysqli_query($con,$query) or die("error fetching data");




echo "<table width='99%' border='1 ' cellpadding='5'>


    <tr>
      <td>Id</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>User</td>
      <td>Email</td>
      <td>Gender</td>
      <td>Hobby</td>
      <td>Actions</td>
    </tr>";
while ($row=mysqli_fetch_array($result)) {


echo "
<tr>
  <td>".$row['user_id']."</td>
  <td>".$row['fname']."</td>
  <td>".$row['lname']."</td>
  <td>".$row['username']."</td>
  <td>".$row['email']."</td>
  <td>".$row['gender']."</td>
  <td>".$row['hobby']."</td>
  <td>Action</td>
</tr>";
}

echo "</table>";


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
    <h1>Hello, world!</h1>

<!-- <table width="99%" border="1" cellpadding="5">


    <tr>
      <td>Id</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>User</td>
      <td>Email</td>
      <td>Gebder</td>
      <td>Hobby</td>
      <td>Actions</td>
    </tr>

    <tr>
      <td>id</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>User</td>
      <td>Email</td>
      <td>Gebder</td>
      <td>Hobby</td>
      <td>Actions</td>
    </tr>

</table> -->





  </body>
</html>
