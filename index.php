<?php
$con=mysqli_connect("localhost","root","","facemash2");

	if($con)
	{

	}
	else{
		die("Error");
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		<title>Rate Me | Comparing You</title>
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
		<div class="header">


			 <h1><img src="6Ty5edK8c.png"/>Rate Me..<a class="first" href="about.html">ABOUT</a> <a class="second" href="ranking.php">RANKINGS</a> </h1>


            <hr>
		</div>

        <div class="main_wrapper">
			<h3>Who's Hotter? <h3>Click To Choose..</h3></h3>
			<?php

			do{
			$query1="SELECT * from photos ORDER BY rand() ";
			$sql1=mysqli_query($con,$query1);
			$row1=mysqli_fetch_array($sql1);

			$query2="SELECT * from photos ORDER BY rand() ";
			$sql2=mysqli_query($con,$query2);
			$row2=mysqli_fetch_array($sql2);
			}while ($row2['id']==$row1['id']) ;
			
			?>
			
				<div id="photoRandom">
					<a href="vote.php?id1=<?php echo $row1['id'] ?>&amp;id2=<?php echo $row2['id'] ?>&amp;photo=first"><img src="<?php echo $row1['photo'] ?>" /></a>
					<p id="or"><strong>OR</strong></p>
					<a href="vote.php?id2=<?php echo $row2['id'] ?>&amp;id1=<?php echo $row1['id'] ?>&amp;photo=second"><img src="<?php echo $row2['photo'] ?>" /></a>
				</div>
		</div>
<br><br>

	</body>
</htmL>

