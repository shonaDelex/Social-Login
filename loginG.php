<?php
	include_once 'src/Google_Client.php';
	include_once 'src/contrib/Google_Oauth2Service.php';
	
	// Edit Following 3 Lines
	$clientId ='930128878512-ejse1s06vliiugr0q4s6ib768q6sf1dm.apps.googleusercontent.com'; //Application client ID
	$clientSecret = 'scDdzv6sifD3xugVwfsbsOMS'; //Application client secret
	$redirectURL = 'http://localhost/social_login/'; //Application Callback URL
	
	$gClient = new Google_Client();
	$gClient->setApplicationName('Your Application Name');
	$gClient->setClientId($clientId);
	$gClient->setClientSecret($clientSecret);
	$gClient->setRedirectUri($redirectURL);
	$google_oauthV2 = new Google_Oauth2Service($gClient);
?>