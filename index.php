<?php 

include('config.php');

//a random value that we will validate when they come back with
$state = bin2hex(openssl_random_pseudo_bytes(16));
$_SESSION['oauth_state'] = $state;

//create auth url
$auth_redirect_url = $vimeo->buildAuthorizationEndpoint($redirect_uri, $scopes, $state);

?>
<html>
	<head>
		<title>Bink Vimeo Integration</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<style>
			body {
				background: #121212;
				
			}
			
			.screen {
				width: 375px;
				height:667px;
				background: url(connect-accounts.png);
				position: relative;
			}
			
			.v-button {
				background: rgba(100,100,100,0.3);
				width: 64px;
				height: 64px;
				position: absolute;
				left: 120px;
				top: 220px
				
			}
			
		</style>
	</head>
	<body>
		<div class="screen">
			<a class="v-button" href="<?php echo $auth_redirect_url; ?>"></a>
		</div>
	</body>
</html>
<!--<p>State <?php echo $_SESSION['oauth_state']; ?></p>-->