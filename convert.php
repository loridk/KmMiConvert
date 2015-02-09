<!DOCTYPE html>
<html>
<head>
  <title>Convert MI/KM Form</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<p><img src="top.png" alt="KM-MI Converter" /></p>



  
<?php
	

	$number=$_POST['number'];
	
	$conversion=$_POST['conversion'];
	
	
	if (empty($number)) {
		// blank number
			echo 'You forgot to fill in a number!<br />';
			echo '<a href="convert.html">Go back?</a>';
		}
		
	else {
	
		
		if ($conversion == "kmTOmi") {
			$answer = $number* 0.62137;
			$answer=round($answer,2);
			echo $number . ' KM = ' .$answer. ' MI';
			
				if($answer == 500){
				echo '<br />And I would walk 500 more...';
				}
			
			echo '<br /><a href="convert.html">Again?</a>';
		}
	
		
		else if (($conversion == "miTOkm") && ($number == 500)) {
			$answer = $number/ 0.62137;
			$answer=round($answer,2);
			echo $number . ' MI = ' .$answer. ' KM';
			echo '<br />And I would walk 500 more...';
			echo '<br /><a href="convert.html">Again?</a>';
		}		
		
		else {
			$answer = $number/ 0.62137;
			$answer=round($answer,2);
			echo $number . ' MI = ' .$answer. ' KM';
			echo '<br /><a href="convert.html">Again?</a>';
		}
	}


?>  

<p><em>Programmed by: Denise Dunford </p>
</body>
</html>