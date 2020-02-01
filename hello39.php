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
                    $password=$_POST['password'];
                    $sql="insert into mom(username,password) value('$user','$password')";
                    $res= mysqli_query($conn,$sql);
                    if($res)
                    {
                        echo"sucessfully data insrted";
                        
                }
                     else {
                             echo"something went wrong";
                                     }
                }
                }
        
                    ?>
                 </body>
            </html>
