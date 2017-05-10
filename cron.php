<?php


/** 
Script CUrl By HocTrick.NET
 **/

include'config.php';

$token = file_get_contents('token/token.txt');
$token2 = file_get_contents('token/token2.txt');
$token3 = file_get_contents('token/token3.txt');
$token4 = file_get_contents('token/token4.txt');
$token5 = file_get_contents('token/token5.txt');


kunkey($dm.'/viplike.php?id='.$uid.'&token='.$token);
echo '<hr>';
kunkey($dm.'/viplike.php?id='.$uid.'&token='.$token2);
echo '<hr>';
kunkey($dm.'/viplike.php?id='.$uid.'&token='.$token3);
echo '<hr>';
kunkey($dm.'/viplike.php?id='.$uid.'&token='.$token4);
echo '<hr>';
kunkey($dm.'/viplike.php?id='.$uid.'&token='.$token5);


unlink("logvip.txt"); 



function kunkey($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   echo $ch;
   }
?>	