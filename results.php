<?php 
    //
    require 'server-side/api-data.php';
    $test = $results->data->results;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Candid Search</title>
        <link rel="stylesheet" href="css/main.css">

    </head>

    <body>
    <a href="/search"> New Search </a>
        
        <?php
            echo "<h2> Here are the results we have found  </h2>";
            
            //Grab the index array from URL param to use to target direct search results
            $array_data = $_GET['array'];
            $que = explode(",",$array_data);

            for($i = 0; $i < count($que); $i++){
                $name = $test->rows[$que[$i]]->name;
                $url =  $test->rows[$que[$i]]->url;
                $amount =  $test->rows[$que[$i]]->amount;

                if(!empty($name)){
                    echo "<div class='candid-results'><a href=".$url.">". $name ."</a> <span class='amount'>$". number_format($amount)." </span></div>";
                }                
            }

        ?>

        </body>
</html>