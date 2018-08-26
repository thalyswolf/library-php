<?php 
    if(count($_GET)){?>
        <pre>

        <h2>Variaveis $_GET</h2>
        <?php print_r($_GET) ?>
                
        </pre>
    <?php } ?>
<?php
    if(count($_POST)){?>
        <pre>

        <h2>Variaveis $_POST</h2>
        <?php print_r($_POST) ?>
                
        </pre>
    <?php } ?>
</body>
</html>
