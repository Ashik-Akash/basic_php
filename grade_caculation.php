<?php

$network = 70;
$software = 90;
$machinlearning = 50;
$datastructure = 90;
$java = 89;
$Algorithom = 89;

$totalnumber = ( $network + $software + $machinlearning + $datastructure + $java + $Algorithom ) / 6;

if ( $totalnumber >=90){
    echo "Your Grade Is : A+";
}

else if ($totalnumber >=70){
    echo  "Your Grade Is : A";
}

else if ($totalnumber >=60) {
    echo "Your Grade Is : A-";
}
else if ($totalnumber >=50){

    echo "Your Grade Is : B";
}

else if ($totalnumber >=40){
    echo "Your Grade Is : F";
}

?>