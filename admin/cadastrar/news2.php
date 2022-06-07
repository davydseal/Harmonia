<?php


     session_start();



  $system_control = $_SESSION["system_control"];
  $nickname = $_SESSION["nickname"];
  $status = $_SESSION["status"];
  $codigo = $_SESSION["codigo"];
  $c_assunto = $_POST["c_assunto"];
  $c_texto = $_POST["c_texto"];
  
  



     if(($system_control == 1)&&($status == 1))
     {












                     if($c_assunto == "")
                {
                ?>
                <script language="javascript">
                 alert("Preencha o campo Descricao.");
                 document.location="../admin.php";
                 </script>
                <?php
                }
                        else    if($c_texto == "")
                {
                ?>
                <script language="javascript">
                 alert("Preencha o campo Texto.");
                 document.location="../admin.php";
                 </script>
                <?php
                }
                else
                {





                              require("../../ligar.php");


                              $inserir = "INSERT INTO $table_harnoticia (assunto,texto,enviador,tipo) VALUES ('$c_assunto','$c_texto','$nickname',3)";
                              $resultado = mysql_query($inserir);

                              if($resultado != 0)
                              {
                              ?>
                              <script langage="javascript">
                              alert("News Cadastrada com Sucesso!!");
                              document.location="../admin.php";
                              </script>
                              <?php
                              }
                              else
                              {
                               ?>
                              <script langage="javascript">
                              alert("Erro de Envio de Produto Entre em Contato com o Administrador");
                              document.location.href="../admin.php";
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




