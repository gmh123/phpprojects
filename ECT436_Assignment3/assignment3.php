<html>
<head>
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
<title>Movie Tickets</title>
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
		
<h1>Welcome to the Carleton Movie Theater</h1>

<p>At this movie theater, we play the best movies for the best prices. 
From the biggest blockbusters movies that are hot right now to critically acclaimed independent films.</p> 

<p>Here are the movies we have playing at this theater.</p>
<?php 
	$movies[1] = "Moonlight";
    $movies[2] = "Star Wars: Rogue One";
    $movies[3] = "Hidden Figures";
    $movies[4] = "Captain America: Civil War";
    $movies[5] = "X-Men: Apocolypse";
    $movies[6] = "20th Century Women";
    $movies[7] = "Split";
    $movies[8] = "Doctor Strange";

	 foreach ($movies as $shows) {
        print "$shows <br />";
   }
   print "</p>";

?>

Here's the daily special we are offering for today!<br /><br />


<?php 
$dailyspecial = "10"; 

switch ($dailyspecial) {
    case "10":
        print "You can get 10 tickets for $15.00!";
        break;
    case "20":
        print "You can get 5 tickets for $7.00!";
        break;
     case "25":
        print "You can get 2 tickets for $3.00!";
        break;
    default:
        echo "You don't get any tickets!";
}
?>

<h3>Order your movie tickets below</h3>
<p>
<form method = "get" action="movie_tickets.php">
   How many movie tickets you're buying (Please no more than 10):
   <input type="text" name="tickets">
   <input type="submit" name="submit" value="Submit"/>
</form>
</p>
</body>
</html>