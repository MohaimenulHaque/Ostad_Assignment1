
<?php

    define("APP_NAME","Expense Calculation");
    define("AUTHOR","Mohaimenul Haque");

    echo "App Name: ". APP_NAME ."<br>";
    print("Author: ".AUTHOR."<br>");
    printf("Welcome to %s by %s<br><br>", APP_NAME, AUTHOR);

    
    $food = 500;
    $transport = 200;
    $others = 100;

    $total = $food+$transport+$others;
    $average = round($total / 3);

    echo "Food Expense: {$food} Tk<br>";
    echo "Transport Expense: {$transport} Tk<br>";
    echo "Others Expense: {$others} Tk<br>";
    echo "Total Expense: {$total} Tk<br>";
    echo "Average Expense: {$average} Tk<br><br>";


    // USE IF ELSE
    if($total>1000){
        echo "Budget Exceeded <br>";
    }else{
        echo "Within Budget <br>";
    }

    // USE TERNARY
    $message = $total>1000? "Too High":"Manageable";
    echo "Ternary Message : {$message} <br>";
    



    //USE SWITCH CASE

    switch($total){
        case($total < 500):
            echo "Switch case Message: Low <br>";
        break;

        case($total >= 500 && $total<=1000):
            echo "Switch case Message: Manageable <br>";
        break;

        default:
            echo "Switch case Message: High <br>";
        break;
    }



    //USE FUNCTION

    function totalExpense($a,$b,$c){
        return $a+$b+$c;
    }
    
    function checkBudget($checkBudget){
        
        if($checkBudget > 1000){
            echo "Function Message : Budget Exceeded <br>";
        }else{
            echo "Function Message : Within Budget <br>";
        }
    }

    $checkFunction = totalExpense($food,$transport,$others);

    echo checkBudget($checkFunction) . "<br><br>";




?>