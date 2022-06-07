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


          $c_inscest = $_POST["c_inscest"];
          $c_inscmun = $_POST["c_inscmun"];
          $c_endereco = $_POST["c_endereco"];
          $c_cep = $_POST["c_cep"];
          $c_telefone1 = $_POST["c_telefone1"];
          $c_telefone2 = $_POST["c_telefone2"];
          $c_telefone3 = $_POST["c_telefone3"];
          $c_contato = $_POST["c_contato"];
          $c_email = $_POST["c_email"];
          $c_site = $_POST["c_site"];
          $c_texto = $_POST["c_texto"];


          //Verificando se os campos obrigatórios foram preenchidos

          if(empty($c_inscest))
          {
?>
               <script language = "JavaScript">
                     alert('O campo INSC. ESTADUAL deve ser preenchido !!!');
                     document.location.href="novo_fornecedor.php";
               </script>
<?php
          }
          else if(empty($c_inscmun))
          {
?>
               <script language = "JavaScript">
                    alert('O campo INSC. MUNICIPAL deve ser preenchido !!!');
                    document.location.href="novo_fornecedor.php";
               </script>
<?php
          }

           else if(empty($c_endereco))
          {
?>
               <script language = "JavaScript">
                    alert('O campo ENDERECO deve ser preenchido !!!');
                    document.location.href="novo_fornecedor.php";
               </script>
<?php
          }

          else if(empty($c_cep))
          {
?>
               <script language = "JavaScript">
                    alert('O campo CEP deve ser preenchido !!!');
                    document.location.href="novo_fornecedor.php";
               </script>
<?php
          }

          else if(empty($c_telefone1))
          {
?>
               <script language = "JavaScript">
                    alert('O campo TELEFONE deve ser preenchido !!!');
                    document.location.href="novo_fornecedor.php";
               </script>
<?php
          }

          else if(empty($c_telefone2))
          {
?>
               <script language = "JavaScript">
                    alert('O campo TELEFONE deve ser preenchido !!!');
                    document.location.href="novo_fornecedor.php";
               </script>
<?php
          }

          else if(empty($c_telefone3))
          {
?>
               <script language = "JavaScript">
                    alert('O campo TELEFONE deve ser preenchido !!!');
                    document.location.href="novo_fornecedor.php";
               </script>
<?php
          }

          else if(empty($c_contato))
          {
?>
               <script language = "JavaScript">
                    alert('O campo PESSOA PARA CONTATO deve ser preenchido !!!');
                    document.location.href="novo_fornecedor.php";
               </script>
<?php
          }

          else if(empty($c_email))
          {
?>
               <script language = "JavaScript">
                    alert('O campo EMAIL deve ser preenchido !!!');
                    document.location.href="novo_fornecedor.php";
               </script>
<?php
          }

          else if(empty($c_site))
          {
?>
               <script language = "JavaScript">
                    alert('O campo SITE deve ser preenchido !!!');
                    document.location.href="novo_fornecedor.php";
               </script>
<?php
          }

           else if(empty($c_texto))
          {
?>
               <script language = "JavaScript">
                    alert('O campo RAZAO SOCIAL deve ser preenchido !!!');
                    document.location.href="novo_fornecedor.php";
               </script>
<?php
          }
          else
          {
               //Todos os campos foram preenchidos

               //Executando o arquivo de conexao

               require("../../ligar.php");





                //Concatenando o telefone

                $telefone = $c_telefone1.$c_telefone2.$c_telefone3;


                                   $atualizar = "UPDATE $table_harfornecedor SET inscest = '$c_inscest',inscmun = '$c_inscmun',endereco = '$c_endereco',cep = '$c_cep',telefone = '$telefone',contato = '$c_contato',email = '$c_email',site = '$c_site',texto = '$c_texto'";
                                   $resultado_atualizar = mysql_query($atualizar);

                                   if($resultado_atualizar == 0)
                                   {
                                        //Erro na atualização
?>
                                        <script language="JavaScript">
                                             alert("Houve Erro no momento da atualização dos Dados Pessoais do fornecedor. Entre em contado com o Administrador.");
                                             document.location.href="novo_fornecedor.php?codigo_adm=<?php print($login); ?>";
                                        </script>
<?php



                         }
                         else
                         {


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

