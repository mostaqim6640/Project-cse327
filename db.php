<?php

    $con=mysqli_connect('localhost','root','','bbdms');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>
