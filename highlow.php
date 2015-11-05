<?php

$number = rand(1,100);

fwrite(STDOUT, 'Pick a number. Any number. Well, between 1 and 100.');
$guess = fgets(STDIN);

do {
	if ($guess < $number){
		fwrite(STDOUT, "HIGHER WART! \n");
		$guess = fgets(STDIN);
	}else {
		fwrite(STDOUT, "LOWER, YOU FOOL!\n");
		$guess = fgets(STDIN);
	}
} while ($guess != $number);

fwrite(STDOUT, "That'll do pig. That'll do.");

?>