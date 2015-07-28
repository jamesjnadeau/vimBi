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
var_dump($response['body']);
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
			
				<ul class="vlist"></ul>
			
		</div>
		
		</body>
		<script>
			$(document).ready(function () {
				$.ajax({
					type: "POST",
				    
				    data: "{}",
				    dataType: "json",
				    contentType: "application/json; charset=utf-8",
				    async: true,
				    success: OnSuccess,
				    error: OnError
				});

			function OnSuccess(data) {
			    $.each(data, function() {
				$(".vlist").append("<li><img src=" + this.link + " /></li>");
				});
}

function OnError(data) {

}
    });
</script>

</html>
<!--<p>State <?php echo $_SESSION['oauth_state']; ?></p>-->