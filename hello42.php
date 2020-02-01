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
                $sql="select password from mom where username='$user'";
                $res=mysqli_query($conn,$sql);
                if(mysqli_num_rows($res))
                {
                    $x=mysqli_fetch_assoc($res);
//                    echo $x['password'];
                    if($x['password']===$password)
                    {
                        echo"you have sucessfully loggin";
                    }
                }
 else {
     header("Location: index42_login.php");
 }
            }
        }
        
        ?>
    </body>
</html>
