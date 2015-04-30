<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>HW3 PHP PW Checker</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
        if($message === '')
        {
            echo '<font color="green"> Password OK </font>';
        }
        else
        {
            echo'<font color="red">' . $message . '</font>';
        }
        ?>
        <form action="check_password.php" method="post"><br>
            <label>User Name:</label>
                <input type="text" name="uName" value="<?php echo $uName?>"><br>
            <label>Password:<label>
                <input type="password" name="pWord" 
                       value="<?php echo $password?>"<br>
                <input type="submit" value="submit"><br>
        </form>
    </body>