<?php


if (($argc == 3) && (is_numeric($argv[1])) && (is_numeric($argv[2]))){
	$max = $argv[2];
	$min = $argv[1];
} else {
	$max = 100;
	$min = 1;
}

$number = mt_rand($min,$max);
$a = 1;

fwrite(STDOUT, "Pick a number. Any number. Well, between $min and $max.");
$guess = fgets(STDIN);


do {
	if ($guess == $number){
		fwrite(STDOUT, "By Jove I think it's got it!");
	} elseif ($guess < $number){
		fwrite(STDOUT, "HIGHER WART! \n");
		echo $number;
		$guess = fgets(STDIN);
		$a++;
	}else {
		fwrite(STDOUT, "LOWER, YOU FOOL!\n");
		echo $number;
		$guess = fgets(STDIN);
		$a++;
	}
} while ($guess != $number);

fwrite(STDOUT, "That'll do pig. That'll do. \nOnly $a tries.");


?>