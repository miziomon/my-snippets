<?php
// require
require_once 'twitter.php';

// create instance
$twitter = new Twitter('Tb53e52SeoJQ5YTdeoHmzw', 'cK8s9RYHrBZaQjjqmOvBKVBpH1X7huT4ylY9HpiZt3M');


// set tokens
$twitter->setOAuthToken('372263-lcjlglj1dlaRaAXPj99IUJWFXfTd5LhBrPZhlNdqdM');
$twitter->setOAuthTokenSecret('mxOU21Cvvwa5vkFZ9V5dwUEGFJmoyEbJd6TLpXs0');

// get users timeline
$response = $twitter->statusesHomeTimeline( null , null , 3);

// output
foreach ( $response as $tweet ) {
	//var_dump( $tweet["user"] );
	echo "<br /><img src='" . $tweet["user"]["profile_image_url"] . "'> " . $tweet["user"]["screen_name"] . "::" . $tweet["text"];
	
	}



?> 