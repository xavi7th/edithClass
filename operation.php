<?php

$num1 = $_POST['calculator__first'];
$num2 = $_POST['calculator__display'];
$operation = $_POST['calculator__operation'];

// if ($operation == 'addition') {
// 	echo $num1 + $num2;
// } elseif ($operation == 'subtraction') {
// 	echo $num1 - $num2;
// } elseif ($operation == 'times') {
// 	echo $num1 * $num2;
// } elseif ($operation == 'divide') {
// 	echo $num1 / $num2;
// } elseif ($operation == 'remainder') {
// 	echo $num1 % $num2;
// }


/**
 * Repeating the same code abovce using switch statement
 */

switch ($operation) {
	case 'addition':
		echo $num1 + $num2;
		break;
	case 'subtraction':
		echo $num1 - $num2;
		break;
	case 'times':
		echo $num1 * $num2;
		break;
	case 'divide':
		echo $num1 / $num2;
		break;
	case 'remainder':
		echo $num1 % $num2;
		break;

	default:
		echo "Invalid operation selected";
		break;
}