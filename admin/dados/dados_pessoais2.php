<?php
     //Manutenção da Sessão

     session_start();

     //Recuperando as variaveis da sessão

     $system_control = $_SESSION["system_control"];
     $status = $_SESSION["status"];

     $codigo = $_SESSION["codigo"];

     //Verificando se o usuario efetuou o login

     if(($system_control == 1)&&($status == 1))
     {

          //Declarando as variaveis locais

          $c_nome = $_POST["c_nome"];
          $c_sobrenome = $_POST["c_sobrenome"];
          $c_sexo = $_POST["c_sexo"];
          $c_tel1 = $_POST["c_tel1"];
          $c_tel2 = $_POST["c_tel2"];
          $c_tel3 = $_POST["c_tel3"];
          $c_cel1 = $_POST["c_cel1"];
          $c_cel2 = $_POST["c_cel2"];
          $c_cel3 = $_POST["c_cel3"];
          $dn_dia = $_POST["dn_dia"];
          $dn_mes = $_POST["dn_mes"];
          $dn_ano = $_POST["dn_ano"];
          $c_email = $_POST["c_email"];
          $c_endereco = $_POST["c_endereco"];


          //Verificando se os campos obrigatórios foram preenchidos

          if(empty($c_nome))
          {

?>
               <script language = "JavaScript">
                     alert('O campo NOME deve ser preenchido !!!');
                     document.location.href="dados_pessoais.php";
               </script>
<?php
          }
          else if(empty($c_sobrenome))
          {

?>
               <script language = "JavaScript">
                     alert('O campo SOBRENOME deve ser preenchido !!!');
              document.location.href="dados_pessoais.php";
               </script>
<?php
          }
          else if(empty($c_sexo))
          {
?>
               <script language = "JavaScript">
                    alert('O campo SEXO deve ser preenchido !!!');
                     document.location.href="dados_pessoais.php";
               </script>
<?php
          }
          else if((empty($c_tel1)) || (empty($c_tel2)) || (empty($c_tel3)))
          {
?>
               <script language = "JavaScript">
                     alert('O campo TELEFONE deve ser preenchido !!!');
                          document.location.href="dados_pessoais.php";
               </script>
<?php
          }
          else if(empty($c_email))
          {
?>
               <script language = "JavaScript">
                     alert('O campo E-MAIL deve ser preenchido !!!');
                  document.location.href="dados_pessoais.php";
               </script>
<?php
          }
                    else if(empty($c_endereco))
          {
?>
               <script language = "JavaScript">
                     alert('O campo ENDERECO deve ser preenchido !!!');
                     document.location.href="dados_pessoais.php";
               </script>
<?php
          }
          else
          {
               //Todos os campos foram preenchidos

               //Executando o arquivo de conexao

               require("../../ligar.php");

               //Concatenando o cpf



               //Concatenando o telefone

               $telefone = $c_tel1.$c_tel2.$c_tel3;



               //Concatenando o celular

               $celular = $c_cel1.$c_cel2.$c_cel3;



                                   $atualizar = "UPDATE $table_hardados SET nome = '$c_nome',sobrenome = '$c_sobrenome',dn_dia = '$dn_dia',dn_mes = '$dn_mes',dn_ano = '$dn_ano',sexo = '$c_sexo',telefone = '$telefone',celular = '$celular',email = '$c_email',endereco = '$c_endereco' WHERE cod_login = $codigo";
                                   $resultado_atualizar = mysql_query($atualizar);

                                   if($resultado_atualizar == 0)
                                   {
                                        //Erro na atualização
?>
                                        <script language="JavaScript">
                                             alert("Houve Erro no momento da atualização dos Dados Pessoais. Entre em contado com o Administrador.");
                                             document.location.href="dados_pessoais.php";
                                        </script>
<?php



                         }
                         else
                         {
                              //Nickname não encontrado - Ele modificou o nickname e ninguem tem este nickname cadastrado

                              //Atualizando os dados pessoais do jogador

                              $atualizar = "UPDATE $table_hardados SET nome = '$c_nome',sobrenome = '$c_sobrenome',dn_dia = '$dn_dia',dn_mes = '$dn_mes',dn_ano = '$dn_ano',sexo = '$c_sexo',telefone = '$telefone',celular = '$celular',email = '$c_email',endereco = '$c_endereco' WHERE cod_login = $codigo";
                              $resultado_atualizar = mysql_query($atualizar);

                              if($resultado_atualizar == 0)
                              {
                                   //Erro na atualização
?>
                                   <script language="JavaScript">
                                        alert("Houve Erro no momento da atualização dos Dados Pessoais. Entre em contado com o Administrador.");
                                      document.location.href="dados_pessoais.php";
                                   </script>
<?php
                              }

                              //Atualizando os dados de login do jogador


                              //Menagem para o Usuário

?>
                              <script language="JavaScript">
                                   alert("Atualização Realizada com Sucesso");
                             document.location.href="dados_pessoais.php";
                              </script>
<?php
                         }

                    }
                    }
                    else
                    {
                    ?>
                    <script language="javascript">
                    alert("Acesso Negado!!");
                    document.location.href="../../index.php";
                    </script>
                    <?php
                    }

