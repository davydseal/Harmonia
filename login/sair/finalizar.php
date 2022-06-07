

<?php


     session_start();



     $system_control = $_SESSION["system_control"];

     $nickname = $_SESSION["nickname"];



     //Manutenção da Sessão
     
       require("../../ligar.php");
     

     
      $atualizar = "UPDATE $table_harlogins SET login = 0 WHERE nickname = '$nickname'";
      $resultado_atualizar = mysql_query($atualizar);
                                   




     
     //Finalizando a sessao

     session_destroy(); //Logout
     
     //Fornecendo uma mensagem para o usuário
     
?>
     <script language='JavaScript'>
             alert('Volte Sempre!!');
             document.location.href="../../index.php";
     </script>
     
     <?
     
     
     ?>
