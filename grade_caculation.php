<?php

$network = 50;
$software = 50;
$machinlearning = 50;
$datastructure = 50;
$java = 50;

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
else if ($totalnumber >=50){

    echo "B";
}

else if ($totalnumber >=40){
    echo "F";
}

?>