<!DOCTYPE html>

<?php
    include 'inc/functions.php';
?>

<html>
    <head>
        <title> 777 Slot Machine </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <!--<img src="img/cherry.png" alt="cherry" title="Cherry" width="70" /> -->
    <div id="main" >  
        <?php
            play();  
        ?>
        
        <form>
            <input type="submit" value="Spin!"/>
        </form>
        
    </div>    
    </body>
</html>