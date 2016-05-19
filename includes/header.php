<!DOCTYPE html>
<html>
<head>
	<title>Higgyball 2016 Scoresheet App</title>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<link rel="stylesheet" href="includes/higgy.mobile.css" />
	<link rel="stylesheet" href="includes/higgyball2016.min.css" />
	<link rel="stylesheet" href="includes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="includes/jquery.mobile.structure-1.4.5.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="includes/jquery-1.11.1.min.js"></script>
	<script src="includes/jquery.mobile-1.4.5.min.js"></script>
	<script type="text/javascript" src="includes/higgy.mobile.js"></script>
	<script type="text/javascript" src="includes/slidernav.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15196276-3', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body>
	<div id="menu">
	</div>

	<div data-role="page" id="main">

		<div data-role="header">
			<a href="#" data-icon="arrow-l" data-iconpos="left" data-rel="back" data-theme="b">Back</a>
			<h1>Higgyball 2016</h1>
			<a href="#menu" data-theme="b" data-icon="bars">Menu</a>
		</div><!-- /header -->

		<div data-role="panel" data-position="right" data-position-fixed="false" data-display="overlay" id="menu" data-theme="b">
			<ul data-theme="b" data-role="listview">
				<li><a href="index.php" data-ajax="false">Home</a></li>
				<li><a href="myteam.php" data-ajax="false">My Team</a></li>
				<li><a href="scoreboard.php" data-ajax="false">Scoreboard</a></li>
				<li><a href="rules.php" data-ajax="false">Rules</a></li>
				<li><a href="map.php" data-ajax="false">Map</a></li>
				<li><a href="mvp.php" data-ajax="false">MVP Voting</a></li>
				<li><a href="camera.php" data-ajax="false">Upload Photos</a></li>
				<li><a href="logout.php" data-ajax="false">Logout</a></li>
			</ul>
		</div><!-- /panel -->
