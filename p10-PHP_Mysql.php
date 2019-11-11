<?php
    $sname = "localhost";
    $uname = "root";
    $pname = "rahul_s98";
    $dname = "weblab";

    $conn = new mysqli($sname, $uname, $pname, $dname);
    $query = "SELECT usn,name from STUDENT";
    $result = $conn->query($query);
    $n = $result->num_rows;

    if($n>0){
        echo "Fetched data:<br>";
        $data = array();
        while($row = $result->fetch_assoc()){
            $data[] = array("usn"=>$row["usn"], "name"=>$row["name"]);
            echo $row["usn"].": ".$row["name"]."<br>";
        }
        for($i=0; $i<$n; $i++){
            $min = 1000;
            $ind = -1;
            for($j=$i; $j<$n; $j++){
                if($data[$j]["usn"] < $min){
                    $min = $data[$j]["usn"];
                    $ind = $j;
                }
            }

            $temp = $data[$i];
            $data[$i] = $data[$ind];
            $data[$ind] = $temp;
        }
        echo "<br>Sorted data:<br>";
        for($i=0; $i<$n; $i++)
            echo $data[$i]["usn"].": ".$data[$i]["name"]."<br>";
    }
    else
        echo "No rows in DB";
?>