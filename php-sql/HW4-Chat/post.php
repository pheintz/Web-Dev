<?php

$nickname = $_POST['nickname'];
$message = $_POST['message'];

include ('connect.php');
$nickname = mysql_real_escape_string($nickname);
$message = mysql_real_escape_string($message);

if (strlen($nickname) > 16 || strlen($nickname) < 3)
{
    die('Sorry, your nickname has to be between 3 and 16 
   characters.');
}

if (strlen($message) > 512 || strlen($message) < 0)
{
    die('Sorry, your message has to be between 16 and 512 
    characters.');
}

if (!mysql_query(
 "insert into chistory (nickname, message) VALUES 
('$nickname', '$message')"))
{
    die('Sorry, a database error occurred. Your message was not 
    saved.');
}

include ('index.php');