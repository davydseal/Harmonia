
       <?php

     //Verificando se o usuario efetuou o login
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

          //Verificando se os campos obrigatórios foram preenchidos

          if(empty($c_nome))
          {

?>
               <script language = "JavaScript">
                     alert('O campo NOME deve ser preenchido !!!');
              document.location.href="usuario.php";
               </script>
<?php
          }
          else if(empty($c_sobrenome))
          {

?>
               <script language = "JavaScript">
                     alert('O campo SOBRENOME deve ser preenchido !!!');
                   document.location.href="usuario.php";
               </script>
<?php
          }
          else if(empty($c_endereco))
          {

?>
               <script language = "JavaScript">
                     alert('O campo ENDERECO deve ser preenchido !!!');
                 document.location.href="usuario.php";
               </script>
<?php
          }
          else if(empty($c_sexo))
          {
?>
               <script language = "JavaScript">
                    alert('O campo SEXO deve ser preenchido !!!');
              document.location.href="usuario.php";
               </script>
<?php
          }
          else if((empty($c_telefone1)) || (empty($c_telefone2)) || (empty($c_telefone3)))
          {
?>
               <script language = "JavaScript">
                     alert('O campo TELEFONE deve ser preenchido !!!');
                document.location.href="usuario.php";
               </script>
<?php
          }
          else if(empty($c_email))
          {
?>
               <script language = "JavaScript">
                     alert('O campo E-MAIL deve ser preenchido !!!');
                   document.location.href="usuario.php";
               </script>
<?php
          }
          else if((empty($c_cpf1)) || (empty($c_cpf2)) || (empty($c_cpf3)) || (empty($c_cpf4)) )
          {
?>
               <script language = "JavaScript">
                    alert('O campo CPF deve ser preenchido !!!');
                  document.location.href="usuario.php";
               </script>
<?php
          }
          else if(empty($c_nickname))
          {
?>
               <script language = "JavaScript">
                    alert('O campo NICKNAME deve ser preenchido !!!');
                 document.location.href="usuario.php";
               </script>
<?php
          }
          else if(empty($c_senha))
          {
?>
               <script language = "JavaScript">
                    alert('O campo SENHA deve ser preenchido !!!');
          document.location.href="usuario.php";;
               </script>
<?php
          }
          else if(empty($c_senha2))
          {
?>
               <script language = "JavaScript">
                    alert('O campo CONFIRMAÇĂO DE SENHA deve ser preenchido !!!');
              document.location.href="usuario.php";
               </script>
<?php
          }
          else
          {
               //Todos os campos foram preenchidos

               settype($c_senha,"string");
               settype($c_senha2,"string");

               //Verificando se a senha está batendo

               $r = strcmp($c_senha,$c_senha2);

               if($r == 0)
               {
                    //Verificando a idade

                    //Obtendo o ano atual

                    $ano = date("Y");
                    $idade = $ano - $c_ano;

                    //Verificando se ele já fez aniversário

                    //Obtendo o mes atual

                    $mes = date("m");

                    if($mes < $c_mes)
                    {
                         //Ele năo fez aniversário

                         $idade = $idade - 1;
                    }
                    else if($mes == $c_mes)
                    {
                         //Obtendo o dia atual

                         $dia = date("d");

                         if($dia < $c_dia)
                         {
                              //Ele ainda năo fez aniversário

                              $idade = $idade - 1;
                         }
                    }

                    if($idade < 12)
                    {
                         //Menor de Idade
?>
                         <script language="JavaScript">
                              alert("Este site só pode ser utilizado por Maiores de 12 anos.");
                       document.location.href="usuario.php";
                         </script>
<?php
                    }
                    else
                    {
                         //Maior de Idade

                         //Verificando se o męs é fevereiro

                         if($c_mes == 2)
                         {
                              //É fevereiro

                              //Verificando se o ano é bissexto ou bissesto

                              $resultado = $c_ano % 4;

                              if($resultado == 0)
                              {
                                   //É ano bissexto
                                   //Fevereiro tem até 29

                                   //Verificando se o dia é 30 ou 31

                                   if(($c_dia == 30)||($c_dia == 31))
                                   {
                                        //Dia Inválido
?>
                                        <script language="JavaScript">
                                             alert("Fevereiro só vai até 29.");
                                            document.location.href="usuario.php";
                                        </script>
<?php
                                   }
                              }
                              else
                              {
                                   //Năo é ano bissexto

                                   //Verificando se vai até 28

                                   if($c_dia > 28)
                                   {
                                         //Dia Inválido
?>
                                        <script language="JavaScript">
                                             alert("Fevereiro só vai até 28.");
                                            document.location.href="usuario.php";
                                        </script>
<?php
                                   }
                              }
                         }
                         else
                         {
                              //Năo é fevereiro

                              //Verificando se os dias estăo corretos

                              if(($c_mes == 4)||($c_mes == 6)||($c_mes == 9)||($c_mes == 11))
                              {
                                   //Verificando se o dia é 31

                                   if($c_dia == 31)
                                   {
                                        //Dia Inválido
?>
                                        <script language="JavaScript">
                                             alert("Năo existe dia 31 neste męs.");
                                          document.location.href="usuario.php";
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
                            alert("A confirmaçăo da Senha năo está batendo.");
                      document.location.href="usuario.php";
                    </script>
<?php
               }

               //Executando o arquivo de conexao

               require("ligar.php");

               //Concatenando o cpf

               $cpf = $c_cpf1.$c_cpf2.$c_cpf3.$c_cpf4;

               //Concatenando o telefone

               $telefone = $c_telefone1.$c_telefone2.$c_telefone3;

               //Concatenando o celular

               $celular = $c_celular1.$c_celular2.$c_celular3;

               //Verificando se o CPF já foi cadastrado

               $consulta = "SELECT * FROM $table_hardados_cadastrais WHERE cpf = '$cpf'";
               $resultado_consulta = mysql_query($consulta);
               $quantos_registros = mysql_num_rows($resultado_consulta);

               if($quantos_registros != 0)
               {
                //CPF já cadastrado
?>
                <script language = "JavaScript">
                        alert('CPF já cadastrado !!!');
                    document.location.href="usuario.php";
                </script>
<?php
               }
               else
               {
                       //Este CPF ainda năo foi cadastrado

                       //Verificando se o nickname está disponível

                       $consulta = "SELECT * FROM $table_harlogins WHERE nickname = '$c_nickname'";
                       $resultado_consulta = mysql_query($consulta);
                       $quantos_registros = mysql_num_rows($resultado_consulta);

                       if($quantos_registros != 0)
                       {
?>
                        <script language = "JavaScript">
                                alert('Nickname já cadastrado !!!');
                            document.location.href="usuario.php";
                        </script>
<?php
                       }
                       else
                       {
                           //Este nickname está disponível

                           //Cadastrando o nickname e a senha na tabela logins

                           //Criptografando a senha

                           $senha_c = md5($c_senha);

                           $inserir = "INSERT INTO $table_harlogins (nickname,senha,status,situacao,foto) VALUES ('$c_nickname','$senha_c',2,1,'avatar.jpg')";
                           $resultado = mysql_query($inserir);

                           //Cadastro realizado com sucesso
                           //Solicitando a chave primária do registro que já foi cadastrado

                           $consulta = "SELECT codigo FROM $table_harlogins WHERE nickname = '$c_nickname'";
                           $resultado = mysql_query($consulta);
                           $vetor = mysql_fetch_array($resultado);

                           //Cadastrando o jogador

                           $inserir = "INSERT INTO $table_hardados_cadastrais (nome,sobrenome,dn_dia,dn_mes,dn_ano,endereco,sexo,telefone,celular,email,cpf,cod_login) VALUES ('$c_nome','$c_sobrenome',$c_dia,$c_mes,$c_ano,'$c_endereco','$c_sexo','$telefone','$celular','$c_email',$cpf,$vetor[0])";
                           $resultado = mysql_query($inserir);

                           //Verificando se o jogador foi cadastrado

                           if($resultado == 0)
                           {
?>
                            <script language='JavaScript'>
                                    alert("Erro no cadastro. Entre em contato com o seu programador.");
                                  document.location.href="usuario.php";;
                            </script>
<?php
                           }
                           else
                           {
?>
                            <script language='JavaScript'>
                                    alert("Usuario Cadastrado com Sucesso!!");
                                    document.location.href="index.php";
                            </script>
<?php
                           }
                       }
               }
          }
          


}

