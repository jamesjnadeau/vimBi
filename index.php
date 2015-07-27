<html>
	<head>
		<title>Bink Vimeo Integration</title>
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
			<form post="https://api.vimeo.com/oauth/authorize/client">
				<a class="v-button"></a>
			</form>
		</div>
	</body>
</html>