<?php
require_once('db.php');
session_start();
    if(isset($_POST['Login']))
    {
            $query="select * from signup where mail='".$_POST['email']."' and pass='".$_POST['pass']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['email'];
                //header("location:../successful.php");
                header("location:profile.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
    }
    else
    {
        echo 'Not Working';
    }

?>
