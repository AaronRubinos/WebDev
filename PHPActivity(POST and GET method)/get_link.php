<html>
    <head>  
        <title>PHP GET from link</title>
    </head>

    <body>
        <?php
            if ($_GET)   {
                echo "Items:" .$_GET['item'] .'<br>';
                echo "Quantity:" .$_GET['quantity'];
           }

            else {
            
            echo "<a href='get_link.php?item=Paper&quantity=100'>submit<a/>";

           }

        ?>
    </body>

</html>