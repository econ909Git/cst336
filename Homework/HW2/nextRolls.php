<?php
    session_start();
    $_SESSION[$bank] = 500;
    
    //$bank = 500;
    $firstDie = 0;
    $secondDie = 0;
    // $rollValue = 0;
    
    $match = $_SESSION["matchRoll"];

    


    function rolls($match){
        $dice = array(0,1,2,3,4,5);
        shuffle($dice);
      
        echo "<br><br>";
        echo "<h2>You bet: $" . $bet . "</h2>";
        echo "<h3> Roll to Match: " . $matchRoll;
        
        echo "<div id='roll'>";
           
        for($i=1; $i<=2; $i++){
        
            switch($random){
                    case 0: $symbol = "1";
                    
                        if($i==1){
                            $firstDie = 1;
                        }
                        else
                            $secondDie = 1;
                            
                        break;
                        
                    case 1: $symbol = "2";
                    
                        if($i==1){
                            $firstDie = 2;
                        }
                        else
                            $secondDie = 2;
                            
                        break;
                        
                    case 2: $symbol = "3";
                    
                        if($i==1){
                            $firstDie = 3;
                        }
                        else
                            $secondDie = 3;
                                   
                        break;
                                   
                    case 3: $symbol = "4";
                    
                        if($i==1){
                            $firstDie = 4;
                        }
                        else
                            $secondDie = 4;
                            
                        break;
                        
                    case 4: $symbol = "5";
                    
                        if($i==1){
                            $firstDie = 5;
                        }
                        else
                            $secondDie = 5;
                            
                        break;
                        
                    case 5: $symbol = "6";
                    
                        if($i==1){
                            $firstDie = 6;
                        }
                        else
                            $secondDie = 6;
                            
                        break;
                        
                }
            
            echo "<br><br><br>";
             
            echo "<img src='img/dice/$symbol.png' alt='player' title='".ucfirst($symbol)."'  style= 'padding-right:20px;' />";
            
        } 
        //echo "<h3> First Die: " . $firstDie . "      " . "Second Die: " . $secondDie . "</h2>";
        $rollValue = $firstDie + $secondDie;
        
        if($rollValue != $matchRoll){
            
            echo "<form method='GET'>";
            echo "<option value='$matchRoll'>$matchRoll</option>";
            echo "<input type='submit' name='submit' value='Next Roll'/>";
            echo "</form>";
        }
        else if($rollValue == 7 || $rollValue == 11){
             echo"<h3> You rolled a " . $rollValue . " before rolling a" . $matchRoll . "again. Sorry, You Lose :( </h3>";
             
             echo "<form method='GET' action ='index.php'>";
           echo "<input type='submit' name='again' value='Play Again'/>";
           echo "</form>";
        }
        else{
            echo "<h2> You Rolled A: " . $matchRoll . " again! </h2>"; 
           echo "<h2> YOU WIN $" .$bet. "! </h2>";
           echo "<form method='GET' action ='index.php'>";
           echo "<input type='submit' name='again' value='Play Again'/>";
           echo "</form>";
        }
    }
    
?>

<!DOCTYPE html>

<html>
    
    <body> 
        <style>
            @import url("css/styles.css");
        </style>
        
    </body>
</html>    
     