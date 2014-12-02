<?php
$memory = [];
$memoryAddress = 0;
$currentMemory =& $memory[$memoryAddress];

/* ------------------------- */

$memoryAddress += 4;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 2) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 7) & 255;
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 4) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 2) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 2) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 5) & 255;
while($currentMemory != 0){
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 2) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 6) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ord(fgetc(STDIN));
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 2) & 255;
while($currentMemory != 0){
while($currentMemory != 0){
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
while($currentMemory != 0){
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 2) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 9) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 2) & 255;
while($currentMemory != 0){
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 4;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 6;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 5;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 7;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 7) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 3) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 7;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 7;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 5;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 3;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 7) & 255;
$memoryAddress += 3;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 7) & 255;
$memoryAddress += 3;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 6;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 13) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 5;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 12) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 5;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 11) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 10) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 5;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 3;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 2) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ord(fgetc(STDIN));
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
fwrite(STDOUT, chr($currentMemory));
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 4;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 4;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 5;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 2) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 6;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 4;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 4;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 5;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 6;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 6;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
while($currentMemory != 0){
$memoryAddress += 3;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 3;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 3;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 4;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 6;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
while($currentMemory != 0){
$memoryAddress += 3;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
while($currentMemory != 0){
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress += 3;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 3;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 3;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$currentMemory = ($currentMemory - 1) & 255;
$memoryAddress -= 1;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 1;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 4;
$currentMemory =& $memory[$memoryAddress];
while($currentMemory != 0){
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory + 1) & 255;
$memoryAddress += 2;
$currentMemory =& $memory[$memoryAddress];
$currentMemory = ($currentMemory - 1) & 255;
if($currentMemory == 0){
break;
}
}
$memoryAddress -= 2;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
if($currentMemory == 0){
break;
}
}
$memoryAddress += 7;
$currentMemory =& $memory[$memoryAddress];
if($currentMemory == 0){
break;
}
}
