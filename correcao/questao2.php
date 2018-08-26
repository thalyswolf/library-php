<html>
<body>
<?php
		$vetor1 = Array();
		$vetor2 = Array();
		$vetor3 = Array();
		for ($i=0; $i < 14; $i++) {
			$vetor1[$i]= rand(0,150);
			$vetor2[$i]= rand(0,150);
			echo "$vetor1[$i] e $vetor2[$i] <br />";
		}
		echo "<hr>";
		foreach ($vetor1 as $value) {
			if (in_array($value, $vetor2)) {
				echo "$value <br />";
			}
		}
?>
</body>
</html>
