<?php

$lambda_2 = function($str) {
	$a=substr($str,0,5);
	$b=substr($str,7,strlen($str)-14);
	$c=substr($str,-5);
	return gzinflate(base64_decode($a.$b.$c));
};

$strings = [
    "09coyhTk/KLynW1NPSK6koUdEtPHAA==",
    "S87PKhT0nNK9EtqSxItSpJrSjRL6ktPoAQA=",
    "09cozhTixJzU0s0NTT0qvIzVHtPRBwA=",
    "S87PKhT0nNK9EtqSxItSpJrSjRr8jtPNAQA=",
];

echo "=========================\n";
foreach ($strings as $string) {
    var_dump([$string=>$lambda_2($string)]);
}


$a = base64_decode("LmVidXlkaXNwbGF5LmNvbQ==");
$b = base64_decode("MTAwMC5lYnV5ZGlzcGxheS5jb20=");

var_dump([$a, $b]);
