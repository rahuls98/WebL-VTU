<?php
    $fp = fopen('counter.txt','r');
    $count = fread($fp,1024);
    fclose($fp);
    $count += 1;

    echo "<h2>Page views: ".$count."</h2>";
    
    $fp = fopen('counter.txt','w');
    fwrite($fp, $count);
    fclose($fp);
?>