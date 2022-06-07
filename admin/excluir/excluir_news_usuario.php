<?php

$codigo = $_POST["codigo"];

require("../../ligar.php");
$delete = "DELETE FROM $table_harnoticia where codigo=$codigo";
$resultado = mysql_query($delete);

if($resultado != 0)
{
?>
<script language="javascript">
document.location.href="news_ok.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
document.location.href="news_off.php";
</script>
<?php
}

?>

