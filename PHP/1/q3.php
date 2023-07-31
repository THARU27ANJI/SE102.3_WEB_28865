<?php

    $unit =100; 
    
    $total = 0;

    if ($unit <= 50) 
    {
        $total = $unit * 3.50;
    } 
    elseif ($unit <= 100) 
    {
        $total = 50 * 3.50 + ($unit - 50) * 4.00;
    } 
    elseif ($unit <= 150) 
    {
        $total = 50 * 3.50 + 50 * 4.00 + ($unit - 100) * 5.20;
    } 
    else 
    {
        $total = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($unit - 150) * 6.50;
    }


    echo "Total is $total";
?>