
                                                                                                <?php


     session_start();



  $system_control = $_SESSION["system_control"];
  $status = $_SESSION["status"];
  $nickname = $_SESSION["nickname"];
  $codigo = $_SESSION["codigo"];
  $c_assunto = $_POST["c_assunto"];
  $c_texto = $_POST["c_texto"];
  


     //Verificando se o usuario efetuou o login

     if(($system_control == 1)&&($status == 1))
     {
          //Declarando as variaveis locais












                     if($c_assunto == "")
                {
                ?>
                <script language="javascript">
                 alert("Preencha o campo Assunto.");
                 document.location="news_usuario.php";
                 </script>
                <?php
                }
                        else    if($c_texto == "")
                {
                ?>
                <script language="javascript">
                 alert("Preencha o campo Texto.");
                 document.location="news_usuario.php";
                 </script>
                <?php
                }
                else
                {





                              require("../../ligar.php");


                              $inserir = "INSERT INTO $table_harnoticia (assunto,texto,enviador,tipo) VALUES ('$c_assunto','$c_texto','$nickname',1)";
                              $resultado = mysql_query($inserir);

                              if($resultado != 0)
                              {
                              ?>
                              <script langage="javascript">
                              alert("News Usuario Cadastrada com Sucesso!!");
                              document.location="news_usuario.php";
                              </script>
                              <?php
                              }
                              else
                              {
                               ?>
                              <script langage="javascript">
                              alert("Erro de Envio de Produto Entre em Contato com o Administrador");
                              document.location.href="news_usuario.php";
                              </script>
                              <?php

                              }
                              }








}
     else
     {
?>
      <script language='javascript'>
              alert('Acesso Inválido. Você deve realizar o login.');
              document.location.href="../../index.php";
      </script>
<?php
     }
?>



