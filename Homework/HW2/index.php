<?php
    session_start();
   
    if (isset($_GET["bet"]))
    {
        $bet = $_GET["bet"];

    }    
    
    echo "bet :" . $bet; 
    $_SESSION[$bank] = 500;
    $_SESSION["sessionBet"] = $bet;
    //$newBank = $_SESSION["newBank"];
    
    //$bank = 500;
    // $firstDie = 0;
    // $secondDie = 0;
    // $rollValue = 0;
    
?>

<!DOCTYPE html>

<html>
    
    <body> 
        <style>
            @import url("css/styles.css");
        </style>
     <div id="title">
       
              <span><h1>!! CRAPS !!</h1></span>
        <?php 
        // if (isset($_GET["again"])){  //$_SESSION[$bank] += $bet
        ?>
              <span><h2>You Bank is Now: $<?=$newBank?></h2></span>
        </div>
        
        <br><br>
        
        <form method="GET" action="firstRoll.php" >
            <input type="text" name="bet" placeholder="Place BET Here!" size="15"/>
            <br><br>
            
            <input type="submit" name="roll" value="ROLL DICE!"/>    
        </form>
        <?php
         
         {
        //      <span><h1>!! CRAPS !!</h1></span>
        //       <span><h2>You Bank: $500</h2></span>
        // </div>
         
        //  <br><br>
        
        // <form method="GET">
        //     <input type="text" name="bet" placeholder="Place BET Here!" size="15"/>
        //     <br><br>
            
        //     <input type="submit" name="roll" value="ROLL DICE!"/>    
        // </form>
         }//closing if isset($imageURLs)
         
        ?>
        
    </body>
</html>