<?php
    $A = array(array(1,2),array(3,4));
    $B = array(array(1,2,3),array(4,5,6));
    $ar = count($A);
    $ac = count($A[0]);
    $br = count($B);
    $bc = count($B[0]);

    echo "Matrix A: <br>";
    for($i=0; $i<$ar; $i++){
        for($j=0; $j<$ac; $j++){
            echo $A[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "Matrix B: <br>";
    for($i=0; $i<$br; $i++){
        for($j=0; $j<$bc; $j++){
            echo $B[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "Transpose of Matrix A: <br>";
    for($i=0; $i<$ac; $i++){
        for($j=0; $j<$ar; $j++){
            echo $A[$j][$i]." ";
        }
        echo "<br>";
    }
    echo "Transpose of Matrix B: <br>";
    for($i=0; $i<$bc; $i++){
        for($j=0; $j<$br; $j++){
            echo $B[$j][$i]." ";
        }
        echo "<br>";
    }
    $m = array();
    if($ac==$br){
        for($i=0; $i<$ar; $i++){
            for($j=0; $j<$bc; $j++){
                $m[$i][$j] = 0;
                for($k=0; $k<$ac; $k++){
                    $m[$i][$j] += $A[$i][$k]*$B[$k][$j];
                }
            }
        }
    } 
    
    $mr = count($m);
    $mc = count($m[0]);
    echo "<br>Matrix M: <br>";
    for($i=0; $i<$mr; $i++){
        for($j=0; $j<$mc; $j++){
            echo $m[$i][$j]." ";
        }
        echo "<br>";
    }
   
?>
