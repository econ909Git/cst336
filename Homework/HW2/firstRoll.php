 <?php
    session_start();
    echo "DEBUG " . $_SESSION["sessionBet"];
    //$_SESSION[$bank] = 500;
    
    $bet =  $_SESSION["sessionBet"];
    
    
    $firstDie = 0;
    $secondDie = 0;
    

    $match = start($bet);
    
    $_SESSION["matchRoll"] = $match;
    
 
    function start($money){
        $dice = array(0,1,2,3,4,5);
        shuffle($dice);
      
        echo "<br><br>";
        //echo "<h2>You bet: $" . $money . "</h2>";
      
        echo "<div id='roll'>";
           
        for($i=1; $i<=2; $i++){
            
            $random = array_pop($dice);
            
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
        
        if($rollValue == 7 || $rollValue == 11){
           echo "<br><br>";
           echo "<h2> You Got A: " . $rollValue . " on First Roll! </h2>"; 
           echo "<h2> YOU WIN $" .$money. "! </h2>";
           $newBank = $_SESSION["bank"] + $money;
           $_SESSION["bank"] = $newBank;
           echo "Your Bank: $" .$newBank;
           $_SESSION["newBank"] = $newBank;
           
           echo "<form method='GET' action='index.php'>";
           echo "<input type='submit' name='again' value='Play Again'/>";
           echo "</form>";
           
        }
        else {
            echo "<br><br>";
            echo "<h3> You rolled a: " . $rollValue . " on first roll  </h3>";
            echo "<h3> Now must roll " . $rollValue . " again BEFORE rolling a 7 or 11 to win, good luck! </h3>";
            
            //$matchRoll = $rollValue; 
            
            echo "<form method='GET' action='nextRolls.php'>";
           
            
            echo "<input type='submit' name='match' value='Next Roll'/>";
            echo "</form>";
        }
        return $rollvalue;
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