<?php

$network = 70;
$software = 90;
$machinlearning = 50;
$datastructure = 90;
$java = 89;

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