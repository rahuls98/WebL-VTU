<?php
    $states = ['Mississippi','Alabama','Texas','Massachusetts','Kansas'];
    $statesList = [];

    foreach($states as $i=>$state)
        print("States[$i]=$state<br>");

    foreach($states as $state){
        if(preg_match('/xas$/', $state)) $statesList[0]=$state;
        if(preg_match('/^k.*s$/i', $state)) $statesList[1]=$state;
        if(preg_match('/^m.*s$/i', $state)) $statesList[2]=$state;
        if(preg_match('/a$/', $state)) $statesList[3]=$state;
    }

    echo "<br>";
    ksort($statesList);
    foreach($statesList as $i=>$state)
        print("StatesList[$i]=$state<br>");
?>