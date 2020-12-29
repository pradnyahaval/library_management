<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
		<link rel="stylesheet" type="text/css" href="css/header_librarian_style.css" />
	</head>
	<body>
		<header style="background:#aecf2b">
			<div id="cd-logo">
				<a href="../">
					<p style="color:#421980">LIBRARY</p>
				</a>
			</div>

			<div class="dropdown">
				<button class="dropbtn" style="background:#421980; color:white; border-radius: 20px">
					<p id="librarian-name"><?php echo $_SESSION['username'] ?></p>
				</button>
				<div class="dropdown-content">
					<a href="../logout.php">Logout</a>
				</div>
			</div>
		</header>
	</body>
</html>
