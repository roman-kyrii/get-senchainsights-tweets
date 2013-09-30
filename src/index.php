<?php

require '../vendor/autoload.php';

use Guzzle\Http\Client;

$baseUrl = 'https://api.twitter.com/1.1/';

$resource = 'statuses/user_timeline.json';

$screenName = 'SenchaInsights';
$count = 5;

$url = $baseUrl . $resource . '?screen_name=' . $screenName . '&count=' . $count;

$consumerKey = 'euoxQYDK14UvIIfACsbC9g';
$consumerSecret = 'j7VUsKQUvGzCXqmNnrVmN6W9up9D5XfRSr09z6WQp9k';
$accessToken = '1920265034-lOLeArHmrFqApQSykkX8FroqbcKfMgfkibowFN6';
$accessTokenSecret = '1zB5nJOGnbjuLjYVwMF77NUdQyY75ICrBPCYhXmx9E';

$client = new Client($baseUrl);



