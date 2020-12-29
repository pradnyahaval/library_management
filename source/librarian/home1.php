<?php
	require "../db_connect.php";
	require "verify_librarian.php";
	require "header_librarian.php";
?>

 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>home page</title>
		 <link rel="stylesheet" type="text/css" href="../css/global_styles.css">
 		 <link rel="stylesheet" type="text/css" href="../css/form_styles.css">
     <link rel="stylesheet" href="css/home1-style.css">
   </head>
   <body>
				 <div class="container">
					 <a href="pending_registrations.php"><input type="submit" value="Pending Registrations" ></a>
					 &nbsp; &nbsp;
					  <a href="pending_book_request.php"><input type="submit" name="" value="Pending  book requests" /></a>
					  &nbsp; &nbsp;
					  <a href="insert_book.php"><input type="submit" name="" value="Add new book" /></a>
					 &nbsp; &nbsp;
					  <a href="update_copies.php"><input type="submit" name="" value="Update copies of books" /></a>
					  &nbsp; &nbsp;
					  <a href="update_balance.php"><input type="submit" name="" value="Update balance of a member" /></a>
				 </div>
   </body>
 </html>
