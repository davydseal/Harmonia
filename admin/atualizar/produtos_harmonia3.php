<?php




          //Declarando as variaveis locais
          
          $c_nome = $_POST["c_nome"];
          $c_codigo2 = $_POST["c_codigo2"];
          $c_tamanho = $_POST["c_tamanho"];
          $c_estoque = $_POST["c_estoque"];
          $c_descricao = $_POST["c_descricao"];
          $c_preco = $_POST["c_preco"];
          $c_frete = $_POST["c_frete"];
          $c_embalagem = $_POST["c_embalagem"];
          $codigo = $_POST["codigo"];



          //Verificando se os campos obrigatórios foram preenchidos

           if(empty($c_nome))
          {

?>
               <script language = "JavaScript">
                     alert('O campo NOME deve ser preenchido !!!');
                 document.location.href="produtos_harmonia2.php?codigo_adm=<?php print($login); ?>";
               </script>
<?php
          }
          else if(empty($c_codigo2))
          {

?>
               <script language = "JavaScript">
                     alert('O campo CODIGO deve ser preenchido !!!');
               document.location.href="produtos_harmonia2.php?codigo_adm=<?php print($login); ?>";
               </script>
<?php
          }
          else if(empty($c_tamanho))
          {
?>
               <script language = "JavaScript">
                    alert('O campo TAMANHO deve ser preenchido !!!');
                document.location.href="produtos_harmonia2.php?codigo_adm=<?php print($login); ?>";
               </script>
<?php
          }
          else if(empty($c_estoque))
          {
?>
               <script language = "JavaScript">
                     alert('O campo ESTOQUE deve ser preenchido !!!');
                  document.location.href="produtos_harmonia2?codigo_adm=<?php print($login); ?>";
               </script>
<?php

          }
           else if(empty($c_descricao))
          {
?>
               <script language = "JavaScript">
                     alert('O campo DESCRICAO deve ser preenchido !!!');
                  document.location.href="produtos_harmonia2.php?codigo_adm=<?php print($login); ?>";
               </script>
<?php

          }
           else if(empty($c_preco))
          {
?>
               <script language = "JavaScript">
                     alert('O campo PRECO deve ser preenchido !!!');
                  document.location.href="produtos_harmonia2.php?codigo_adm=<?php print($login); ?>";
               </script>
<?php

          }

          else
          {
               //Todos os campos foram preenchidos

               //Executando o arquivo de conexao

               require("../../ligar.php");





                                   $atualizar = "UPDATE $table_harprodutos SET nome='$c_nome',codigo2='$c_codigo2',tamanho='$c_tamanho',estoque='$c_estoque',descricao='$c_descricao',preco='$c_preco',frete='$c_frete',embalagem='$c_embalagem' WHERE codigo=$codigo";
                                   $resultado_atualizar = mysql_query($atualizar);

                                   if($resultado_atualizar == 0)
                                   {
                                        //Erro na atualização
?>

<script language="JavaScript">
      alert("Houve Erro no momento da atualização dos Dados Pessoais. Entre em contado com o Administrador.");
      document.location.href="produtos_harmonia2.php?codigo_adm=<?php print($login); ?>";
</script>

<?php



                         }
                         else
                         {


?>
                              <script language="JavaScript">
                                   alert("Atualizacao Realizada com Sucesso");
                                   document.location.href="produtos_harmonia.php";
                              </script>
<?php
                         }

                    }


?>

