<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign UP</title>


  </head>
  <body>
    <h1>sign up for more details</h1>
     <a href="login.php">Login</a>

    <form action="insert.php" method="post" enctype="multipart/form-data">

      <table border="5" align="center">

        <tr>
          <td colspan="2" align="center">
            Sign Up
          </td>
        </tr>

        <tr>
          <td>First Name </td>
          <td> <input type="text" name="fname" required /> </td>
        </tr>


        <tr>
          <td> Last Name  </td>
          <td>
             <input type="text" name="lname" required />
          </td>
        </tr>

        <tr>
          <td> User Name  </td>
          <td>
             <input type="text" name="username" required />
          </td>
        </tr>


        <tr>
          <td>Email </td>
          <td>
             <input type="email" name="email" required />
          </td>
        </tr>


        <tr>
          <td> Password  </td>
          <td>
             <input type="password" name="password" required />
          </td>
        </tr>


        <tr>
          <td>Gender </td>
          <td>
             <input type="radio" name="gender" value="male" required /> Male <br/>

             <input type="radio" name="gender" value="female" required /> female <br/>
          </td>
        </tr>

        <tr>
          <td> hooby  </td>
          <td>
             <input type="checkbox" name="hobby[]" value="read" />read<br />

             <input type="checkbox" name="hobby[]" value="travel" />read<br />
          </td>
        </tr>

        <tr>
          <td>Your photo </td>
          <td><input type="file" name="pic" /></td>
        </tr>

        <tr>

          <td colspan="2" align="center">
            <input type="submit" value="regist" name="submit" />
            <input type="reset" value="reset" name="reset" />

          </td>
        </tr>



      </table>
    </form>
  </body>
</html>
