      <?php


   session_start();
                   		        ini_set('session.cookie_httponly', true);
                   		        ini_set('session.use_only_cookie', true);
                   		        session_cache_expire(10);


     $system_control = $_SESSION["system_control"];
     $status = $_SESSION["status"];
     $nickname = $_SESSION["nickname"];
     $nome = $_SESSION["nome"];
     $sobrenome = $_SESSION["sobrenome"];
     $codigo = $_SESSION["codigo"];

       ?>

              <?php

     //Verificando se o usuario efetuou o login

     if(($system_control == 1)&&($status == 1))
     {
          //Declarando as variaveis locais







          //Declarando as variaveis locais

          $c_nome = $_POST["c_nome"];
          $c_sobrenome = $_POST["c_sobrenome"];
          $c_dia = $_POST["c_dia"];
          $c_mes = $_POST["c_mes"];
          $c_ano = $_POST["c_ano"];
          $c_endereco = $_POST["c_endereco"];
          $c_sexo = $_POST["c_sexo"];
          $c_telefone1 = $_POST["c_telefone1"];
          $c_telefone2 = $_POST["c_telefone2"];
          $c_telefone3 = $_POST["c_telefone3"];
          $c_celular1 = $_POST["c_celular1"];
          $c_celular2 = $_POST["c_celular2"];
          $c_celular3 = $_POST["c_celular3"];
          $c_email = $_POST["c_email"];
          $c_cpf1 = $_POST["c_cpf1"];
          $c_cpf2 = $_POST["c_cpf2"];
          $c_cpf3 = $_POST["c_cpf3"];
          $c_cpf4 = $_POST["c_cpf4"];
          $c_nickname = $_POST["c_nickname"];
          $c_senha = $_POST["c_senha"];
          $c_senha2 = $_POST["c_senha2"];

          //Verificando se os campos obrigat�rios foram preenchidos

          if(empty($c_nome))
          {

?>
               <script language = "JavaScript">
                     alert('O campo NOME deve ser preenchido !!!');
                     document.location.href="novo_administrador.php";
               </script>
<?php
          }
          else if(empty($c_sobrenome))
          {

?>
               <script language = "JavaScript">
                     alert('O campo SOBRENOME deve ser preenchido !!!');
                     document.location.href="novo_administrador.php";
               </script>
<?php
          }
          else if(empty($c_endereco))
          {

?>
               <script language = "JavaScript">
                     alert('O campo ENDERECO deve ser preenchido !!!');
                     document.location.href="novo_administrador.php";
               </script>
<?php
          }
          else if(empty($c_sexo))
          {
?>
               <script language = "JavaScript">
                    alert('O campo SEXO deve ser preenchido !!!');
                    document.location.href="novo_administrador.php";
               </script>
<?php
          }
          else if((empty($c_telefone1)) || (empty($c_telefone2)) || (empty($c_telefone3)))
          {
?>
               <script language = "JavaScript">
                     alert('O campo TELEFONE deve ser preenchido !!!');
                     document.location.href="novo_administrador.php";
               </script>
<?php
          }
          else if(empty($c_email))
          {
?>
               <script language = "JavaScript">
                     alert('O campo E-MAIL deve ser preenchido !!!');
                     document.location.href="novo_administrador.php";
               </script>
<?php
          }
          else if((empty($c_cpf1)) || (empty($c_cpf2)) || (empty($c_cpf3)) || (empty($c_cpf4)) )
          {
?>
               <script language = "JavaScript">
                    alert('O campo CPF deve ser preenchido !!!');
                    document.location.href="novo_administrador.php";
               </script>
<?php
          }
          else if(empty($c_nickname))
          {
?>
               <script language = "JavaScript">
                    alert('O campo NICKNAME deve ser preenchido !!!');
                    document.location.href="novo_administrador.php";
               </script>
<?php
          }
          else if(empty($c_senha))
          {
?>
               <script language = "JavaScript">
                    alert('O campo SENHA deve ser preenchido !!!');
                    document.location.href="novo_administrador.php";
               </script>
<?php
          }
          else if(empty($c_senha2))
          {
?>
               <script language = "JavaScript">
                    alert('O campo CONFIRMA��O DE SENHA deve ser preenchido !!!');
                   document.location.href="novo_administrador.php";
               </script>
<?php
          }
          else
          {
               //Todos os campos foram preenchidos

               settype($c_senha,"string");
               settype($c_senha2,"string");

               //Verificando se a senha est� batendo

               $r = strcmp($c_senha,$c_senha2);

               if($r == 0)
               {
                    //Verificando a idade

                    //Obtendo o ano atual

                    $ano = date("Y");
                    $idade = $ano - $c_ano;

                    //Verificando se ele j� fez anivers�rio

                    //Obtendo o mes atual

                    $mes = date("m");

                    if($mes < $c_mes)
                    {
                         //Ele n�o fez anivers�rio

                         $idade = $idade - 1;
                    }
                    else if($mes == $c_mes)
                    {
                         //Obtendo o dia atual

                         $dia = date("d");

                         if($dia < $c_dia)
                         {
                              //Ele ainda n�o fez anivers�rio

                              $idade = $idade - 1;
                         }
                    }

                    if($idade < 12)
                    {
                         //Menor de Idade
?>
                         <script language="JavaScript">
                              alert("Este site s� pode ser utilizado por Maiores de 12 anos.");
                              history.go(-1);
                              document.location.href="novo_administrador.php";
                         </script>
<?php
                    }
                    else
                    {
                         //Maior de Idade

                         //Verificando se o m�s � fevereiro

                         if($c_mes == 2)
                         {
                              //� fevereiro

                              //Verificando se o ano � bissexto ou bissesto

                              $resultado = $c_ano % 4;

                              if($resultado == 0)
                              {
                                   //� ano bissexto
                                   //Fevereiro tem at� 29

                                   //Verificando se o dia � 30 ou 31

                                   if(($c_dia == 30)||($c_dia == 31))
                                   {
                                        //Dia Inv�lido
?>
                                        <script language="JavaScript">
                                             alert("Fevereiro s� vai at� 29.");
                                            document.location.href="novo_administrador.php";
                                        </script>
<?php
                                   }
                              }
                              else
                              {
                                   //N�o � ano bissexto

                                   //Verificando se vai at� 28

                                   if($c_dia > 28)
                                   {
                                         //Dia Inv�lido
?>
                                        <script language="JavaScript">
                                             alert("Fevereiro s� vai at� 28.");
                                             document.location.href="novo_administrador.php";
                                        </script>
<?php
                                   }
                              }
                         }
                         else
                         {
                              //N�o � fevereiro

                              //Verificando se os dias est�o corretos

                              if(($c_mes == 4)||($c_mes == 6)||($c_mes == 9)||($c_mes == 11))
                              {
                                   //Verificando se o dia � 31

                                   if($c_dia == 31)
                                   {
                                        //Dia Inv�lido
?>
                                        <script language="JavaScript">
                                             alert("N�o existe dia 31 neste m�s.");
                                             document.location.href="novo_administrador.php";
                                        </script>
<?php
                                   }
                              }
                         }
                    }

               }
               else
               {
?>
                    <script language="JavaScript">
                            alert("A confirma��o da Senha n�o est� batendo.");
                            document.location.href="novo_administrador.php";
                    </script>
<?php
               }

               //Executando o arquivo de conexao

               require("../../ligar.php");

               //Concatenando o cpf

               $cpf = $c_cpf1.$c_cpf2.$c_cpf3.$c_cpf4;

               //Concatenando o telefone

               $telefone = $c_telefone1.$c_telefone2.$c_telefone3;

               //Concatenando o celular

               $celular = $c_celular1.$c_celular2.$c_celular3;

               //Verificando se o CPF j� foi cadastrado

               $consulta = "SELECT * FROM $table_hardados WHERE cpf = '$cpf'";
               $resultado_consulta = mysql_query($consulta);
               $quantos_registros = mysql_num_rows($resultado_consulta);

               if($quantos_registros != 0)
               {
                //CPF j� cadastrado
?>
                <script language = "JavaScript">
                        alert('CPF j� cadastrado !!!');
                        document.location.href="novo_administrador.php";
                </script>
<?php
               }
               else
               {
                       //Este CPF ainda n�o foi cadastrado

                       //Verificando se o nickname est� dispon�vel

                       $consulta = "SELECT * FROM $table_harlogins WHERE nickname = '$c_nickname'";
                       $resultado_consulta = mysql_query($consulta);
                       $quantos_registros = mysql_num_rows($resultado_consulta);

                       if($quantos_registros != 0)
                       {
?>
                        <script language = "JavaScript">
                                alert('Nickname j� cadastrado !!!');
                                document.location.href="novo_administrador.php";
                        </script>
<?php
                       }
                       else
                       {
                           //Este nickname est� dispon�vel

                           //Cadastrando o nickname e a senha na tabela logins

                           //Criptografando a senha

                           $senha_c = md5($c_senha);

                           $inserir = "INSERT INTO $table_harlogins (nickname,senha,status,situacao,foto) VALUES ('$c_nickname','$senha_c',1,1,'avatar.jpg')";
                           $resultado = mysql_query($inserir);

                           //Cadastro realizado com sucesso
                           //Solicitando a chave prim�ria do registro que j� foi cadastrado

                           $consulta = "SELECT codigo FROM $table_harlogins WHERE nickname = '$c_nickname'";
                           $resultado = mysql_query($consulta);
                           $vetor = mysql_fetch_array($resultado);

                           //Cadastrando o jogador

                           $inserir = "INSERT INTO $table_hardados (nome,sobrenome,dn_dia,dn_mes,dn_ano,endereco,sexo,telefone,celular,email,cpf,cod_login) VALUES ('$c_nome','$c_sobrenome',$c_dia,$c_mes,$c_ano,'$c_endereco','$c_sexo','$telefone','$celular','$c_email',$cpf,$vetor[0])";
                           $resultado = mysql_query($inserir);

                           //Verificando se o jogador foi cadastrado

                           if($resultado == 0)
                           {
?>
                            <script language='JavaScript'>
                                    alert("Erro no cadastro. Entre em contato com o seu programador.");
                                    document.location.href="novo_administrador.php";
                            </script>
<?php
                           }
                           else
                           {
?>
                            <script language='JavaScript'>
                                    alert("Adm Cadastrado com Sucesso!!");
                                    document.location.href="novo_administrador.php";
                            </script>
<?php
                           }
                       }
               }
          }
          }
          
               else
     {
?>
      <script language='javascript'>
              alert('Acesso Inv�lido. Voc� deve realizar o login.');
              document.location.href="../../index.php";
      </script>
<?php
     }
?>

