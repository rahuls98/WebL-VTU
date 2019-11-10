<?php
    $states = ['Mississippi','Alabama','Texas','Massachusetts','Kansas'];
    $statesList = [];

    echo "Orginal array: <br>";
    foreach($states as $i=>$value)
        print("STATES[$i]=$value<br>");

    foreach($states as $state)
        if(preg_match('/.*xas$/',$state))
            $statesList[0] = $state;

    foreach($states as $state)
        if(preg_match('/^K.*s$/',$state))
            $statesList[1] = $state;

    foreach($states as $state)
        if(preg_match('/^M.*s$/',$state))
            $statesList[2] = $state;

    foreach($states as $state)
        if(preg_match('/a$/',$state))
            $statesList[3] = $state;

    echo "Final array: <br>";
    foreach($statesList as $i=>$value)
        print("STATESLIST[$i]=$value<br>");
?>