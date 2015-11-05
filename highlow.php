<?php

$number = mt_rand(1,100);
$a = 0;

fwrite(STDOUT, 'Pick a number. Any number. Well, between 1 and 100.');
$guess = fgets(STDIN);


do {
	if ($guess < $number){
		fwrite(STDOUT, "HIGHER WART! \n");
		$guess = fgets(STDIN);
		$a++;
	}else {
		fwrite(STDOUT, "LOWER, YOU FOOL!\n");
		$guess = fgets(STDIN);
		$a++;
	}
} while ($guess != $number);

fwrite(STDOUT, "That'll do pig. That'll do. \nOnly $a tries.");

?>