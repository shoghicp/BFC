<?php

include_once("op.php");

$in = isset($argv[1]) ? ($argv[1] === "-" ? "php://stdin" : $argv[1]) : null;

$out = isset($argv[2]) ? ($argv[2] === "-" ? "php://stdout" : $argv[2]) : null;

if($in === null or $out === null){
	fwrite(STDERR, "Usage: ".PHP_BINARY." ".$argv[0]." <in> <out> [options]\n");
	exit(1);
}

$input = fopen($in, "r");
$output = fopen($out, "w");

function readOp($line){
	if(preg_match('/^(OP_[A-Z]+) ?(|\\-?[0-9]+)$/', trim($line), $matches) > 0){
		if(defined($matches[1])){
			return [constant($matches[1]), $matches[2] === "" ? null : intval($matches[2])];
		}
	}

	return null;
}

fwrite($output, '<?php' . PHP_EOL);
fwrite($output, '$memory = [];' . PHP_EOL);
fwrite($output, '$memoryAddress = 0;' . PHP_EOL);
fwrite($output, '$currentMemory =& $memory[$memoryAddress];' . PHP_EOL);
fwrite($output, PHP_EOL . '/* ------------------------- */' . PHP_EOL . PHP_EOL);

while(!feof($input)){
	if(($op = readOp(fgets($input))) === null){
		continue;
	}

	if($op[1] !== null){
		switch($op[0]){
			case OP_ADD:
				fwrite($output, '$currentMemory = ($currentMemory + '. $op[1] .') & 255;' . PHP_EOL);
				break;

			case OP_SUB:
				fwrite($output, '$currentMemory = ($currentMemory - '. $op[1] .') & 255;' . PHP_EOL);
				break;

			case OP_MOV:
				if($op[1] < 0){
					fwrite($output, '$memoryAddress -= '. -$op[1] .';' . PHP_EOL);
				}else{
					fwrite($output, '$memoryAddress += '. $op[1] .';' . PHP_EOL);
				}
				fwrite($output, '$currentMemory =& $memory[$memoryAddress];' . PHP_EOL);
				break;

			case OP_JZ:
				fwrite($output, 'while($currentMemory != 0){' . PHP_EOL);
				break;
			case OP_JNZ:
				fwrite($output, 'if($currentMemory == 0){' . PHP_EOL);
				fwrite($output, 'break;' . PHP_EOL);
				fwrite($output, '}' . PHP_EOL);
				fwrite($output, '}' . PHP_EOL);
				break;
		}
	}else{
		switch($op[0]){
			case OP_PRINT:
				fwrite($output, 'fwrite(STDOUT, chr($currentMemory));' . PHP_EOL);
				break;
			case OP_READ:
				fwrite($output, '$currentMemory = ord(fgetc(STDIN));' . PHP_EOL);
				break;
		}
	}
}


fclose($input);
fclose($output);