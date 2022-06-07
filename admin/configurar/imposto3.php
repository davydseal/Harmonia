<?php

$c_custo = $_POST['c_custo'];
$codigo = $_POST['codigo'];

        if($c_custo == '')
        {
        ?>
        <script language="javascript">
        alert("Preencha o Campo Custo!!");
        document.location.href="newsadm2.php?codigo=<?php print($codigo); ?>";
        </script>
        <?php
        }
        else
        {
        
        require("../../ligar.php");
        
        $update = "UPDATE $table_harimposto SET custo='$c_custo' WHERE codigo=$codigo";
        $x = mysql_query($update);
        
        if($x =! 0)
        {
        ?>
         <script language="javascript">
        alert("ALterado com Sucesso!!!");
        </script>
        <?php
        }
        else
        {
        ?>
         <script language="javascript">
        alert("Houve um Erro Contate o Administrador");
        document.location.href="newsadm2.php?codigo=<?php print($codigo); ?>";
        </script>
        <?php
        }
        
        }


?>
