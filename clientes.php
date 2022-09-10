<?php include("./cabecalho.php");?>
            <h1>Veja Nossos Clientes:
            </h1>
            <table border = '3'>
            <?php

                for($i = 0; $i<10; $i++){

                ?>

                    <tr>
                        <td>Cliente <?php echo $i; ?></td>
                        <td>Endereço <?php echo $i; ?></td>
                        <td>CPF <?php echo $i; ?></td>
                    </tr>

                <?php
            }
            
            ?>
            
<?php include("./rodape.php");?>