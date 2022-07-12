<?php
include "../control/reg_valid.php"
?>

<html>
</fieldset><h2>Registation !!</h2> <hr>
<fieldset>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <table>
      <tr>

        <td> Enter first name </td>
        <td><input type="text" id="fname" name="firstname">
          <?php
          echo $firstnameerr;
          ?></td>

      </tr>
      <tr>

        <td> Enter Last name</td>
        <td> <input type="text" id="lname" name="lastname">
          <?php
          echo $lastnameerr;
          ?></td>


      <tr>
        <td>Password </td>
        <td> <input type="text" name="phone">
          <?php
          echo $phoneerr;
          ?></td>
      </tr>
      <tr>
        <td>Email </td>
        <td> <input type="text" name="email">
          <?php
          echo $emailerr;
          ?>
        </td>
      </tr>
      <tr>
        <td>Date of Birth </td> <td> <input type="date" id="date" name="date">
          <?php
          echo $dateerr;
          ?>
        </td>
      </tr>
       <tr>
        <td>
        Gender:<br>
         <input type="radio" name="gender" value="Male">Male<br>
         <input type="radio" name="gender" value="Female">Female<br>
          <input type="radio" name="gender" value="Others">Others
        </td>

       </tr>

      <tr>
        <tr>
          <td>
          Register as:<br>
         <input type="radio" name="ptypr" value="Buyer">Buyer<br>
         <input type="radio" name="ptypr" value="Sellar">Sellar<br>
          </td>
        </tr>
        <td> <input type="submit" name="Submit" value="Submit Form"></td>
        
      </tr>

      <tr>
         <td></td>
         <td>
         <?php
                  echo $dataerr;
                  ?>

         </td>

       </tr>
       
    </table>

    <td>
    <tr>
    <a href="../view/login.php"> <h4>Login</h4>
    
    </tr>
</td>
  </form>
  <fieldset>
</body>
</html>