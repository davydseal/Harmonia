<?php

session_start();

$codigo = $_SESSION["codigo"];




$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
$nome_real=$_FILES["Arquivo"]["name"];

require("../../ligar.php");

$foto_antiga = "SELECT * FROM $table_harprodutos WHERE codigo=$codigo";
$resultado_foto_antiga = mysql_query($foto_antiga);
$vetor_foto_antiga = mysql_fetch_array($resultado_foto_antiga);

$_UP['extensoes'] = array('jpg','gif','png','bmp');

$extensao = strtolower(end(explode('.', $_FILES['Arquivo']['name'])));

      if($_FILES['Arquivo']['name'] == ""){
                        ?>
                        <script language="javascript">
                        alert("Adicione uma Imagem!!");
                        document.location.href="mudarfoto.php";
                        </script>
                        <?php

                }
else if(array_search($extensao, $_UP['extensoes']) === false) {
?>
<script language="javascript">
alert("Só pode ser enviado arquivos no formato jpg,gif,png,bmp");
document.location.href="alterar_foto.php";
</script>
<?php
}
else
{


  $shuffled = str_shuffle($nome_real);


copy($nome_temporario,"../../img/$shuffled.jpg");
rename($nome_temporario,$shuffled);

unlink("$shuffled");

if($vetor_foto_antiga[7] == 0)
{

$update_prima = "UPDATE $table_harprodutos SET prima=1 WHERE codigo=$codigo";
$resultado_consulta = mysql_query($update_prima);


}
else
{
unlink("../../img/$vetor_foto_antiga[5]");
}
?>

<?php









$atualizar = "UPDATE $table_harprodutos  SET foto1='$shuffled.jpg' WHERE codigo=$codigo";
$resultado = mysql_query($atualizar);


if($resultado != 0)
{
?>
<script language="javascript">
alert("Foto Atualizada com Sucesso!!");

</script>
<?php
}
else
{
?>
<script language="javascript">
alert("Houve Erro no Sistema!!");
document.location.href="mudarfoto.php";

</script>
<?php
}
}
?>
