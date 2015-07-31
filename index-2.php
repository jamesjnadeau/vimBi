<?php
include('config.php');

if(!isset($_SESSION['vimeo_access_token'])) {
  header( 'Location: /' );
  exit();
}
//set the token for the library
$vimeo->setToken($_SESSION['vimeo_access_token']);

//do stuff with the library
//use the api
$response = $vimeo->request('/me/videos', array('per_page' => 2), 'GET');
//var_dump($response['body']);
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
				background: url(first-post.png);
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
			<ul class="vlist">
				<?php foreach($response as $value) { ?>
					<li><pre><?php var_dump($value); ?></pre></li>
				<?php } ?>
			</ul>
		</div>
		
	</body>
</html>
<!--<p>State <?php echo $_SESSION['oauth_state']; ?></p>-->
