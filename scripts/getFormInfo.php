<?php 
	$first_name = $_REQUEST["first_name"];
	$last_name = $_REQUEST["last_name"];
	$email = $_REQUEST["email"];
	$facebook_url = $_REQUEST["facebook_url"];
	$twitter_handle = $_REQUEST["twitter_handle"];

?>

<html>
	<head>
		<link href="../phpMM.css" rel="stylesheet" type="text/css"/>
	</head>

	<body>
		<div id="header"><h1>PH-Phun: PH-Phun time!</h1></div>
		<div id="example">Social!</div>

		<div id="content">
			<p>Here is the information you have given me</p>
			<p>
				Name: <?php echo $first_name . " " . $last_name; ?><br />
				Email: <?php echo $email; ?><br />
				Facebook: <?php echo $facebook_url; ?><br />
				Twitter: <?php echo $twitter_handle; ?><br />
			</p>
		</div>
		<div id="footer"></div>

	</body>
</html>