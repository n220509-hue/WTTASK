<?php

$file = fopen("test.txt", "w");
fwrite($file, "Hello File Modes");
fclose($file);

$file = fopen("test.txt", "r");
echo fread($file, filesize("test.txt"));
fclose($file);

?>