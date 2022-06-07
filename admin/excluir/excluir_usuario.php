<?php

$excluir = $_POST['excluir'];

?>

<?php

  require("../../ligar.php");
$delete1 = "DELETE FROM $table_harlogins WHERE codigo=$excluir";
$resultado1 = mysql_query($delete1);

if($resultado1 != 0)
{

$delete2 = "DELETE FROM $table_hardados WHERE cod_login=$excluir";
$resultado2 = mysql_query($delete2);
if($resultado2 != 0)
{
?>
<script language="javascript">
document.location.href="excluir2.php";
</script>
<?php
}

}
else
{
?>
<script language="javascript">
alert("Houve Erro Ao Excluir Dados!!");
document.location.href="excluir.php";
</script>
<?php
}


?>
