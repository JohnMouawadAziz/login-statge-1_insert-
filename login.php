<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {

  include "data.php";

  $username=$_POST["username"];
  $pass=$_POST["password"];
  $query="select * from users where username='$username' and password='$pass'";

  $result=mysqli_query($con,$query);


if (mysqli_num_rows($result)>0) {

  while ($row=mysqli_fetch_array($result)) {
    session_start();

    $_SESSION["id"]=$row["user_id"];
    header("location:userpage.php");
  }



}
else {
  echo "wrong username or password";
}

}



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
     <h1>Log in Form</h1>


     <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

       <table border="5" align="center">

         <tr c>
           <td colspan="2" align="center">sign in </td>
         </tr>

         <tr>
              <td>user name</td>
              <td><input type="text" name="username" required>
          </tr>
           <tr>
              <td>password</td>
              <td><input type="password" name="password" required>
          </tr>

            <tr>

              <td colspan="2" align="center">
                  <input type="submit" value="regist" name="submit">
                  <input type="reset" value="reset" >
              </td>

          </tr>








       </table>





     </form>

   </body>
 </html>
