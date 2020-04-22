<?php

$lambda_2 = function($str) {
	$a=substr($str,0,5);
	$b=substr($str,7,strlen($str)-14);
	$c=substr($str,-5);
	return gzinflate(base64_decode($a.$b.$c));
};

$strings = [
    "S8rMShT0/KL6lJz89Pz0mtPtAQA=",
    "S8zPqhTUnKzEuvqUzMyM8tPHAA==",
];

foreach ($strings as $string) {
    var_dump($lambda_2($string));
}

