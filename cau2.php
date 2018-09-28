<html>
<head>
</head>
<body>
	<?php
	$number = array(1,2,3,4,5,6,7,8,9)
	for($i = 0; $i < count($number)-1; $i++)
	{
		$temp = $number[$i];
		for($j = $i+1; $j < count($number); $j++)
		{
			if($number[$j] > $temp)
				$temp = $number[$j]; 
		}
		$tam = $number[$i];
		$number[$i] = $temp;
		$temp = $tam;
	}
?>
</body
</html>