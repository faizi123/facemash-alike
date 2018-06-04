<head>
<link rel="stylesheet" href="style.css" />
<link rel="icon" type="image/x-icon" href="favicon.ico">
<title>Cutemash | Comaparing cute animals</title>
<meta name="Description" content="Comparing cute animals and ranking based on their cuteness inspired by facemash created by Mark Zuckerberg . It uses a Elo rating system for the comparison">
<meta name="Keywords" content="cutemash ,facemash ,elo ,mark ,facebook, animals, cute, kitten, puppy, panda, dolphins, adorable">

</head>
<div class="header-1">
    <p>................Rankings................</p>
</div>
<?php
	$con=mysqli_connect("localhost","root","","facemash2");
	if($con)
	{

	}
	else{
		echo "Error";
	}


	$i=1;
	$query="Select * from photos  order by rating desc";
	$sql=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($sql))
	{	
		echo "<center>";
		echo "<h3><i>---------------- Rank".$i." -----------------</i></h3>";
		echo '<div id="photoRandom"><img src="'.$row['photo'].'"></br>';
		echo "<strong>Current rating :</strong> <b>".$row['rating']."</b><br>";
		echo "<strong>Wins :</strong> ".$row['votes'];
		echo "<strong><br>Stand-offs :</strong>".$row['stand_offs'];
		echo "</center>";
		$i++;
		echo "<br><br>";
	}


	
	
?>

