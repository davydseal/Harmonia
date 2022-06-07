<?php

$resultados = $_GET["resultados"];
$ok = $_GET["ok"];

if($resultados == 0 && $ok == 0)
{
?>
 <BR>
<b><i><center>Conta Bloquiada com Sucesso!!
<?php
}

else if($resultados == 1 && $ok == 0)
{
?>
<BR>
<b><i><center>Houve Erro Ao Bloquear!!
<?php


}
else if($resultados == 0 && $ok == 1)
{
?>
<BR>
<b><i><center>Conta Desbloquiada com Sucesso!!
<?php
}
else
{
?>
<BR>
<b><i><center>Houve Erro Ao Desbloquear!!
<?php

}

?>
