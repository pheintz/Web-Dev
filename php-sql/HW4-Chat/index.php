<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    if(isset($nickname) == false)
    {
        $nickname = '';
    }
?>
<html>

<head>

 <title>HW4 Chat Window</title>

</head>

<body>

    <form method="post" action="post.php">

        <label for="nickname" maxlength="16">Nickname</label>

    <br />

        <input type="text" name="nickname" id="nickname" 
               value="<?php 
               echo $nickname; 
               ?>"
        />
        

    <br />
        
        <label for="cHistory"></label>

    <br />
      <?php
            include ('connect.php');
            $query = mysql_query('SELECT * FROM chistory');
            ?>
        <textarea readonly rows="10" cols="50" id="cHistory"><?php
                while ($entry = mysql_fetch_object($query))
                {
                    printf("%s:%s\n",
                    htmlentities($entry->nickname),
                    htmlentities($entry->message));
                }
            ?>
        </textarea>
        <br />
        <label for="message">Message</label>

    <br />

        <textarea name="message" id="message" rows="4" cols="50"></textarea>

    <br />

        <input type="submit" value="Post Message" />

    </form>

    


</body>

</html>

