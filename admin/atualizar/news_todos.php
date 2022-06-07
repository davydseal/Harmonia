<?php

$c_assunto = $_POST['assunto'];
$c_texto = $_POST['texto'];
$codigo = $_POST['codigo'];

        if($c_assunto == '')
        {
        ?>
        <script language="javascript">
        alert("Preencha o Campo ASSUNTO!!");
        document.location.href="newsadm2.php?codigo=<?php print($codigo); ?>";
        </script>
        <?php
        }
                else if($c_texto == '')
        {
        ?>
        <script language="javascript">
        alert("Preencha o Campo TEXTO!!");
        document.location.href="newsadm2.php?codigo=<?php print($codigo); ?>";
        </script>
        <?php
        }
        else
        {
        
        require("../../ligar.php");
        
        $update = "UPDATE $table_harnoticia SET assunto='$c_assunto' , texto='$c_texto' WHERE codigo=$codigo";
        $x = mysql_query($update);
        
        if($x =! 0)
        {
        ?>
         <script language="javascript">
        alert("News ALterado com Sucesso!!!");
        document.location.href="newsadm2.php?codigo=<?php print($codigo); ?>";
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
