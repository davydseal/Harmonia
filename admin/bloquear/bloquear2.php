<?php

$codigo = $_GET["codigo"];
$o = $_GET["temp"];

require("../../ligar.php");

if($o == 1)
{
$update = "UPDATE $table_harlogins SET situacao=2 WHERE codigo=$codigo";
$resultado = mysql_query($update);

if($resultado != 0)
{
?>
<script language="javascript">
document.location.href="bloquear3.php?resultados=0&ok=0";
</script>
<?php
}

else
{
?>
<script language="javascript">
document.location.href="bloquear3.php?resultados=1&ok=0";
</script>
<?php
}




}

else if($o == 2)
{
$bloquear = "UPDATE $table_harlogins SET situacao=1 WHERE codigo=$codigo";
$resultado2 = mysql_query($bloquear);

if($resultado2 != 0)
{
?>
<script language="javascript">
document.location.href="bloquear3.php?resultados=0&ok=1";
</script>
<?php
}
else
{
?>
<script language="javascript">
document.location.href="bloquear3.php?resultados=1&ok=1";
</script>
<?php
}





}

?>
