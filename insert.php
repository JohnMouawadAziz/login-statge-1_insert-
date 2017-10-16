<?php

if (isset($_POST["submit"])) {

  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $username=$_POST["username"];
  $email=$_POST["email"];
  $pass=$_POST["password"];
  $gender=$_POST["gender"];
  $hobby=$_POST["hobby"];
  $picname=$_FILES["pic"]["name"];
  $pictmpname=$_FILES["pic"]["tmp_name"];

  include 'data.php';

  move_uploaded_file($pictmpname,"userspic/".$picname);

  $hobbys=implode("-",$hobby);

  $query="insert into users(fname,lname,username,email,password,gender,hobby,pic) "
 . "values('$fname','$lname','$username','$email','$pass','$gender','$hobbys','$picname')";

  $result=mysqli_query($con,$query);

  if ($result==TRUE) {

  echo 'inserted successfully';
  header("location:signup.php");

}else {
  echo "there is error";
}

}else {
  header("location:signup.php");
}







 ?>
