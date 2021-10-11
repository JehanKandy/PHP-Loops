<?php
	
	//While LOOP
	echo "<u>while Loop </u><br>";

	$var = 1;
	while($var <= 10){
		echo "Number is : ".$var."<br>";
		$var++;
	}
	
	echo "<br><br>";
	//do...while loop
	echo "<u>do....while Loop </u><br>";

	$var1 = 1;
	do {
	 	echo "Number is : ".$var1."<br>";
	 	$var1++;
	 } while ($var1 <= 10);


	echo "<br><br>";
	//FOR loop
	echo "<u>FOR Loop </u><br>";

	for ($var2=0; $var2 <= 10 ; $var2++) { 
		echo "Number is : ".$var2."<br>";
	}

?>