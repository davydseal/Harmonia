<?php
     //Criando as variaveis locais


     $c_nickname = $_POST["c_nickname"];
     $c_senha = $_POST["c_senha"];

     //Verificando qual foi o botao clicado


               //Botao Entrar foi clicado

               //Verificando se os campos est�o preenchidos

               if( (empty($c_nickname)) && (empty($c_senha)) )
               {
                   //Todos os dados devem ser preenchidos
?>
                   <script language='JavaScript'>
alert("Preencha o Campo Nickname e Senha!!");
document.location.href="http://localhost/site/";
                   </script>
<?php
               }
               else if(empty($c_nickname))
               {

                    //Campo nickname deve ser preenchido
?>
                    <script language='JavaScript'>
                           alert("Preencha o campo Nickname!!");
                            document.location.href="http://localhost/site/";
                    </script>
<?php
               }
               else if(empty($c_senha))
               {

                    //Campo senha deve ser preenchido
?>
                    <script language='JavaScript'>
                            alert("Preencha o campo Senha");
                            document.location.href="http://localhost/site/";
                    </script>
<?php
               }
               else
               {
                   //Importando o arquivo de conexao

                   require("../ligar.php");

                   $consulta = "SELECT * FROM $table_harlogins WHERE nickname = '$c_nickname'";
                   $resultado_consulta = mysql_query($consulta);
                   $quantos_registros = mysql_num_rows($resultado_consulta);

                   //Verificando se foi encontrado algum registro

                   if($quantos_registros == 0)
                   {
                    //Nickname N�o Encontrado
?>
                     <script language='javascript'>
                             alert("Nickname Inexistente!!!");
                             history.go(-1);
                     </script>
<?php
                   }
                   else
                   {
                    //Nickname Encontrado

                    //Criptografando a senha digitada

                       $senha_c = md5($c_senha);

                       $consulta2 = "SELECT * FROM $table_harlogins WHERE nickname = '$c_nickname' AND senha = '$senha_c'";
                       $resultado_consulta2 = mysql_query($consulta2);
                       $quantos_registros2 = mysql_num_rows($resultado_consulta2);
                       
                       



                       //Verificando a quantidade de registros que foi retornado

                       if($quantos_registros2 == 0)
                       {
                        //Senha Inv�lida
?>
                        <script language='javascript'>
                                alert("Senha Inv�lida!!!");
                                history.go(-1);
                        </script>
<?php
                       }
                        else
                       {
                       $consulta5 = "SELECT * FROM $table_harlogins where nickname='$c_nickname'";
                       $resultado_consulta5 = mysql_query($consulta5);
                       $quantos_registros5 = mysql_num_rows($resultado_consulta5);
                       $vetor5 = mysql_fetch_array($resultado_consulta5);
                       $c_codigo = ($vetor5['codigo']);
                       $c_status = ($vetor5['status']);
                       



                        
                        if($c_status == 1)
                        {

                       
                       $consulta3 = "SELECT * FROM $table_hardados where cod_login='$c_codigo'";
                       $resultado_consulta3 = mysql_query($consulta3);
                       $quantos_registros3 = mysql_num_rows($resultado_consulta3);
                       
                       
                        $vetor = mysql_fetch_array($resultado_consulta2);
                        $vetor2 = mysql_fetch_array($resultado_consulta3);


                            if($vetor['situacao'] == 2)
                            {
                                 //Usu�rio Bloqueado
?>
                                 <script language='javascript'>
                                      alert("Voc� est� Bloqueado no Momento. Entre em contato com o Administrador.");
                                      history.go(-1);
                                 </script>
<?php
                            }
                            else if($vetor2['cod_login'] != $vetor['codigo'])
                                            {
                                 //Usu�rio Bloqueado
?>
                               <script language="javascript">
                               alert("Erro no Sistema Consulte seu Administrador");
                               history.go(-1);


                               </script>
<?php
                            }
                            else
                            {
                                 //O usu�rio est� OK e logado

                                //Inicializando uma sessao

                   		        session_start();
                   		        ini_set('session.cookie_httponly', true);
                   		        ini_set('session.use_only_cookie', true);
                   		        session_cache_expire(10);
                   		        
                   		        
    		                       $atualizar = "UPDATE $table_harlogins SET login = 1 WHERE codigo = '$c_codigo'";
                                   $resultado_atualizar = mysql_query($atualizar);

                                   if($resultado_atualizar == 0)
                                   {
                                        //Erro na atualiza��o
?>
                                        <script language="JavaScript">
                                             alert("Houve Erro No Login");
                                             history.go(-1);
                                        </script>
<?php



                         }



                   		        //Criando uma variavel de controle do sistema

                   		        //Registrando esta variavel no sistema

                                $_SESSION["system_control"] = 1;

                                //Registrando a variavel de status no sistema

                                $status = $vetor['status'];

                                $_SESSION["status"] = $status;


                                $nickname = $vetor['nickname'];


                                $_SESSION["nickname"] = $nickname;
                                
                                
                                
                                   $codigo = $vetor['codigo'];


                                $_SESSION["codigo"] = $codigo;
                                
                                

                                 $nome = $vetor2['nome'];


                                $_SESSION["nome"] = $nome;



                                $sobrenome = $vetor2['sobrenome'];

                                $_SESSION["sobrenome"] = $sobrenome;
                                
                                 if($status == 1)
                                {

                                   ?>
                                   <script language='JavaScript'>
                                          document.location.href="carregar_administrador.php";
                                     </script>
                                     <?php

                                     }
                       
                       
                       
                                 }
                       
                       
                       
                       


                       }
                       
                                        else if($c_status == 2)
                        {


                       $consulta3 = "SELECT * FROM $table_hardados where cod_login='$c_codigo'";
                       $resultado_consulta3 = mysql_query($consulta3);
                       $quantos_registros3 = mysql_num_rows($resultado_consulta3);


                        $vetor = mysql_fetch_array($resultado_consulta2);
                        $vetor2 = mysql_fetch_array($resultado_consulta3);


                            if($vetor['situacao'] == 2)
                            {
                                 //Usu�rio Bloqueado
?>
                                 <script language='javascript'>
                                      alert("Voc� est� Bloqueado no Momento. Entre em contato com o Administrador.");
                                      history.go(-1);
                                 </script>
<?php
                            }
                            else if($vetor2['cod_login'] != $vetor['codigo'])
                                            {
                                 //Usu�rio Bloqueado
?>
                               <script language="javascript">
                               alert("Erro no Sistema Consulte seu Administrador");
                               history.go(-1);


                               </script>
<?php
                            }
                            else
                            {
                                 //O usu�rio est� OK e logado

                                //Inicializando uma sessao

                   		        session_start();
                   		        
                   		                       $atualizar2 = "UPDATE $table_harlogins SET login=1 WHERE codigo=$vetor[0]";
                                   $resultado_atualizar2 = mysql_query($atualizar2);

                                   if($resultado_atualizar2 == 0)
                                   {
                                        //Erro na atualiza��o
?>
                                        <script language="JavaScript">
                                             alert("Houve Erro No Login contate o administador");
                                             document.location.href="../index.php";
                                        </script>
<?php



                         }

                   		        //Criando uma variavel de controle do sistema

                   		        //Registrando esta variavel no sistema

                                $_SESSION["system_control"] = 1;

                                //Registrando a variavel de status no sistema

                                $status = $vetor['status'];

                                $_SESSION["status"] = $status;


                                $nickname = $vetor['nickname'];


                                $_SESSION["nickname"] = $nickname;

                                 $nome = $vetor2['nome'];


                                $_SESSION["nome"] = $nome;



                                $sobrenome = $vetor2['sobrenome'];

                                $_SESSION["sobrenome"] = $sobrenome;
                                
                                    $cod_login = $vetor2['cod_login'];

                                $_SESSION["cod_login"] = $cod_login;

                                 if($status == 2)
                                {

                                   ?>
                                   <script language='JavaScript'>
                                          document.location.href="carregar_usuario.php";
                                     </script>
                                     <?php

                                     }



                                 }






                       }
                       
                       else if($c_status == '3')
                       {
                       
                       $consulta3 = "SELECT * FROM $table_empresas where cod_empresa='$c_codigo'";
                       $resultado_consulta3 = mysql_query($consulta3);
                       $quantos_registros3 = mysql_num_rows($resultado_consulta3);
                       //Verificando a quantidade de registros que foi retornado
                       
                             $vetor = mysql_fetch_array($resultado_consulta2);
                        $vetor2 = mysql_fetch_array($resultado_consulta3);


                            if($vetor['situacao'] == 2)
                            {
                                 //Usu�rio Bloqueado
?>
                                 <script language='javascript'>
                                      alert("Voc� est� Bloqueado no Momento. Entre em contato com o Administrador.");
                                      history.go(-1);
                                 </script>
<?php
                            }
                            else if($vetor2['cod_empresa'] != $vetor['codigo'])
                                            {
                                 //Usu�rio Bloqueado
?>
                               <script language="javascript">
                               alert("Erro No Sistema Consulte seu Administrador");
                               history.go(-1);


                               </script>
<?php
                            }

                            else
                            {
                                 //O usu�rio est� OK e logado

                                //Inicializando uma sessao

                   		        session_start();
                   		        
                   		                       $atualizar3 = "UPDATE $table_harlogins SET login = 1 WHERE codigo = '$vetor[0]'";
                                   $resultado_atualizar3 = mysql_query($atualizar3);

                                   if($resultado_atualizar3 == 0)
                                   {
                                        //Erro na atualiza��o
?>
                                        <script language="JavaScript">
                                             alert("Houve Erro No Login");
                                             history.go(-1);
                                        </script>
<?php



                         }

                   		        //Criando uma variavel de controle do sistema

                   		        //Registrando esta variavel no sistema

                                $_SESSION["system_control"] = 1;

                                //Registrando a variavel de status no sistema

                                $status = $vetor['status'];

                                $_SESSION["status"] = $status;


                                $nickname = $vetor['nickname'];
                                $_SESSION["nickname"] = $nickname;
                                
                                 $codigo = $vetor['codigo'];
                                $_SESSION["codigo"] = $codigo;
                                

                                 $empresa = $vetor2['empresa'];
                                $_SESSION["empresa"] = $empresa;



                                $servico = $vetor2['servico'];
                                $_SESSION["servico"] = $servico;
                                
                                 if($status == 3)
                                {

                                   ?>
                                   <script language='JavaScript'>
                                          document.location.href="carregar_empresa.php";
                                     </script>
                                     <?php

                                     }



                                 }
                                               }

                            }
                       }
                   }





?>
