<?php
$memory = [];
$memoryAddress = 0;
$currentMemory =& $memory[$memoryAddress];

/* ------------------------- */

$currentMemory = ($currentMemory + 8) & 255;
while($currentMemory != 0){
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 4) & 255;
while($currentMemory != 0){
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 2) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 3) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 3) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 4;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
fwrite(STDOUT, chr($currentMemory));
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 3) & 255;
fwrite(STDOUT, chr($currentMemory));
$currentMemory = ($currentMemory + 7) & 255;
fwrite(STDOUT, chr($currentMemory));
fwrite(STDOUT, chr($currentMemory));
$currentMemory = ($currentMemory + 3) & 255;
fwrite(STDOUT, chr($currentMemory));
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
fwrite(STDOUT, chr($currentMemory));
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
fwrite(STDOUT, chr($currentMemory));
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
fwrite(STDOUT, chr($currentMemory));
$currentMemory = ($currentMemory + 3) & 255;
fwrite(STDOUT, chr($currentMemory));
$currentMemory = ($currentMemory - 6) & 255;
fwrite(STDOUT, chr($currentMemory));
$currentMemory = ($currentMemory - 8) & 255;
fwrite(STDOUT, chr($currentMemory));
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
fwrite(STDOUT, chr($currentMemory));
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 2) & 255;
fwrite(STDOUT, chr($currentMemory));
