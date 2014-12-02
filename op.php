<?php

//OP_ADD <VALUE>, adds <VALUE> to cell, MOD 256
define("OP_ADD", 0);

//OP_SUB <VALUE>, subtracts <VALUE> from cell, MOD 256
define("OP_SUB", 1);

//OP_MOV <VALUE>, moves to cell CURRENT + <VALUE>
define("OP_MOV", 2);

//OP_PRINT, prints cell char into STDOUT
define("OP_PRINT", 3);

//OP_READ, puts STDIN char into cell
define("OP_READ", 4);

//OP_JZ #TARGET, jumps to #TARGET if cell is 0
define("OP_JZ", 5);

//OP_JNZ #TARGET, jumps to #TARGET if cell is not 0
define("OP_JNZ", 6);

function getOpName($op){
	static $ops = [
		OP_ADD => "OP_ADD",
		OP_SUB => "OP_SUB",
		OP_MOV => "OP_MOV",
		OP_PRINT => "OP_PRINT",
		OP_READ => "OP_READ",
		OP_JZ => "OP_JZ",
		OP_JNZ => "OP_JNZ"
	];

	return isset($ops[$op]) ? $ops[$op] : "OP_UNKNOWN";
}