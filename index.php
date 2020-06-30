<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Candid Search</title>
        <link rel="stylesheet" href="css/main.css">

    </head>

    <body>
        <h2>Candid Search </h2>
        <?php
            echo "<form action='./results.php?search=".$_POST['array']. "method='POST'>";
        ?>
            <input class="search-index" type="hidden" name="array" value="" />
            <input type="text" class="search-field" name="search" /> 
            <input type="submit" name="submit" value="Search">
            
        </form>
        <div class="number-count"></div>
        <div class="search-results">
        
        </div>
        

    </body>

    <script type="text/javascript" src="js/main.js"> </script>

</html>