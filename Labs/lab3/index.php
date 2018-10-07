<?php
  include './inc/function_Antonio01.php';
  include './inc/function_Maryann.php';
  include './inc/function_Brandon.php';
  include './inc/function_Brett.php';
  include './inc/function_John.php';
?>

<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"/>
      <link rel="stylesheet" type="text/css" href="./css/styles.css"/>
      <title>FF1 SilverJack</title>
    </head>
    <body>
      <header><h1>FF1 SilverJack</h1></header>
        <?php
          //global $playerNames;
          $moreThanOneWinner=false;
          $deck = new Deck();
          $players = array("black_mage", "fighter", "ninja", "white_mage");
          shuffle($players);
          $totals = array();
          
          play();
        ?>
        
        <div id="footer">
            <footer>
                <hr>
                CST 336 Internet Programming. 2018&copy; John Economides <br />
                
                
                
                
            </footer>
        </div>
        
        <div id ="image">
            <img src="../../Img/csumb01.png" alt="CSUMB Logo" title="Picture of the CSUMB logo"/>
        </div>
    </body>
</html>