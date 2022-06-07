<?php
     //Manutenção da Sessão

     session_start();

     //Recuperando as variaveis da sessão

     $system_control = $_SESSION["system_control"];
     $status = $_SESSION["status"];

     //Verificando se o usuario efetuou o login

     if(($system_control == 1)&&($status == 1))
     {

          //Declarando as variaveis locais

          $c_nome = $_POST["c_nome"];
          $c_sobrenome = $_POST["c_sobrenome"];
          $c_sexo = $_POST["c_sexo"];
          $c_telefone1 = $_POST["c_telefone1"];
          $c_telefone2 = $_POST["c_telefone2"];
          $c_telefone3 = $_POST["c_telefone3"];
          $c_celular1 = $_POST["c_celular1"];
          $c_celular2 = $_POST["c_celular2"];
          $c_celular3 = $_POST["c_celular3"];
          $c_email = $_POST["c_email"];
          $login = $_POST["login"];


          //Verificando se os campos obrigatórios foram preenchidos

          if(empty($c_nome))
          {

?>
               <script language = "JavaScript">
                     alert('O campo NOME deve ser preenchido !!!');
               document.location.href="novo_administrador.php?codigo_adm=<?php print($login); ?>";
               </script>
<?php
          }
          else if(empty($c_sobrenome))
          {

?>
               <script language = "JavaScript">
                     alert('O campo SOBRENOME deve ser preenchido !!!');
                 document.location.href="novo_administrador.php?codigo_adm=<?php print($login); ?>";
               </script>
<?php
          }
          else if(empty($c_sexo))
          {
?>
               <script language = "JavaScript">
                    alert('O campo SEXO deve ser preenchido !!!');
                document.location.href="novo_administrador.php?codigo_adm=<?php print($login); ?>";
               </script>
<?php
          }
          else if((empty($c_telefone1)) || (empty($c_telefone2)) || (empty($c_telefone3)))
          {
?>
               <script language = "JavaScript">
                     alert('O campo TELEFONE deve ser preenchido !!!');
             document.location.href="novo_administrador.php?codigo_adm=<?php print($login); ?>";
               </script>
<?php
          }
          else if(empty($c_email))
          {
?>
               <script language = "JavaScript">
                     alert('O campo E-MAIL deve ser preenchido !!!');
                  document.location.href="novo_administrador.php?codigo_adm=<?php print($login); ?>";
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

               $telefone = $c_telefone1.$c_telefone2.$c_telefone3;
               


               //Concatenando o celular

               $celular = $c_celular1.$c_celular2.$c_celular3;



                                   $atualizar = "UPDATE $table_hardados SET nome = '$c_nome',sobrenome = '$c_sobrenome',sexo = '$c_sexo',telefone = '$telefone',celular = '$celular',email = '$c_email' WHERE cod_login = $login";
                                   $resultado_atualizar = mysql_query($atualizar);

                                   if($resultado_atualizar == 0)
                                   {
                                        //Erro na atualização
?>
                                        <script language="JavaScript">
                                             alert("Houve Erro no momento da atualização dos Dados Pessoais. Entre em contado com o Administrador.");
      document.location.href="novo_administrador.php?codigo_adm=<?php print($login); ?>";
                                        </script>
<?php



                         }
                         else
                         {
                              //Nickname não encontrado - Ele modificou o nickname e ninguem tem este nickname cadastrado

                              //Atualizando os dados pessoais do jogador

                              $atualizar = "UPDATE $table_hardados SET nome = '$c_nome',sobrenome = '$c_sobrenome',sexo = '$c_sexo',telefone = '$telefone',celular = '$celular',email = '$c_email' WHERE cod_login = $login";
                              $resultado_atualizar = mysql_query($atualizar);

                              if($resultado_atualizar == 0)
                              {
                                   //Erro na atualização
?>
                                   <script language="JavaScript">
                                        alert("Houve Erro no momento da atualização dos Dados Pessoais. Entre em contado com o Administrador.");
      document.location.href="novo_administrador.php?codigo_adm=<?php print($login); ?>";
                                   </script>
<?php
                              }

                              //Atualizando os dados de login do jogador


                              //Menagem para o Usuário

?>
                              <script language="JavaScript">
                                   alert("Atualizacao Realizada com Sucesso");

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

