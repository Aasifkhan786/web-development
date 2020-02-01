 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $password="password";
       $password=  password_hash($password,PASSWORD_BCRYPT);
//       echo $password;
//       echo $strlen($password);
       if(password_verify('password',$password))
       {
           echo "<br>";
           echo "your password is correct";
       }
        ?>
    </body>
</html>
