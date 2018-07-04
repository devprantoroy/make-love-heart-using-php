<?php

echo "<pre>";
$number = 10;

	for ($i=$number / 2; $i <= $number ; $i+=2) { 

		for ($number1=1; $number1 < $number-$i ; $number1+=2) { 
			echo "&nbsp;";
		}

		for ($number1=1; $number1 <=$i ; $number1++) { 
			echo "*";
		}

		for ($number1=1; $number1 < $number-$i ; $number1++) { 
			echo "&nbsp;";
		}

		for ($number1=1; $number1 <=$i ; $number1++) { 
			echo "*";
		}

		echo "<br/>";
		
	}

	for ($i=$number; $i >= 1 ; $i--) { 
		for ($pranto=$i; $pranto < $number ; $pranto++) { 
			echo "&nbsp";
		}

		for ($pranto=1; $pranto <= ($i*2)-1 ; $pranto++) { 
			echo "*";
		}
		echo "<br/>";
	}

	echo "</pre>";

?>