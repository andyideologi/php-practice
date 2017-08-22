<?php

// DIVIDE TWO NUMBERS WITHOUT MOD AND DIVIDE OPERATOR.. DONE!
ini_set('display_errors', 1);
$num=11;
$den=5;
divide($num,$den);

function divide($num,$den){

    $q=0;
	if($num==0){

		echo "Quotent =0";
	}
    else
	if($den==0){

		echo "Divivded By Zero!";
	}else{

		while($num>=$den)
        {
         $q+=1;
         $num = $num-$den;
        }

        Echo "Quetiont:$q And Reminder=$num";
	}
}
?>