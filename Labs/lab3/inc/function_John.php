<?php
    

     function play(){
        global $players;
        global $deck;
        global $totals;
        
        $randomPlayers = array(0,1,2,3);
        //$playerNames = array();
        shuffle($randomPlayers);
        $totals = array();
        
        
        
        
         echo "<div id='players' style='width:60px;'>";
           
        for($i=0; $i<4; $i++){
            
            $random = array_pop($randomPlayers);
            
            switch($random){
                case 0: $symbol = "black_mage";
                        $players[$i] = "Black_mage";
                           break;
                           
                case 1: $symbol = "fighter";
                        $players[$i] = "Fighter";
                           break;
                           
                case 2: $symbol = "ninja";
                        $players[$i] = "Ninja";
                           break;
                           
                case 3: $symbol = "white_mage";
                        $players[$i] = "White_mage";
                           break;
            }
           
            // echo"Player Names: " . $playerNames[$i];
            echo "<h2> ".ucfirst($symbol).":  </h2>";
            echo "<img src='img/player_img/$symbol.png' alt='player' title='".ucfirst($symbol)."' style='width:60px; float:left; padding-bottom:10px; padding-left:100px; padding-right:20px;'  />";
            echo "</div>";
            $hand = getHand();
            $total = array_pop($hand);
            $totals[$players[$i]] = $total;
            displayHand($hand, $total);
            
        }
       
        
        echo "<div class='winner-container' style='color:darkred;'><h2>";
        displayWinner();
        //winners($playerNames, $totals);
       // echo"</div>";
        echo "</h2></div>";
         echo "<div id= timeData' style='text-align: center; font-size:1.15em;'>";
        displayAverageTime();
         echo "</div>";
     }

?>