<?php
echo "<h3>File Read/Write Functions</h3>";

// fopen, fwrite, fclose
$file = fopen("demo.txt", "w");
fwrite($file, "Hello File Functions");
fclose($file);
echo "File written successfully<br>";

$file = fopen("demo.txt", "r");
echo "File Content: " . fread($file, filesize("demo.txt")) . "<br>";
fclose($file);
?>