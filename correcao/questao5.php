<html>
<body>

			<ul>
			<?php
					function resultado($valor){
						$soma =0;
						foreach ($valor as $value) {
							$soma +=$value;
						}
						return $soma;
					}

					$vetor = Array();
					for ($i=0; $i < 15; $i++) {
						$vetor[$i]=rand(1,10);
					}
					$r=resultado($vetor);
					echo "resultado é $r";
			?>

</body>
</html>
