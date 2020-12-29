<?php
	require "../db_connect.php";
	require "header_member.php";
	require "verify_member.php";

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Message box</title>
    <link rel="stylesheet" type="text/css" href="../css/global_styles.css">
		<link rel="stylesheet" type="text/css" href="../css/custom_checkbox_style.css">
		<link rel="stylesheet" type="text/css" href="css/message_style.css">

  </head>
  <body>
		<?php
			$query = $con->prepare("SELECT book_isbn FROM book_issue_log WHERE member = ?;");
			$query->bind_param("s", $_SESSION['username']);
			$query->execute();
			$result = $query->get_result();
			$rows = mysqli_num_rows($result);
			if($rows == 0)
				echo "<h2 align='center'>Don't have any message</h2>";
			else
			{
</html>
