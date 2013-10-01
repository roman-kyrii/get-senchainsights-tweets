<?php

require '../vendor/autoload.php';

use Guzzle\Http\Client;
use Guzzle\Plugin\Oauth\OauthPlugin;

$baseUrl = 'https://api.twitter.com/1.1/';
$resource = 'statuses/user_timeline.json';
$screenName = 'SenchaInsights';
$count = 5;

$consumerKey = 'euoxQYDK14UvIIfACsbC9g';
$consumerSecret = 'j7VUsKQUvGzCXqmNnrVmN6W9up9D5XfRSr09z6WQp9k';
$accessToken = '1920265034-lOLeArHmrFqApQSykkX8FroqbcKfMgfkibowFN6';
$accessTokenSecret = '1zB5nJOGnbjuLjYVwMF77NUdQyY75ICrBPCYhXmx9E';

$client = new Client($baseUrl);

$settings = array(
    'consumer_key'    => $consumerKey,
    'consumer_secret' => $consumerSecret,
    'token'           => $accessToken,
    'token_secret'    => $accessTokenSecret
);

$client->addSubscriber(new OauthPlugin($settings));

$request = $client->get($resource);
$request->getQuery()->set('screen_name', $screenName);
$request->getQuery()->set('count', $count);

$response = $request->send();

$decodedResponse = json_decode($response->getBody(), true);

$tweets = array();

foreach ($decodedResponse as $tweet) {
    $tweets[] = $tweet['text'];
}

foreach ($tweets as $tweet) {
    echo $tweet . "\n";
}
