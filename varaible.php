<?php
echo "<h3> Variables & Scope</h3>";

$stringVar = "Food order";
$intVar = 10;
$floatVar = 99.99;
$boolVar = true;
$arrayVar = array("Room", "Food", "Service");

$globalVar = "I am Global";

function globalExample() {
    global $globalVar;
    echo "Global Scope: $globalVar <br>";
}
globalExample();

/* ----------- Local Scope ----------- */
function localExample() {
    $localVar = "I am Local";
    echo "Local Scope: $localVar <br>";
}
localExample();
?>
<?php
echo "<h3>PART B: String Functions</h3>";

$str = " welcome to Online food ordering system";

echo "Length: " . strlen($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reverse: " . strrev($str) . "<br>";

echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Ucfirst: " . ucfirst(trim($str)) . "<br>";
echo "Ucwords: " . ucwords(trim($str)) . "<br>";
?>