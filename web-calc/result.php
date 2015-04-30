<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
        table, th, td 
        {
            border: 1px solid black;
        }
        </style>
        <title>Interest Calculator</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>    
        <?php
            if($message != "")
            {
                echo'<font color="red">' . $message . '</font>';
            }
        ?>
        <form action="calculate.php" method="post"><br>
            <label>Total Owed:</label>
                <input type="text" name="owed"><br>
            <label>Interest:<label>
                <input type="text" name="interest">%<br>
            <label>Years:</label>
                <input type="text" name="years"><br>
                <input type="submit" value="submit"><br>
                
                <?php
                    if($message == "")
                    {
              echo'<table>
              <tr>
                <th>Total Interest Paid</th>
                <th>Months</th>
                <th>Average Payment</th>
              </tr>
              <tr>
                <td>' . (int)$totalinterest .
              '</td>
                <td>' . $months . '</td>
                <td>' . (int)$averagePayment . '</td>
              </tr>
            </table>';
                    }
              ?>
        </form>
    </body>
</html>