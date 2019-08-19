<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../css/favicon.ico" type="image/x-icon" rel="icon" />
		<title><?php echo $config['title'] . ' - مدیریت'; ?></title>
		<style>
			body {
				margin: 0;
			}
			iframe {
				position:fixed;				top:0px;
				left:0px;
				bottom:0px;
				right:0px;
				border:none;				margin:0;
				padding:0;
				overflow:hidden;				width: 100%;
				height: 100%
			}
		</style>
	</head>
	<body>
		<iframe src="https://www.chargereseller.com/users/login">
			Your browser doesn't support iFrames.
		</iframe>
	</body>
</html>