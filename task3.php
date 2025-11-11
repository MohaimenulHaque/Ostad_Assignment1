

<?php

    session_start();

    if (isset($_POST['save'])) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['budget'] = $_POST['budget'];
    }


    if (isset($_POST['delete'])) {
        session_unset();
        session_destroy();
    }

 

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task 3</title>

        <style>
            body{
                /* width: 350px; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                
            }
            form{
                display: flex;
                flex-direction: column;
                gap: 10px;
                height: auto;
                width: 300px;
                border: 1px solid #ccc;
                border-radius: 10px;
                padding: 10px;
                
            }
            input,button{
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 10px;
            }
            button:hover{
                background: #ccc;
                cursor: pointer;
            }
        </style>

    </head>
    <body>

        <h2>Session & Exception Handling</h2>

        <form action="" method="POST">

            <input type="text" name="name" placeholder="Enter Name" >
            <input type="number" name="budget" placeholder="Enter Budget" >
            <button type="submit" name="save">Save</button>
            <button type="submit" name="delete">Delete Session</button>

        </form>

        <hr>

        <?php
        if (isset($_SESSION['name']) && isset($_SESSION['budget'])) {
            echo "<h3>Welcome, {$_SESSION['name']}! Your budget is {$_SESSION['budget']}.</h3>";
        }
        ?>


    </body>
</html>




<?php


   // Recursive Function
    function sum($arr) {
        if (empty($arr)) return 0;
        return array_shift($arr) + sum($arr);
    }



    echo "<h3>Recursive Sum</h3>";

    $numbers = [5, 10, 15, 20];

    echo "<pre>";
    print_r($numbers);
    echo "</pre><br>";

    echo "Sum: " . sum($numbers);


    

    // Callback function to apply discount
    function discount($amount, $callback) {
        return $callback($amount);
    }

    $discountFunction = function($amount) {
        return $amount * 0.90;
    };


    echo "<h3>Callback Discount Function</h3>";
    $price = 1000;
    $discountedPrice = discount($price, $discountFunction);
    echo "Original Price: $price<br>";
    echo "After Discount: $discountedPrice<br>";






?>