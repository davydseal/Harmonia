<?php


     session_start();



  $system_control = $_SESSION["system_control"];
  $nickname = $_SESSION["nickname"];
  $status = $_SESSION["status"];
  $codigo = $_SESSION["codigo"];
  
  



     if(($system_control == 1)&&($status == 1))
     {

       //Declarando as variaveis locais
       
          $c_cnpj1 = $_POST["c_cnpj1"];
          $c_cnpj2 = $_POST["c_cnpj2"];
          $c_cnpj3 = $_POST["c_cnpj3"];
          $c_cnpj4 = $_POST["c_cnpj4"];
          $c_cnpj5 = $_POST["c_cnpj5"];
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


          if(empty($c_cnpj1))
          {

?>
               <script language = "JavaScript">
                     alert('O campo CNPJ deve ser preenchido !!!');
                     document.location.href="novo_fornecedor.php";
               </script>
<?php
          }
          else if(empty($c_cnpj2))
          {

?>
               <script language = "JavaScript">
                     alert('O campo CNPJ deve ser preenchido !!!');
                     document.location.href="novo_fornecedor.php";
               </script>
<?php
          }
          else if(empty($c_cnpj3))
          {

?>
               <script language = "JavaScript">
                     alert('O campo CNPJ deve ser preenchido !!!');
                     document.location.href="novo_fornecedor.php";
               </script>
<?php
          }
          else if(empty($c_cnpj4))
          {
?>
               <script language = "JavaScript">
                    alert('O campo CNPJ deve ser preenchido !!!');
                    document.location.href="novo_fornecedor.php";
               </script>
<?php
          }
                    else if(empty($c_cnpj5))
          {
?>
               <script language = "JavaScript">
                    alert('O campo CNPJ deve ser preenchido !!!');
                    document.location.href="novo_fornecedor.php";
               </script>
<?php
          }
          else if(empty($c_inscest))
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





                              require("../../ligar.php");

                                //Concatenando o cnpj

                                 $cnpj = $c_cnpj1.$c_cnpj2.$c_cnpj3.$c_cnpj4.$c_cnpj5;

                                //Concatenando o telefone

                                 $telefone = $c_telefone1.$c_telefone2.$c_telefone3;
                                 
                                 

                              $inserir = "INSERT INTO $table_harfornecedor (cnpj,inscest,inscmun,endereco,cep,telefone,contato,email,site,texto,status) VALUES ('$cnpj','$c_inscest','$c_inscmun','$c_endereco','$c_cep','$telefone','$c_contato','$c_email','$c_site','$c_texto',1)";
                              $resultado = mysql_query($inserir);

                              if($resultado != 0)
                              {
                              ?>
                              <script langage="javascript">
                              alert("Fornecedor Cadastrado com Sucesso!!");
                              document.location="novo_fornecedor.php";
                              </script>
                              <?php
                              }
                              else
                              {
                               ?>
                              <script langage="javascript">
                              alert("Erro de Envio de Produto Entre em Contato com o Administrador");
                              document.location.href="novo_fornecedor.php";
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




