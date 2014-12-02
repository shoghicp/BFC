<?php

include_once("op.php");

$in = isset($argv[1]) ? ($argv[1] === "-" ? "php://stdin" : $argv[1]) : null;

$out = isset($argv[2]) ? ($argv[2] === "-" ? "php://stdout" : $argv[2]) : null;

if($in === null or $out === null){
	fwrite(STDERR, "Usage: ".PHP_BINARY." ".$argv[0]." <in> <out> [options]\n");
	exit(1);
}

//$options = getopt("", ["remove-jumps"])

$input = fopen($in, "r");
$output = fopen($out, "w");


$lastCharacter = null;
$memoryAddress = 0;
$memoryCounter = 0;
$opAddress = 0;


$operations = [];
$stack = [];


function addOperation(array &$ops, $address, $op, $extra = null){
	$ops[$address] = [$op, $extra];
}

function printOperation($out, $op, $extra = null){
	//OP_NAME <EXTRA>?
	fwrite($out, getOpName($op) . ($extra !== null ? " ". $extra : "") . "\n");
}

while(!feof($input) and ($char = fgetc($input))){
	if(
		$char !== "["
		and $char !== "]"
		and $char !== "<"
		and $char !== ">"
		and $char !== "+"
		and $char !== "-"
		and $char !== "."
		and $char !== ",")
	{
		continue;
	}

	if($lastCharacter !== $char and $lastCharacter !== null){
		switch($lastCharacter){
			case "+":
				addOperation($operations, $opAddress++, OP_ADD, $memoryCounter % 256);
				$memoryCounter = 0;
				break;

			case "-":
				addOperation($operations, $opAddress++, OP_SUB, $memoryCounter % 256);
				$memoryCounter = 0;
				break;
			case ">":
				addOperation($operations, $opAddress++, OP_MOV, $memoryCounter);
				$memoryCounter = 0;
				break;

			case "<":
				addOperation($operations, $opAddress++, OP_MOV, -$memoryCounter);
				$memoryCounter = 0;
				break;
		}
	}

	switch($char){
		case ".":
			addOperation($operations, $opAddress++, OP_PRINT);
			break;

		case ",":
			addOperation($operations, $opAddress++, OP_READ);
			break;

		case "+":
		case "-":
			++$memoryCounter;
			break;

		case ">":
		case "<":
			++$memoryCounter;
			break;

		case "[":
			$stack[] = $opAddress;
			addOperation($operations, $opAddress++, OP_JZ);
			break;

		case "]":
			$old = array_pop($stack);
			addOperation($operations, $old, OP_JZ, $opAddress - $old + 1);
			addOperation($operations, $opAddress, OP_JNZ, $old - $opAddress + 1);
			++$opAddress;
			break;
	}

	$lastCharacter = $char;
}

ksort($operations);

foreach($operations as $op){
	printOperation($output, $op[0], $op[1]);
}

fclose($input);
fclose($output);

exit(0);