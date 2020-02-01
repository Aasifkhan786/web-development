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
        $dbname="khan_db";
        $conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
        if($conn)
        {
            if(isset($_POST['submit']))
            {
                $user=$_POST['username'];
//                echo $user;
                $user=mysqli_real_escape_string($conn,$user);
//                echo $user;
                $sql="select * from mom where username='$user'";
                $res=mysqli_query($conn,$sql);
                $x=mysqli_fetch_assoc($res);
                echo $x['password'];
            }
        }
        ?>
         <div style="margin-left:300px; margin-top: 100px;">
       
       <form action="index43.php" method="POST">
            <input type="text" name="username" placeholder="username">
<!--             <input type="password" name="password" placeholder="password">-->
             <input type="submit" name="submit" value="login">
        </form></div>
    </body>
</html>
