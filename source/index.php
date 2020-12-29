<?php
	require "db_connect.php";
	require "header.php";
	session_start();

	if(empty($_SESSION['type']));
	else if(strcmp($_SESSION['type'], "librarian") == 0)
		header("Location: librarian/home.php");
	else if(strcmp($_SESSION['type'], "member") == 0)
		header("Location: member/home.php");
?>

<html>
	<head>
		<center><title>Library</title></center>
		<link rel="stylesheet" type="text/css" href="css/index_style.css" />
	</head>

	<body>
		<div id="allTheThings">
			<div id="member" style="width:300px">
				<a href="member">
					<img src="img/user-filled-person-shape.svg"/><br />
					&nbsp;Member
				</a>
				
			</div>
			<div id="verticalLine">
				<div id="librarian" style="width:300px">
					<a id="librarian-link" href="librarian">
						<img src="img/man-with-tie.svg" /><br />
						&nbsp;&nbsp;&nbsp;Librarian
					</a>
				</div>
			</div>
		</div>
	</body>
</html>
