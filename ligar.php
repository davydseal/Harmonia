
<?php
     //Arquivo de conexao do PHP com MySQL

     //Declaracao das variaveis locais
     
     $hostname = "localhost";  //Endere�o do Servidor Web
     $username = "root";
     $password = "";
     $databasename = "controle";
     $table_harlogins = "harlogins";
     $table_hardados = "hardados";
     $table_harprodutos = "harprodutos";
     $table_harnoticia = "harnoticia";
     $table_harfornecedor = "harfornecedor";
     $table_harbdi = "harbdi";
     $table_harimposto = "harimposto";
     $table_harmagem = "harmagem";






     
     //Realizando a conexao com o MySQL
     
     $resultado_conexao = mysql_connect($hostname,$username,$password);
     
     //Verificando se a conexao foi realizada com sucesso
     
     if($resultado_conexao == 0)
     {
      //Erro na conex�o MySQL
      
      print('Erro!!! Conex�o n�o realizada!!!');
      print(mysql_error());
      
     }
     else
     {
      //Conex�o com MySQL realizada com sucesso
     
      //Selecionando banco de dados
     
      mysql_select_db($databasename,$resultado_conexao);
     }
?>
