<?php
	require "../db_connect.php";
	require "../message_display.php";
	require "verify_librarian.php";
	require "header_librarian.php";
?>

<html>
	<head>
		<title>Update copies</title>
		<link rel="stylesheet" type="text/css" href="../css/global_styles.css" />
		<link rel="stylesheet" href="../css/styles_for_all.css" />
	</head>
	<body>
		<form class="cd-form" method="POST" action="#">
			<legend>Enter the details</legend>

				<div class="error-message" id="error-message">
					<p id="error"></p>
				</div>
				<div class="box">
					<input type='text' id="inputdefault" name='b_isbn' placeholder="Book ISBN" required /></br>
					<input type="number" id="inputdefault" name="b_copies" placeholder="Copies to add" required /></br>
					<input type="submit" id="inputdefault" name="b_add" value="Add Copies" />
				</div>
		</form>
	</body>

	<?php
		if(isset($_POST['b_add']))
		{
			$query = $con->prepare("SELECT isbn FROM book WHERE isbn = ?;");
			$query->bind_param("s", $_POST['b_isbn']);
			$query->execute();
			if(mysqli_num_rows($query->get_result()) != 1)
				echo error_with_field("Invalid ISBN", "b_isbn");
			else
			{
				$query = $con->prepare("UPDATE book SET copies = copies + ? WHERE isbn = ?;");
				$query->bind_param("ds", $_POST['b_copies'], $_POST['b_isbn']);
				if(!$query->execute())
					die(error_without_field("ERROR: Couldn\'t add copies"));
				echo success("Copies successfully updated");
			}
		}
	?>
</html>
