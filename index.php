<?php 
    include_once 'control.php';
?>

<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Udemy Price Teller</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="post">
            <p>Please provide up to 10 Udemy links separated by commas</p>
            <textarea name="urls" rows="10" cols="50"></textarea><br>
            <input type="hidden" name="event" value="send">
            <button>Send</button>
            <p><?php print_r($message)?></p>
        </form>
    </body>
</html> 
