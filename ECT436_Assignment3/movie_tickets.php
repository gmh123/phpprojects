<html>
<head>
<title>Movie Tickets</title>
<style type="text/css"> 
body{ 
	background-color: #E7E18E;

}

ul {
	list-style-type: none;
	margin: 0;
	padding:20px 5px 15px 270px;
}

li {
	display: inline;
	padding: 8px;
}

</style>
</head>
<body>
<ul>
			<li><a href="index.php">Assignment 1</a></li>
			<li><a href="assignment2.php">Assignment 2</a></li>
			<li><a href="assignment3.php">Assignment 3</a></li>
			<li><a href="../ECT436_Assignment1/deliverable_a.php">Project Deliverable A</a></li>
			<li><a href="../ECT436_Assignment1/assignemnt4.php">Assignment 4</a></li>
			<li><a href="../ECT436_Assignment1/deliverable_b.php">Project Deliverable B</a></li>
</ul>

<img src="movie-night-banner.jpg" />

<?php
	 $ticketsData = filter_input(INPUT_GET, "tickets");
		if($ticketsData > 10 || $ticketsData <= 0) { 
			print "<h1>That's not a valid number of tickets! Please try again.</h1>";
		
		} else { 
		
		 print "<h1>Thank you. We will have  " . $ticketsData . " ticket(s)
			 avaliable for you at the front counter!</p>";
		}
		
 ?>

</body>
</html>