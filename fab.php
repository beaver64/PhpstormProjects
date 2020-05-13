<?php

$codedMessage1 = "0@sn9sirppa@#?ia'jgtvryko1";
$codedMessage2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$codedMessage3 = "aopi?sgnirts@#?sedhtg+p9l!";


// message 1
$stringLength1 = strlen ($codedMessage1);
$keyInt1 = $stringLength1 / 2;
$subChain1 = substr ($codedMessage1 , 5, $keyInt1);
$replace1 = str_replace ('@#?', ' ', $subChain1);
$rev1 = strrev ($replace1);


// message 2
$stringLength2 = strlen ($codedMessage2);
$keyInt2 = $stringLength2 / 2;
$subChain2 = substr ($codedMessage2 , 5, $keyInt2);
$replace2 = str_replace ('@#?', ' ', $subChain2);
$rev2 = strrev ($replace2);

// message 3

$stringLength3 = strlen ($codedMessage3);
$keyInt3 = $stringLength3 / 2;
$subChain3 = substr ($codedMessage3 , 5, $keyInt3);
$replace3 = str_replace ('@#?', ' ', $subChain3);
$rev3 = strrev ($replace3);

// Phrase complète

echo ">>>>>>>> " . '"' . strtoupper ($rev1) . ' ' . strtoupper ($rev2) . ' ' . strtoupper ($rev3) . '"' . " <<<<<<<<";