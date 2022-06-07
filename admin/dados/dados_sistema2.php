<?php

 session_start();
 
 $codigo = $_SESSION["codigo"];
 $nickname = $_POST["c_nick"];
 $senha = $_POST["c_senha"];
 $senha2 = $_POST["c_confirmar_senha"];
 $senha3 = $_POST["c_senha_atual"];
 
 
 if($nickname == '')
 {
 ?>
 <script language="javascript">
 alert("O campo nickname deve ser preenchido!");
 document.location.href="dados_sistema.php";
 </script>
 <?php
 }
 else if($senha == '')
 {
 ?>
  <script language="javascript">
 alert("O campo senha deve ser preenchido!");
 document.location.href="dados_sistema.php";
 </script>
 <?php
 }
 else if($senha2 == '')
 {
 ?>
  <script language="javascript">
 alert("O campo confirmar senha deve ser preenchido!");
 document.location.href="dados_sistema.php";
 </script>
 <?php
 }
  else if($senha3 == '')
 {
 ?>
  <script language="javascript">
 alert("O campo senha atual deve ser preenchido!");
 document.location.href="dados_sistema.php";
 </script>
 <?php
 }
 else if($senha != $senha2)
 {
 ?>
  <script language="javascript">
 alert("O campo confirmar senha nao confere com o campo senha!");
 document.location.href="dados_sistema.php";
 </script>
 <?php
 }
 else
 {
 $senha_ok = md5($senha);
 $senha4 = md5($senha3);

 require("../../ligar.php");
 
 $verif = "SELECT * FROM $table_harlogins WHERE nickname='$nickname' && codigo='$codigo'";
 $result = mysql_query($verif);
 $quantidades = mysql_num_rows($result);
 if($quantidades == 0)
 {

 $verificar = "SELECT * FROM $table_harlogins WHERE nickname='$nickname'";
 $resultado = mysql_query($verificar);
 $quantidade = mysql_num_rows($resultado);
 
 if($quantidade != 0)
 {
 ?>
 <script language="javascript">
 alert("nickname existente!");
 document.location.href="dados_sistema.php";
 </script>
 <?php
 }
 else if($quantidade == 0)
 {
 $update_nickname ="UPDATE $table_harlogins SET nickname='$nickname' WHERE codigo='$codigo'";
 $resultado_nickname = mysql_query($update_nickname);

 if($resultado_nickname == 0)
 {
 ?>
 <script language="javascript">
 alert("Houve erro ao atualizar!");
 document.location.href="dados_sistema.php";
 </script>
 <?php
 }
 else
 {

 
 $consultar = "SELECT * FROM $table_harlogins WHERE senha='$senha4'";
 $resultado_s = mysql_query($consultar);
 $qtt = mysql_num_rows($resultado_s);
 if($qtt == 0)
 {
 ?>
 <script language="javascript">
 alert("Senha atual nao corresponde a sua senha!");
  document.location.href="dados_sistema.php";
 </script>
 <?php
 }
 else if($qtt != 0)
 {
 
 $update_codigo = "UPDATE $table_harlogins SET senha='$senha_ok' WHERE codigo=$codigo";
 $resultado_codigo = mysql_query($update_codigo);
 
 if($resultado_codigo == 0)
 {
 ?>
 <script language="javascript">
 alert("Houve Erro ao Atualizar!!");
 document.location.href="dados_sistema.php";
 </script>
 <?php
 }
 else
 {
  ?>
 <script language="javascript">
 alert("Dados alterados com sucesso!!");
 document.location.href="dados_sistema.php";
 </script>
 <?php
 
 }
 
 }


 
 }
 
 
 }

 }
 else
 {
 $consultar = "SELECT * FROM $table_harlogins WHERE senha='$senha4'";
 $resultado_s = mysql_query($consultar);
 $qtt = mysql_num_rows($resultado_s);
 if($qtt == 0)
 {
 ?>
 <script language="javascript">
 alert("Senha atual nao corresponde a sua senha!");
 document.location.href="dados_sistema.php";
 </script>
 <?php
 }
 else if($qtt != 0)
 {

 $update_codigo = "UPDATE $table_harlogins SET senha='$senha_ok' WHERE codigo=$codigo";
 $resultado_codigo = mysql_query($update_codigo);

 if($resultado_codigo == 0)
 {
 ?>
 <script language="javascript">
 alert("Houve Erro ao Atualizar!!");
 document.location.href="dados_sistema.php";
 </script>
 <?php
 }
 else
 {
  ?>
 <script language="javascript">
 alert("Dados alterados com sucesso!!");
 document.location.href="dados_sistema.php";
 </script>
 <?php

 }
 }

 }
 }
 
 ?>
