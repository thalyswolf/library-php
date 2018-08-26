<html>
			<?php

					$valor = rand(0,20);
					echo "$valor <br>";
					$n = $valor%2;
					if ($n !=0) {
						echo "é impar<br/>";
					}else{
						echo "é par <br/>";
					}
					$fat=$valor;
					$c = $valor;
					for ($i=1; $i < $c; $i++) {

						$valor--;
						$fat = $fat*$valor;

						echo "$fat x $valor<br>";
					}
					echo "O fatorial é $fat";
				?>

</html>
