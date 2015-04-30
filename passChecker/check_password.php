<?php
    //get password and username
    $message = '';
    $uName = $_POST['uName'];
    $password = $_POST['pWord'];
    $length = strlen($password);
    $commonPasswords = array('Password', 'Qwerty', '12345678', 'Asdfqwer', 
        'asdf1234');
    $i = 0;
    
    //check password
    if(empty($password))
    {
        $message = 'Password field empty';
    }
    else if(strlen($password) < 8)
    {
        $message = 'Password must be 8 or more characters';
    }
    else if(ctype_alpha($password))
    {
        $message = 'Password must contain 1 number';
    }
    else if($message === '')
    {
        $flag = 0;
        
        for($i = 0; $i < $length; ++$i)
        {
            if(ctype_upper(substr($password, $i, 1)))
            {
                $flag = 1;
            }
        }
        if($flag === 0)
        {
            $message = 'Password must contain at least one uppercase letter';
        }
    }
    else if($message === '')
    {
        for($i = 0; $i < 4; ++$i)
        {
            if($password === $commonPasswords[$i])
            {
                $message = 'Please choose an uncommon password';
            }
        }
    }
    include ('index.php');