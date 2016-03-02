<?php 
	$first_name = trim($_REQUEST["first_name"]);
	$last_name = trim($_REQUEST["last_name"]);
	$email = trim($_REQUEST["email"]);
	$facebook_url = trim($_REQUEST["facebook_url"]);
	$position = strpos($facebook_url, "facebook.com");
	if ($position === false) {
		$facebook_url = "http://www.facebook.com/" . $facebook_url;
	}
	$twitter_handle = trim($_REQUEST["twitter_handle"]);
	$twitter_url = "http://www.twitter.com/";
	$twitter_handle_check = strpos($twitter_handle, "@");
	if ($twitter_handle_check === false) {
		$twitter_url = $twitter_url . $twitter_handle;
	} else {
		$twitter_url = $twitter_url . substr($twitter_handle, $twitter_handle_check + 1);
	}

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
				<a href="<?php echo $facebook_url; ?>">Check Your Facebook</a><br />
				<a href ="<?php echo $twitter_handle; ?>">Check Your Twitter</a><br />
			</p>
		</div>
		<div id="footer"></div>

	</body>
</html>