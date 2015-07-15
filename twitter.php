<?php
session_start();
require_once("twitteroauth.php"); //Path to twitteroauth library you downloaded in step 3

$twitteruser = "sendgrid"; //user name you want to reference
$notweets = 1000; //how many tweets you want to retrieve
$lan = "en";
$consumerkey = "pPuY4dUH1G5ESzN2VT5RgZSJX"; //Noted keys from step 2
$consumersecret = "zVypjbhxqR1NEX4h15w662gbIP5rLhuFaoE3dy5PJN2Grm10y1"; //Noted keys from step 2
$accesstoken = "395706513-uC7GAKDVpnr1cdI4IBUQqLZuSeQXvWciQiGLaM8i"; //Noted keys from step 2
$accesstokensecret = "t1pyAPrnsvIo87m18eRdlVc4rBb6Oa2Lyq3NCxByJZ8h9"; //Noted keys from step 2

function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}

$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

$tweets = $connection->get("https://api.twitter.com/1.1/search/tweets.json?q=".$twitteruser."&lang=".$lan."&count=".$notweets);

echo json_encode($tweets);
echo $tweets; //testing remove for production   
?>