

<?php


     session_start();



     $system_control = $_SESSION["system_control"];

     $nickname = $_SESSION["nickname"];



     //Manuten��o da Sess�o
     
       require("../../ligar.php");
     

     
      $atualizar = "UPDATE $table_harlogins SET login = 0 WHERE nickname = '$nickname'";
      $resultado_atualizar = mysql_query($atualizar);
                                   




     
     //Finalizando a sessao

     session_destroy(); //Logout
     
     //Fornecendo uma mensagem para o usu�rio
     
?>
     <script language='JavaScript'>
             alert('Volte Sempre!!');
             document.location.href="../../index.php";
     </script>
     
     <?
     
     
     ?>
