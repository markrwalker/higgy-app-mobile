<?php

	require_once('config.php');

	$year = array();
	$sql1 = "SELECT * FROM `year` WHERE `current` = 1";
	$result1 = mysql_query($sql1);
	$year = mysql_fetch_assoc($result1);

	$teams = array();
	$sql3 = "SELECT * FROM team WHERE year_id = ".$year['id']." AND id != 999 ORDER BY name ASC";
	$result3 = mysql_query($sql3);
	while ($row = mysql_fetch_assoc($result3)) {
		$teams[] = $row;
	}

	if (isset($_GET['teamid']) && intval($_GET['teamid']) ) {

		$teamid = $_GET['teamid'];
		if (!empty($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = 'index';
		}

		$teamid = stripslashes($teamid);
		$teamid = mysql_real_escape_string($teamid);

		$sql = "SELECT name FROM team WHERE id = $teamid";
		$result = mysql_query($sql);

		$count = mysql_num_rows($result);

		if ($count == 1) {
			if (!isset($_COOKIE['higgy_teamid'])) {
				$team = mysql_fetch_assoc($result);
				$fh = fopen(__DIR__.'/log.txt', 'a'); fputs($fh, date('Y-m-d H:i:s')." Login by: ".$team['name']."\n"); fclose($fh);
				setcookie("higgy_teamid", $teamid, time()+3600*24*3, "/");
				setcookie("higgy_teamname", $team['name'], time()+3600*24*3, "/");
			}
			header('Location: '.$page.'.php');
			exit();
		} else {
			$error = "<p class=\"error\">There was something wrong. Please select your team again.</p>\n";
		}
	}
	$page = $_GET['page']; 
?>
<?php require_once('includes/header.php'); ?>
		<div data-role="content">
			<?php if (isset($error)) echo $error; ?>
			<p>Please click/tap a team below to follow that team on the My Team page</p>
			<ul data-role="listview" data-inset="true" data-divider-theme="d">
			<?php foreach ($teams as $team) { ?>
				<li><a href="<?php echo $_SERVER['PHP_SELF'].'?teamid='.$team['id'].'&page='.$page; ?>"><?php echo $team['name']; ?></a></li>
			<?php } ?>
			</ul>
		</div><!-- /content -->
<?php require_once('includes/footer.php'); ?>
