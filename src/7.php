 <?php 
$result = [];
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];
if ($operator == '+') {
	$result = $num1 + $num2;
} else if ($operator == '-') {
	$result = $num1 - $num2;
} else if ($operator == '*') {
	$result = $num1 * $num2;
} else if ($operator == '/') {
	if($num2 != 0) {
		$result = $num1 / $num2;
	} else {
		$result = "Cannot divide by zero";
	}
}
echo $result;
?>