<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>

 <title>My Fantastic Guestbook</title>

</head>

<body>

    <form method="post" action="post.php">

        <label for="nickname" maxlength="16">Nickname</label>

        <br />

        <input type="text" name="nickname" id="nickname" />

        <br />

        <label for="message">Message</label>

        <br />

        <textarea name="message" id="message"></textarea>

        <br />

        <input type="submit" value="Post Message" />

    </form>
    
    <?php
        include ('connect.php');
        $query = mysql_query('SELECT * FROM guestbook');
        
        while ($entry = mysql_fetch_object($query))
        {
            printf("<p> %s <br />- <em> %s </em></p>",
            htmlentities($entry->message),
            htmlentities($entry->nickname));
        }
    ?>

</body>

</html>
