<?php

$network = 78;
$software = 90;
$machinlearning = 67;
$datastructure = 98;

$totalnumber = ( $network + $software + $machinlearning + $datastructure ) / 4;

if ( $totalnumber >= 100){
    echo "A+";
}

else if ($totalnumber >= 90){
    echo  "A";
}

else if ($totalnumber >= 80 ) {
    echo "A-";
}



?>