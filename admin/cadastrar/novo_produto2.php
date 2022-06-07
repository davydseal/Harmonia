<?php


     session_start();



  $system_control = $_SESSION["system_control"];
  $nickname = $_SESSION["nickname"];
  $status = $_SESSION["status"];
  $codigo = $_SESSION["codigo"];
  
  



     if(($system_control == 1)&&($status == 1))
     {

       //Declarando as variaveis locais

          $c_nome = $_POST["c_nome"];
          $c_codigo2 = $_POST["c_codigo2"];
          $c_tamanho = $_POST["c_tamanho"];
          $c_estoque = $_POST["c_estoque"];
          $c_descricao = $_POST["c_descricao"];
          $c_preco = $_POST["c_preco"];
          $c_imposto = $_POST["c_imposto"];
          $c_impostos = $_POST["c_impostos"];
          $c_bdi = $_POST["c_bdi"];
          $c_frete = $_POST["c_frete"];
          $c_embalagem = $_POST["c_embalagem"];
          $c_custof = $_POST["c_custof"];
          $c_magem = $_POST["c_magem"];
          $c_custov = $_POST["c_custov"];




  //Verificando se os campos obrigatórios foram preenchidos


          if(empty($c_nome))
          {

?>
               <script language = "JavaScript">
                     alert('O campo NOME deve ser preenchido !!!');
                     document.location.href="novo_produto.php";
               </script>
<?php
          }
          else if(empty($c_codigo2))
          {

?>
               <script language = "JavaScript">
                     alert('O campo CÓDIGO deve ser preenchido !!!');
                     document.location.href="novo_produto.php";
               </script>
<?php
          }
          else if(empty($c_tamanho))
          {

?>
               <script language = "JavaScript">
                     alert('O campo TAMANHO deve ser preenchido !!!');
                     document.location.href="novo_produto.php";
               </script>
<?php
          }
          else if(empty($c_estoque))
          {
?>
               <script language = "JavaScript">
                    alert('O campo ESTOQUE deve ser preenchido !!!');
                    document.location.href="novo_produto.php";
               </script>
<?php
          }
                    else if(empty($c_descricao))
          {
?>
               <script language = "JavaScript">
                    alert('O campo DESCRIÇÃO DO PRODUTO deve ser preenchido !!!');
                    document.location.href="novo_produto.php";
               </script>
<?php
          }
          else if(empty($c_preco))
          {
?>
               <script language = "JavaScript">
                     alert('O campo PREÇO DE COMPRA deve ser preenchido !!!');
                     document.location.href="novo_produto.php";
               </script>
<?php
          }
          else if(empty($c_imposto))
          {
?>
               <script language = "JavaScript">
                    alert('O campo IMPOSTO deve ser preenchido !!!');
                    document.location.href="novo_produto.php";
               </script>
<?php
          }



                else
                {





                              require("../../ligar.php");


                              $inserir = "INSERT INTO $table_harprodutos (nome,codigo2,tamanho,estoque,descricao,preco,imposto,venda,tipo,foto1,status,impostos,bdi,frete,embalagem,custof,magem,custov) VALUES ('$c_nome','$c_codigo2','$c_tamanho','$c_estoque','$c_descricao','$c_preco','$c_imposto','$c_venda',1,'avatar.jpg',1,'$c_impostos','$c_bdi','$c_frete','$c_embalagem','$c_custof','$c_magem','$c_custov')";
                              $resultado = mysql_query($inserir);

                              if($resultado != 0)
                              {
                              ?>
                              <script langage="javascript">
                              alert("Produto Cadastrada com Sucesso!!");
                              document.location="novo_produto.php";
                              </script>
                              <?php
                              }
                              else
                              {
                               ?>
                              <script langage="javascript">
                              alert("Erro de Envio de Produto Entre em Contato com o Administrador");
                              document.location.href="novo_produto.php";
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




