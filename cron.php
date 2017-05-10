<?php

include 'user.php';

login("http://vipfb.us/verify.php?user=".$token1."","null");
echo post_data("http://vipfb.us/f.php?type=custom","id=".$UID."&limit=100&submit=Submit");

login("http://vipfb.us/verify.php?user=".$token2."","null");
echo post_data("http://vipfb.us/f.php?type=custom","id=".$UID."&limit=100&submit=Submit");

login("http://vipfb.us/verify.php?user=".$token3."","null");
echo post_data("http://vipfb.us/f.php?type=custom","id=".$UID."&limit=100&submit=Submit");

login("http://vipfb.us/verify.php?user=".$token4."","null");
echo post_data("http://vipfb.us/f.php?type=custom","id=".$UID."&limit=100&submit=Submit");

login("http://vipfb.us/verify.php?user=".$token1."","null");
echo post_data("http://vipfb.us/f.php?type=custom","id=100014148976494&limit=100&submit=Submit");

function post_data($site,$data){
    $datapost = curl_init();
    $headers = array("Expect:");
    curl_setopt($datapost, CURLOPT_URL, $site);
    curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
    curl_setopt($datapost, CURLOPT_HEADER, TRUE);
    curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($datapost, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($datapost, CURLOPT_POST, TRUE);
    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
    curl_setopt($datapost, CURLOPT_COOKIEFILE, "cookie.txt");
    ob_start();
     curl_exec ($datapost);
    ob_end_clean();
    curl_close ($datapost);
    unset($datapost); 
}

?>
