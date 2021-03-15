<?php

$myfile = fopen("test_txt.txt", "r") or die("Unable to open file!");
while (!feof($myfile)) {
    echo fgets($myfile) . "\n";
}
fclose($myfile);

$myfile = fopen("test_txt.txt", "a+") or die("Unable to open file!");
$fullName = "David DUPOND" . "\n";
fwrite($myfile, $fullName);
fclose($myfile);
