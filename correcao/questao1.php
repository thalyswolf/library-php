<html>
			<?php
				$idade = rand(0,50);
				$par = $impar = 0;
				for ($i=0; $i <= $idade; $i++) {
					$v = $i%2;
					if ($v != 0) {
						$impar++;
					}
				}
				echo "Idade: $idade <br>";
				echo "Impar: $impar <br> ";
				?>
</html>
