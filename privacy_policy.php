<?php
$strJsonFileContents = file_get_contents("https://devtest.hackerusa.com");
$array = json_decode($strJsonFileContents);

echo "<h1>Privacy policy</h1>";
echo $array->popup->disclaimer;
