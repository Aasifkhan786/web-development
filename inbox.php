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
        $dbservername="localhost";
        $dbuser="root";
        $dbpassword="";
        $dbname="aasif_db";
       $conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
       if($conn)//if condition is true for all non zero values
       {
          $sql="select * from demo_db";
          $res=mysqli_query($conn,$sql);
          print_r($res);
          if(mysqli_num_rows($res)>0)
          {
              print_r(mysqli_fetch_assoc($res));
          }
       }
 else {
       echo "something went wrong";    
       }
        ?>
    </body>
</html>
