
<?php

    $expenses =[
        "food" => 500,
        "bazar" => 800,
        "gariVara" => 100,
    ];

    echo "<pre>";
    print_r($expenses);
    echo "</pre>";


    //USE ARRAY FUNCTION

    array_push($expenses,200);

    echo "<pre>";
    print_r($expenses);
    echo "</pre>";


    array_pop($expenses);

    echo "<pre>";
    print_r($expenses);
    echo "</pre>";


    $addExpenses = [
        "madicine" => 500,
        "shopping" => 100,

    ];

    $marge = array_merge($expenses, $addExpenses);
    
    echo "<pre>";
    print_r($marge);
    echo "</pre>";

    $sum = array_sum($marge);
    echo "Total: ".$sum;


    // Convert a string of expenses to array (explode) and back to string (implode).

    $string = "200,300,400,500";
    $string_arr = explode(",",$string);
    echo "<pre>";
    print_r($string_arr);
    echo "</pre>";

    $new_string  = implode("-",$string_arr);
    echo "implode value: {$new_string}<br><br>";


    // Use string functions

    $another_string = "I Love Programming";
    echo strtoupper($another_string)."<br>";
    echo strlen($another_string)."<br>";
    echo substr($another_string,0,7)."<br>";
    echo str_replace("Programming","Laravel",$another_string)."<br>";


?>