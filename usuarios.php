<?php include("./cabecalho.php");?>
            <h1>Tela de Login
            </h1>

            <table border = '3'>
            <?php

                for($i = 0; $i<10; $i++){

                ?>

                    <tr>
                        <td>Login: <input type="text"> <?php echo $i; ?></td>
                        <td>Email: <input type="email"> <?php echo $i; ?></td>
                        <td>CheckBox: <input type="checkbox"> <?php echo $i; ?></td>
                    </tr>

                <?php
            }
            
            ?>

<?php include("./rodape.php");?>