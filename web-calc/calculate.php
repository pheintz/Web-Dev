<?php
    $message = "";
    $owed = $_POST['owed'];
    $interest = $_POST['interest'];
    $years = $_POST['years'];
    $continue = true;
    
    if(is_numeric($owed) == false)
    {
        $message = 'Enter a valid value for owed';
        $continue = false;
    }
    if(is_numeric($interest) == false)
    {
        $message = 'Enter a valid value for interest';
        $continue = false;
    }
    if(false == is_numeric($years))
    {
        $message = 'Enter a valid value for years';
        $continue = false;
    }

    if($continue == true)
    {
        $months = $years * 12;
        $payment = $owed / $months;

        $currentOwed = $owed;

        //The monthly interest rate is 1/12 times the
        //interest rate entered by the user.

        $monthlyrate = $interest / 12;
        $totalinterest = 0;

        while($currentOwed > 0)
        {
            $totalinterest += ($monthlyrate * $currentOwed / 100);
            $currentOwed -= $payment;
        }

        $averagePayment = $owed + $totalinterest / $months;
    }
    
    include('result.php');