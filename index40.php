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
        $password="";
        $dbname="khan_db";
        $conn=  mysqli_connect($dbservername,$dbuser,$password,$dbname);
        if($conn)
        {
           $sql="delete from mom where id=3 or id=4";
           $res=  mysqli_query($conn, $sql);
           if($res)
           {
               echo"successfully don";
           }
           else {
                 echo"something went wrong";
              }
             }
        ?>
    </body>
</html>
