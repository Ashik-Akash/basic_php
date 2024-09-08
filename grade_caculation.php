<?php

$network = 50;
$software = 78;
$machinlearning = 100;
$datastructure = 98;
$java = 98;

$totalnumber = ( $network + $software + $machinlearning + $datastructure + $java ) / 5;

if ( $totalnumber >=90){
    echo "A+";
}

else if ($totalnumber >=70){
    echo  "A";
}

else if ($totalnumber >=60) {
    echo "A-";
}
else if ( $totalnumber >=50){

    echo "B";
}


?>