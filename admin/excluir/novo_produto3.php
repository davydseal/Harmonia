<?php

$excluir = $_POST['excluir'];

?>

<?php

  require("../../ligar.php");
$delete1 = "DELETE FROM $table_harprodutos WHERE codigo=$excluir";
$resultado1 = mysql_query($delete1);


if($resultado1 != 0)
{
?>
<script language="javascript">
alert("Produto Excluido com sucesso!!");
document.location.href="excluir2.php";
</script>
<?php
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
