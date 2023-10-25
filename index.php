
<?php
echo "Hello, World!";
?>

//Variables and Data Types:
<?php
$name = "John";
$age = 30;
$isStudent = true;
?>

//Basic Arithmetic:
<?php
$num1 = 10;
$num2 = 5;
$sum = $num1 + $num2;
echo "The sum is: " . $sum;
?>


//Conditional Statements:
<?php
$grade = 85;
if ($grade >= 60) {
    echo "Pass";
} else {
    echo "Fail";
}
?>

//Loops
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i<br>";
}
?>

//Arrays
<?php
$fruits = array("Apple", "Banana", "Orange");
echo "I like " . $fruits[0] . " and " . $fruits[2];
?>

//Functions
<?php
function greet($name) {
    echo "Hello, $name!";
}
greet("Alice");
?>

//html integration
<!DOCTYPE html>
<html>
<body>
    <?php
    $message = "Welcome to my website!";
    echo "<h1>$message</h1>";
    ?>
</body>
</html>
