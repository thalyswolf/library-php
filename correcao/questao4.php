<html>
<body>

			<ul>
			<?php
				$youta = 1000;
				$youtb = 200;
				$youtaganha = 100; # por ano
				$youtbganha = 200; # por ano
				$meses=0;


				while ($youta >= $youtb) {
					$youta +=$youtaganha;
					$youtb += $youtbganha;
					$meses++;
				}
				echo "em $meses meses para conseguir";


				?>
</body>
</html>
