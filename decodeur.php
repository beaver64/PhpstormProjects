<?php
$phraseCode = "aopi?sgnirts@#?sedhtg+p9l!";
$code_key = (strlen($phraseCode)) / 2;
$unscrap = substr($phraseCode ,5 ,$code_key);
$unscrap = str_replace("@#?"," ",$unscrap);
echo (strrev($unscrap));