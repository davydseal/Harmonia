<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML>
<HEAD>
<TITLE>Administration</TITLE>

<?php

     session_start();

      $system_control = $_SESSION["system_control"];
     $status = $_SESSION["status"];
     $nickname = $_SESSION["nickname"];
     $nome = $_SESSION["nome"];
     $sobrenome = $_SESSION["sobrenome"];
     $codigo = $_SESSION["codigo"];


       ?>
       
<script language="JavaScript">

                                 function telefone1()
                                 {
                                      //Controlando o DDD

                                      var retorno;
                                      var quant;

                                      retorno = isNaN(f.c_telefone1.value);

                                      if(retorno == 1)
                                      {
                                           alert("Dígito Inválido.");
                                           f.c_telefone1.value = "";
                                      }
                                      else
                                      {

                                           //Verificando se já possui a quantidade de dígitos

                                           quant = f.c_telefone1.value.length;

                                           if(quant == 2)
                                           {
                                                //Fornecendo o foco para o telefone 2

                                                f.c_telefone2.focus()
                                           }
                                      }
                                 }

                                 function telefone2()
                                 {
                                      var retorno;
                                      var quant;

                                      retorno = isNaN(f.c_telefone2.value);

                                      if(retorno == 1)
                                      {
                                           alert("Dígito Inválido.");
                                           f.c_telefone2.value = "";
                                      }
                                      else
                                      {

                                           //Verificando se já possui a quantidade de dígitos

                                           quant = f.c_telefone2.value.length;

                                           if(quant == 4)
                                           {
                                                f.c_telefone3.focus()
                                           }
                                      }
                                 }

                                 function telefone3()
                                 {
                                      var retorno;
                                      var quant;

                                      retorno = isNaN(f.c_telefone3.value);

                                      if(retorno == 1)
                                      {
                                           alert("Dígito Inválido.");
                                           f.c_telefone3.value = "";
                                      }
                                      else
                                      {

                                           //Verificando se já possui a quantidade de dígitos

                                           quant = f.c_telefone3.value.length;

                                           if(quant == 4)
                                           {
                                                f.c_celular1.focus();
                                           }
                                      }
                                 }

                                 function celular1()
                                 {
                                      var retorno;
                                      var quant;

                                      retorno = isNaN(f.c_celular1.value);

                                      if(retorno == 1)
                                      {
                                           alert("Dígito Inválido.");
                                           f.c_celular1.value = "";
                                      }
                                      else
                                      {

                                           //Verificando se já possui a quantidade de dígitos

                                           quant = f.c_celular1.value.length;

                                           if(quant == 2)
                                           {
                                                f.c_celular2.focus()
                                           }
                                      }
                                 }

                                 function celular2()
                                 {
                                      var retorno;
                                      var quant;

                                      retorno = isNaN(f.c_celular2.value);

                                      if(retorno == 1)
                                      {
                                           alert("Dígito Inválido.");
                                           f.c_celular2.value = "";
                                      }
                                      else
                                      {

                                           //Verificando se já possui a quantidade de dígitos

                                           quant = f.c_celular2.value.length;

                                           if(quant == 4)
                                           {
                                                f.c_celular3.focus()
                                           }
                                      }
                                 }

                                 function celular3()
                                 {
                                      var retorno;
                                      var quant;

                                      retorno = isNaN(f.c_celular3.value);

                                      if(retorno == 1)
                                      {
                                           alert("Dígito Inválido.");
                                           f.c_celular3.value = "";
                                      }
                                      else
                                      {

                                           //Verificando se já possui a quantidade de dígitos

                                           quant = f.c_celular3.value.length;

                                           if(quant == 4)
                                           {
                                                f.c_email.focus()
                                           }
                                      }
                                 }

                                 function cpf1()
                                 {
                                      var retorno;
                                      var quant;

                                      retorno = isNaN(f.c_cpf1.value);

                                      if(retorno == 1)
                                      {
                                           alert("Dígito Inválido.");
                                           f.c_cpf1.value = "";
                                      }
                                      else
                                      {

                                           //Verificando se já possui a quantidade de dígitos

                                           quant = f.c_cpf1.value.length;

                                           if(quant == 3)
                                           {
                                                f.c_cpf2.focus()
                                           }
                                      }
                                 }

                                 function cpf2()
                                 {
                                      var retorno;
                                      var quant;

                                      retorno = isNaN(f.c_cpf2.value);

                                      if(retorno == 1)
                                      {
                                           alert("Dígito Inválido.");
                                           f.c_cpf2.value = "";
                                      }
                                      else
                                      {

                                           //Verificando se já possui a quantidade de dígitos

                                           quant = f.c_cpf2.value.length;

                                           if(quant == 3)
                                           {
                                                f.c_cpf3.focus()
                                           }
                                      }
                                 }

                                 function cpf3()
                                 {
                                      var retorno;
                                      var quant;

                                      retorno = isNaN(f.c_cpf3.value);

                                      if(retorno == 1)
                                      {
                                           alert("Dígito Inválido.");
                                           f.c_cpf3.value = "";
                                      }
                                      else
                                      {

                                           //Verificando se já possui a quantidade de dígitos

                                           quant = f.c_cpf3.value.length;

                                           if(quant == 3)
                                           {
                                                f.c_cpf4.focus()
                                           }
                                      }
                                 }

                                 function cpf4()
                                 {
                                      var retorno;
                                      var quant;

                                      retorno = isNaN(f.c_cpf4.value);

                                      if(retorno == 1)
                                      {
                                           alert("Dígito Inválido.");
                                           f.c_cpf4.value = "";
                                      }
                                      else
                                      {

                                           //Verificando se já possui a quantidade de dígitos

                                           quant = f.c_cpf4.value.length;

                                           if(quant == 2)
                                           {
                                                f.c_nickname.focus()
                                           }
                                      }
                                 }

                                 function validacao_cpf()
                                 {
                                      var cpf;

                                      //Concatenando o cpf

                                      cpf = f.c_cpf1.value+f.c_cpf2.value+f.c_cpf3.value+f.c_cpf4.value;

                                      //Verificando se o usuário está tirando com a minha cara

                                      if((cpf == '00000000000')||(cpf == '11111111111')||(cpf == '2222222222')||(cpf == '33333333333')||(cpf == '444444444444')||(cpf == '55555555555')||(cpf == '66666666666')||(cpf == '77777777777')||(cpf == '88888888888')||(cpf == '99999999999')||(cpf == '00000000000'))
                                      {
                                           alert("CPF Inválido.");
                                           f.c_cpf1.value = "";
                                           f.c_cpf2.value = "";
                                           f.c_cpf3.value = "";
                                           f.c_cpf4.value = "";
                                           f.c_cpf1.focus();
                                      }
                                      else
                                      {
                                           //Declarando as variaveis locais

                                           var i;
                                           var dv_10;

                                           //Pegando os dois ultimos numeros do cpf

                                           var dv = cpf.substr(9,2);

                                           //Criando um vetor para acomodar cada numero do cpf sem os dois ultimos numeros

                                           var vetor_cpf =  new Array(10);

                                           for(i=0;i<9;i++)
                                           {
                                                vetor_cpf[i] = cpf.substr(i,1);
                                           }

                                           //Primeira Etapa - Calculo do décimo dv - dv_10

                                           var posicao = 10;
                                           var soma = 0;
                                           var resto;

                                           for(i=0;i<9;i++)
                                           {
                                                soma = soma + vetor_cpf[i] * posicao;
                                                posicao = posicao - 1;
                                           }

                                           //Pegando o resto da divisão da soma por 11

                                           resto = soma % 11;

                                           //Verificando se o resto da divisão é menor que 2

                                           if(resto < 2)
                                           {
                                                //Adotando o resto como zero

                                                dv_10 = 0;
                                           }
                                           else
                                           {
                                                //Realizando o calculo do dv_10

                                                dv_10 = 11 - resto;
                                           }

                                           //Segunda Etapa - Calculo do décimo primeiro dv - dv_11

                                           posicao = 11;
                                           soma = 0;

                                           for(i=0;i<9;i++)
                                           {
                                                soma = soma + vetor_cpf[i] * posicao;
                                                posicao = posicao - 1;

                                                if(i == 8)
                                                {
                                                     soma = soma + dv_10 * posicao;
                                                }
                                           }

                                           //Pegando o resto da divisao da soma por 11

                                           resto = soma % 11;

                                           //Verificando se o resto da divisão é menor que 2

                                           if(resto < 2)
                                           {
                                                //Adotando o resto como zero

                                                dv_11 = 0;
                                           }
                                           else
                                           {
                                                //Realizando o calculo do dv_11

                                                dv_11 = 11 - resto;
                                           }

                                           //Concatenando os dois dv gerados

                                           var dv_final = dv_10 * 10 + dv_11;

                                           //Verificando se o dv_final é igual ao dv_inicial

                                           if(dv_final != dv)
                                           {
                                                alert("CPF Inválido.");
                                                f.c_cpf1.focus();
                                           }
                                      }
                                 }
            </script>

<LINK rel=stylesheet type=text/css href="../index_arquivos/style_index.css">
  <script type="text/javascript" src="../index_arquivos/mootools.js"></script>
  <script type="text/javascript" src="../index_arquivos/modal.js"></script>

<link rel="stylesheet" href="../index_arquivos/modal.css" type="text/css">
      <script type="text/javascript">
		window.addEvent('domready', function(){ new Accordion($$('.panel h3.jpane-toggler'), $$('.panel div.jpane-slider'), {onActive: function(toggler, i) { toggler.addClass('jpane-toggler-down'); toggler.removeClass('jpane-toggler'); },onBackground: function(toggler, i) { toggler.addClass('jpane-toggler'); toggler.removeClass('jpane-toggler-down'); },duration: 300,opacity: false,alwaysHide: true}); });
window.addEvent("domready", function() {
	SqueezeBox.initialize({});
	$$("a.modal-button").each(function(el) {
		el.addEvent("click", function(e) {
			new Event(e).stop();
			SqueezeBox.fromElement(el);
		});
	});
});
			function isBrowserIE() {
				return navigator.appName=="Microsoft Internet Explorer";
			}

			function jInsertEditorText( text, editor ) {
				if (isBrowserIE()) {
					if (window.parent.tinyMCE) {
						window.parent.tinyMCE.selectedInstance.selection.moveToBookmark(window.parent.global_ie_bookmark);
					}
				}
				tinyMCE.execInstanceCommand(editor, 'mceInsertContent',false,text);
			}

			var global_ie_bookmark = false;

			function IeCursorFix() {
				if (isBrowserIE()) {
					tinyMCE.execCommand('mceInsertContent', false, '');
					global_ie_bookmark = tinyMCE.activeEditor.selection.getBookmark(false);
				}
				return true;
			}
window.addEvent("domready", function() {
	SqueezeBox.initialize({});
	$$("a.modal").each(function(el) {
		el.addEvent("click", function(e) {
			new Event(e).stop();
			SqueezeBox.fromElement(el);
		});
	});
});
			function insertReadmore(editor) {
				var content = tinyMCE.get('text').getContent();
				if (content.match(/<hr\s+id=("|')system-readmore("|')\s*\/*>/i)) {
					alert('There is already a Read more... link that has been inserted. Only one such link is permitted. Use {pagebreak} to split the page up further.');
					return false;
				} else {
					jInsertEditorText('<hr id="system-readmore" />', editor);
				}
			}


//Ajax function to change dropdown lists
var changeDynaList = function(cssid, dofunc, selected){
	var changeDiv = document.getElementById(cssid);
	var gotoUrl = 'http://ap3.adminpraise.com/administrator/modules/mod_quickitem_pro/include.php';
	var addtoUrl = 'selected='+selected+'&dofunc='+dofunc;
	if(typeof(Request)!='undefined'){//for mootools 1.2 and up
		var myRequest = new Request({
			method: 'post',
			url: gotoUrl,
			onRequest: function() { changeDiv.innerHTML='<div class="pleasewait"> Loading...</div>'; },
			onSuccess: function(response) { changeDiv.innerHTML=response; },
			onFailure: function() { changeDiv.innerHTML='<div class="error">Error!</div>'; }
		});
		myRequest.send(addtoUrl);
	}
	else if(typeof(XHR)!='undefined'){//for mootools 1.1
		var myXHR = new XHR({
			method: 'post',
			onRequest: function() { changeDiv.innerHTML='<div class="pleasewait"> Loading...</div>';},
			onSuccess: function(response) { changeDiv.innerHTML=response; },
			onFailure: function() { changeDiv.innerHTML='<div class="error">Error!</div>'; }
		});
		myXHR.send(gotoUrl, addtoUrl);
	}
}
//Ajax  function to submit form data
var submitForm = function(formdata){
	var changeDiv = $('quickadd_message');
	var gotoUrl = 'http://ap3.adminpraise.com/administrator/index.php';
	var addtoUrl = formdata;
	if(typeof(Request)!='undefined'){//for mootools 1.2 and up
		var myRequest = new Request({
			method: 'post',
			url: gotoUrl,
			onRequest: function() { changeDiv.innerHTML='<div class="pleasewait"> Loading...</div>'; },
			onSuccess: function(response) {
				changeDiv.innerHTML='<div class="info">Sucessfully Saved!</div>';
				clearForm();
			},
			onFailure: function() { changeDiv.innerHTML='<div class="error">Failed to Save!</div>'; }
		});
		myRequest.send(addtoUrl);
	}
	else if(typeof(XHR)!='undefined'){//for mootools 1.1
		var myXHR = new XHR({
			method: 'post',
			onRequest: function() { changeDiv.innerHTML='<div class="pleasewait">Loading...</div>'; },
			onSuccess: function(response) {
				changeDiv.innerHTML='<div class="info">Sucessfully Saved!</div>';
				clearForm();
			},
			onFailure: function() { changeDiv.innerHTML='<div class="error">Failed to Save!</div>'; }
		});
		myXHR.send(gotoUrl, addtoUrl);
	}
}

function set_session_bar()
{
   var d = new Date();
   var t = d.getTime();
   var t = Math.round(t / 1000);
   var sess_time = 1313441488;
   var lifetime  = 900;
   var remaining = (sess_time + lifetime) - t;
   var new_w = Math.round((remaining/lifetime)*100);
   var min_remaining = Math.round(remaining/60);

   if(new_w < 0) {
      new_w = 0;
   }

   if(new_w > 50) {
      document.getElementById('sess_bar').style.backgroundColor = '#006600';
   }
   if(new_w < 50 && new_w > 20) {
      document.getElementById('sess_bar').style.backgroundColor = '#CC6600';
   }
   if(new_w < 20 && new_w > 0) {
      document.getElementById('sess_bar').style.backgroundColor = '#660000';
   }
   document.getElementById('sess_bar').title = 'Your session expires in '+min_remaining+' minutes';
   document.getElementById('sess_bar').style.width = new_w+'%';
}
setInterval('set_session_bar()', 1000);

activitylogPro = {baseRoute: "http://ap3.adminpraise.com/administrator/" }
  </script>



	<script type="text/javascript">
				tinyMCE.init({
					// General
					directionality: "ltr",
					editor_selector : "mce_editable",
					language : "en",
					mode : "specific_textareas",
					skin : "default",
					theme : "simple",
					// Cleanup/Output
					inline_styles : true,
					gecko_spellcheck : true,
					cleanup : true,
					cleanup_on_startup : false,
					entity_encoding : "raw",
					force_br_newlines : false, force_p_newlines : true, forced_root_block : 'p',
					// URL
					relative_urls : true,
					remove_script_host : false,
					// Layout
					content_css : "http://ap3.adminpraise.com/templates/system/css/editor.css",
					document_base_url : "http://ap3.adminpraise.com/",
				});
				</script>

</HEAD>
<BODY class="ap3  theme4 com_cpanel ap-task-  ap-view- ap-section- ap-type- ie8">
<DIV id=ap-container>
<DIV id=ap-userstats>
<A id=ap-logo href="#"><IMG src="index_arquivos/logo-theme4.gif"></A>
<DIV class=ap-spotlight>
<FORM name="campo" method="post" action="#">
<input type="text" name="c_procurar" size="20"><input type="submit" value="Pesquisar">
</FORM>
</DIV>
<A id=ap-sitename href="../admin.php">Harmonia</A>
<DIV class=clr></DIV></DIV>
<DIV class=clr></DIV>
<DIV class=clear></DIV>
<DIV class=clear></DIV>
<DIV id=ap-mainmenu>
<UL>

<LI class=parent>
<A class=Articles href="#"><SPAN class=component-image></SPAN><SPAN class=parent-name>Cadastrar</SPAN><SPAN class=subarrow></SPAN></A>
<UL class=submenu>

</LI>
</LI>

<LI><A class=Frontpage href="novo_administrador.php"><SPAN class=component-image></SPAN>Administradores</A></LI>
<LI><A class=ArchivedArticles href="novo_usuario.php"><SPAN class=component-image></SPAN>Usuarios</A></LI>
<LI><A class=ArchivedArticles href="novo_fornecedor.php"><SPAN class=component-image></SPAN>Fornecedores</A></LI>
<LI><A class=ArchivedArticles href="novo_produto.php"><SPAN class=component-image></SPAN>Produtos</A></LI>
<LI><A class=ArticleTrash href="#"><SPAN class=component-image></SPAN>News</A>
<ul>
<li><a href="newsadm.php">News Administrador</a></li>
<li><a href="news_usuario.php">News Usuarios</a></li>
</ul></LI>


</UL>
</LI>


<LI class=parent>
<A class=Articles href="#"><SPAN class=component-image></SPAN><SPAN class=parent-name>Consultar</SPAN><SPAN class=subarrow></SPAN></A>
<UL class=submenu>

</LI>
</LI>

<LI><A class=Frontpage href="../consultar/novo_administrador.php"><SPAN class=component-image></SPAN>Administradores</A></LI>
<LI><A class=ArchivedArticles href="../consultar/novo_usuario.php"><SPAN class=component-image></SPAN>Usuarios</A></LI>
<LI><A class=ArchivedArticles href="../consultar/novo_fornecedor.php"><SPAN class=component-image></SPAN>Fornecedores</A></LI>
<LI><A class=ArchivedArticles href="../consultar/harmoniaprodutos.php"><SPAN class=component-image></SPAN>Produtos</A></LI>
<LI><A class=ArticleTrash href="#"><SPAN class=component-image></SPAN>News</A>
<ul>
<li><a href="../consultar/newsadm.php">News Administrador</a></li>
<li><a href="../consultar/news_usuario.php">News Usuarios</a></li>
</ul></LI>
</UL>
</LI>


<LI class=parent>
<A class=Articles href="#"><SPAN class=component-image></SPAN><SPAN class=parent-name>Alterar</SPAN><SPAN class=subarrow></SPAN></A>
<UL class=submenu>

</LI>
</LI>

<LI><A class=Frontpage href="../atualizar/novo_administrador.php"><SPAN class=component-image></SPAN>Administradores</A></LI>
<LI><A class=ArchivedArticles href="../atualizar/novo_usuario.php"><SPAN class=component-image></SPAN>Usuarios</A></LI>
<LI><A class=ArchivedArticles href="../atualizar/novo_fornecedor.php"><SPAN class=component-image></SPAN>Fornecedores</A></LI>
<LI><A class=ArchivedArticles href="../atualizar/produtos_harmonia.php"><SPAN class=component-image></SPAN>Produtos</A></LI>
<LI><A class=ArticleTrash href="#"><SPAN class=component-image></SPAN>News</A>
<ul>
<li><a href="../atualizar/newsadm.php">News Administrador</a></li>
<li><a href="../atualizar/news_usuario.php">News Usuarios</a></li>
</ul></LI>
<LI><A class=ArticleTrash href="../bloquear/bloquear.php"><SPAN class=component-image></SPAN>Bloquear</A></LI>


</UL>
</LI>




<LI class=parent>
<A class=Articles href="#"><SPAN class=component-image></SPAN><SPAN class=parent-name>Excluir</SPAN><SPAN class=subarrow></SPAN></A>
<UL class=submenu>

</LI>
</LI>
<LI><A class=ArchivedArticles href="../excluir/novo_administrador.php"><SPAN class=component-image></SPAN>Administrador</A></LI>
<LI><A class=ArchivedArticles href="../excluir/novo_usuario.php"><SPAN class=component-image></SPAN>Usuarios</A></LI>
<LI><A class=ArchivedArticles href="../excluir/novo_fornecedor.php"><SPAN class=component-image></SPAN>Fornecedores</A></LI>
<LI><A class=ArchivedArticles href="../excluir/novo_produto.php"><SPAN class=component-image></SPAN>Produtos</A></LI>
<LI><A class=ArticleTrash href="#"><SPAN class=component-image></SPAN>News</A>
<ul>
<li><a href="../excluir/newsadm.php">News Administrador</a></li>
<li><a href="../excluir/news_usuario.php">News Usuarios</a></li>
</ul></LI>





</UL>
</LI>





<LI class=parent>
<A class=Articles href="#"><SPAN class=component-image></SPAN><SPAN class=parent-name>Meus dados</SPAN><SPAN class=subarrow></SPAN></A>
<UL class=submenu>

</LI>
</LI>

<LI><A class=Frontpage href="../dados/dados_pessoais.php"><SPAN class=component-image></SPAN>Dados Pessoais</A></LI>
<LI><A class=ArchivedArticles href="../dados/dados_sistema.php"><SPAN class=component-image></SPAN>Dados do Sistema</A></LI>


</UL>
</LI>









</LI>



<LI class=parent>
<A class=Articles href="#"><SPAN class=component-image></SPAN><SPAN class=parent-name>Configurar</SPAN><SPAN class=subarrow></SPAN></A>
<UL class=submenu>

</LI>
</LI>
<li><a href="../configurar/bdi.php">Custo BDI</a></li>
<li><a href="../configurar/imposto.php">Imposto simples</a></li>
<li><a href="../configurar/magem.php">Magem de lucro</a></li>
</ul></LI>






</UL>
</LI>


<DIV class=clear></DIV></DIV>
<DIV id=ap-middle>
<DIV id=ap-menu>
<UL class=ap-avatar>

<?php
require("../../ligar.php");
$consulta = "SELECT * FROM $table_harlogins WHERE codigo=$codigo";
$resultado = mysql_query($consulta);
$vetor_foto = mysql_fetch_array($resultado);
?>
<LI><A href="mudarfoto.php" ><IMG title="<?php print($vetor_foto['nickname']); ?>" src="../../img/<?php print($vetor_foto['foto']); ?>"></A><BR>
<A href="../../login/sair/finalizar.php">Sair</A></LI></UL>

<DIV class=panel>

</DIV>

<DIV class=clr></DIV></DIV>
<DIV id=ap-main class="ap-static-wrapper ap-main-marginleft">
<DIV class=ap-main-inner>
<DIV id=ap-static>
<DIV class=clear></DIV></DIV>
<DIV id=ap-mainbody class=ap-tall>
<DIV id=ap-content>
<DIV id=ap-content-inner>
<DIV id=cpanel-inner>
<DIV id=module-3 class="module half mod_popular" draggable="true">
<DIV class=module-2>
<DIV class=module-3>
<DIV class=module-4>

<H3 class=module-title>Administradores Cadastrados</H3>
<DIV class="module-content flexcroll">
<TABLE class=adminlist>

<TBODY>
<TR>
    <TD class=title><STRONG>Login</STRONG> </TD>
    <TD class=title><STRONG>Codigo</STRONG> </TD>
    <TD class=title><STRONG>Foto</STRONG> </TD>
</TR>

<?php
             require("../../ligar.php");
            $consulta3 = "SELECT * FROM $table_harlogins WHERE status=1 order by codigo";
            $resultado3 = mysql_query($consulta3);
            $quantos_forum = mysql_num_rows($resultado3);

            ?>

                      <?php
              $qtdProdutos = 0;
            for($j=0;$j < $quantos_forum;$j++)
            {
             $qtdProdutos++;
            $variavel = mysql_fetch_array($resultado3);


            ?>







<TR>
<TD><a href="../consultar/consultar_adm.php?codigo_adm=<?php print($variavel['codigo']); ?>" class="modal" rel="{handler: &#39;iframe&#39;, size: {x: 750, y: 500}}"><?php print($variavel['nickname']); ?></a></TD>
<TD><?php print($variavel['codigo']); ?></TD>
<TD><IMG title="<?php print($vetor_foto['nickname']); ?>" src="../../img/<?php print($vetor_foto['foto']); ?>" width="30" height="30"></TD>
 <?php
 }
 ?>
</TR>
  </TBODY></TABLE></DIV>
  <INPUT TYPE="hidden" NAME="c_qtdProdutos" VALUE="<?php print($qtdProdutos); ?>">
<?php print("Nº de registros cadastrados: ".$qtdProdutos); ?>
<DIV class=module-footer></DIV></DIV></DIV></DIV></DIV>
<DIV id=module-80 class="module half mod_quickitem_pro" draggable="true">
<DIV class=module-2>
<DIV class=module-3>
<DIV class=module-4>
<H3 class=module-title>Cadastrar Administrador</H3>
<DIV class="module-content ">
<form name="f" action="novo_administrador2.php" method ="post">

      <table border="0" align="center">



      <tr>
      <td>Nome</td><td><input type="text" size="20" name="c_nome" maxlength="20"></td>
      </tr>

      <tr>
      <td>Sobrenome</td><td><input type="text" size="20" name="c_sobrenome" maxlength="20"></td>
      </tr>

      <tr>
      <td>Data Nascimento</td><td><select name="c_dia">
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
      </select>/

      <select name="c_mes">
      <option value="1">Janeiro</option>
      <option value="2">Fevereiro</option>
      <option value="3">Marco</option>
      <option value="4">Abril</option>
      <option value="5">Maio</option>
      <option value="6">Junho</option>
      <option value="7">Julho</option>
      <option value="8">Agosto</option>
      <option value="9">Setembro</option>
      <option value="10">Outubro</option>
      <option value="11">Novembro</option>
      <option value="12">Dezembro</option>
      </select>/

      <select name="c_ano">
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      <option value="1979">1979</option>
      <option value="1978">1978</option>
      <option value="1977">1977</option>
      <option value="1976">1976</option>
      <option value="1975">1975</option>
      <option value="1974">1974</option>
      <option value="1973">1973</option>
      <option value="1972">1972</option>
      <option value="1971">1971</option>
      <option value="1970">1970</option>
      <option value="1969">1969</option>
      <option value="1968">1968</option>
      <option value="1967">1967</option>
      <option value="1966">1966</option>
      <option value="1965">1965</option>
      <option value="1964">1964</option>
      <option value="1963">1963</option>
      <option value="1962">1962</option>
      <option value="1961">1961</option>
      <option value="1960">1960</option>
      <option value="1959">1959</option>
      <option value="1958">1958</option>
      <option value="1957">1957</option>
      <option value="1956">1956</option>
      <option value="1955">1955</option>
      <option value="1954">1954</option>
      <option value="1953">1953</option>
      <option value="1952">1952</option>
      <option value="1951">1951</option>
      <option value="1950">1950</option>
      <option value="1949">1949</option>
      <option value="1948">1948</option>
      <option value="1947">1947</option>
      <option value="1946">1946</option>
      <option value="1945">1945</option>
      <option value="1944">1944</option>
      <option value="1943">1943</option>
      <option value="1942">1942</option>
      <option value="1941">1941</option>
      <option value="1940">1940</option>
      <option value="1939">1939</option>
      <option value="1938">1938</option>
      <option value="1937">1937</option>
      <option value="1936">1936</option>
      <option value="1935">1935</option>
      <option value="1934">1934</option>
      <option value="1933">1933</option>
      <option value="1932">1932</option>
      <option value="1931">1931</option>
      <option value="1930">1930</option>
      </select>
      </td>
      </tr>

      <tr>
      <td>Endereco</td><td><input type="text" size="20" name="c_endereco"></td>
      </tr>

      <tr>
      <td>Sexo</td><td><input type="radio" name="c_sexo" value="M" checked>M<input type="radio" name="c_sexo" value="F">F</td>
      </tr>

      <tr>
      <td>Telefone</td><td>(<input type="text" size="2" name="c_telefone1" maxlength="2" onKeyUp="telefone1();";>)<input type="text" size="4" name="c_telefone2" maxlength="4" onKeyUp="telefone2();";>-<input type="text" size="4" name="c_telefone3" maxlength="4" onKeyUp="telefone3();"><br></td>
      </tr>

      <tr>
      <td>Celular</td><td>(<input type="text" size="2" name="c_celular1" maxlength="2" onKeyUp="celular1();">)<input type="text" size="4" name="c_celular2" maxlength="4" onKeyUp="celular2();">-<input type="text" size="4" name="c_celular3" maxlength="4" onKeyUp="celular3();"></td>
      </tr>

      <tr>
      <td>Email</td><td><input type="text" size="20" name="c_email"></td>
      </tr>






      </table>

      <p>
      <table border="0" align="center">



      <tr>
      <td>CPF</td><td><input type="text" size="3" name="c_cpf1" maxlength="3" onKeyUp="cpf1();">-<input type="text" size="3" name="c_cpf2" maxlength="3" onKeyUp="cpf2();">-<input type="text" size="3" name="c_cpf3" maxlength="3" onKeyUp="cpf3();">-<input type="text" size="3" name="c_cpf4" maxlength="2" onKeyUp="cpf4();"></td>
      </tr>

      <tr>
      <td>Nickname</td><td><input type="text" size="20" name="c_nickname" maxlength="10" onFocus="validacao_cpf();"></td>
      </tr>

      <tr>
      <td>Senha</td><td><input type="password" size="10" name="c_senha"></td>
      </tr>

      <tr>
      <td>Confirme a Senha</td><td><input type="password" size="10" name="c_senha2"></td>
      </tr>
      </table>
      
      <table border="0" align="center">

      <tr>
      <td><input type="submit" value="Cadastrar" name="botao"></td><td><input type="reset" value="Limpar" name="botao"></td>
      </tr>
      </table>
      </form>
</DIV>

<DIV class=module-footer></DIV></DIV></DIV></DIV></DIV>
<DIV class=clr></DIV>
<DIV id=module-4 class="module mod_latest" draggable="true">
<DIV class=module-2>
<DIV class=module-3>
<DIV class=module-4>
<H3 class=module-title>Administradores</H3>
<DIV class="module-content flexcroll">
<TABLE class=adminlist>
  <TBODY>
  <TR>
    <TD class=title width="75%"><STRONG>Login</STRONG> </TD>
    <TD class=title><STRONG>Situação</STRONG> </TD></TR>

    <?php
             require("../../ligar.php");
            $consulta3 = "SELECT * FROM $table_harlogins WHERE status=1 order by codigo";
            $resultado3 = mysql_query($consulta3);
            $quantos_forum = mysql_num_rows($resultado3);

            ?>

                      <?php
                $qtdProdutos = 0;
            for($j=0;$j < $quantos_forum;$j++)
            {
             $qtdProdutos++;
            $variavel = mysql_fetch_array($resultado3);


            ?>

  <TR>
    <TD><a href="../consultar/consultar_adm.php?codigo_adm=<?php print($variavel['codigo']); ?>" class="modal" rel="{handler: &#39;iframe&#39;, size: {x: 750, y: 500}}"><?php print($variavel['nickname']); ?></A></TD>
    <TD><?php print($variavel['situacao']); ?></TD>
    <?php
 }
 ?>
  </TR>
  </TBODY></TABLE></DIV>
 <INPUT TYPE="hidden" NAME="c_qtdProdutos" VALUE="<?php print($qtdProdutos); ?>">
<?php print("Nº de registros cadastrados: ".$qtdProdutos); ?>
<DIV class=module-footer></DIV></DIV></DIV></DIV></DIV>
<DIV id=module-5 class="module mod_stats" draggable="true">
<DIV class=module-2>
<DIV class=module-3>
<DIV class=module-4>
<H3 class=module-title>Usuarios</H3>
<DIV class="module-content flexcroll">
<TABLE class=adminlist>
  <TBODY>
  <TR>
    <TD class=title width="75%"><STRONG>Login</STRONG> </TD>
    <TD class=title><STRONG>Situacao</STRONG> </TD></TR>
    
    <?php
             require("../../ligar.php");
            $consulta3 = "SELECT * FROM $table_harlogins WHERE status=2 order by codigo";
            $resultado3 = mysql_query($consulta3);
            $quantos_forum = mysql_num_rows($resultado3);

            ?>

                      <?php
               $qtdProdutos = 0;
            for($j=0;$j < $quantos_forum;$j++)
            {
            $qtdProdutos++;
            $variavel = mysql_fetch_array($resultado3);


            ?>
    
  <TR>
    <TD><a href="../consultar/consultar_adm.php?codigo_adm=<?php print($variavel['codigo']); ?>" class="modal" rel="{handler: &#39;iframe&#39;, size: {x: 750, y: 500}}"><?php print($variavel['nickname']); ?></A></TD>
    <TD><?php print($variavel['situacao']); ?></TD>
    <?php
 }
 ?>
  </TR>
  </TBODY></TABLE></DIV>
  <INPUT TYPE="hidden" NAME="c_qtdProdutos" VALUE="<?php print($qtdProdutos); ?>">
<?php print("Nº de registros cadastrados: ".$qtdProdutos); ?>
<DIV class=module-footer></DIV></DIV></DIV></DIV></DIV>
<DIV id=module-78 class="module mod_activitylog_pro" draggable="true">
<DIV class=module-2>
<DIV class=module-3>
<DIV class=module-4>
<H3 class=module-title>Fornecedores</H3>
<DIV class="module-content flexcroll">
<TABLE class=adminlist>
  <TBODY>
  <TR>
    <TD class=title width="75%"><STRONG>Contato</STRONG> </TD>
    <TD class=title><STRONG>Site</STRONG> </TD></TR>

    <?php
             require("../../ligar.php");
            $consulta3 = "SELECT * FROM $table_harfornecedor WHERE status=1 order by codigo";
            $resultado3 = mysql_query($consulta3);
            $quantos_forum = mysql_num_rows($resultado3);

            ?>

                      <?php
             $qtdProdutos = 0;
            for($j=0;$j < $quantos_forum;$j++)
            {
            $qtdProdutos++;
            $variavel = mysql_fetch_array($resultado3);


            ?>

<TR>
<TD><a href="../consultar/consultar_fornecedor2.php?codigo_adm=<?php print($variavel['codigo']); ?>" class="modal" rel="{handler: &#39;iframe&#39;, size: {x: 750, y: 500}}"><?php print($variavel['contato']); ?></a></TD>
<TD><?php print($variavel['site']); ?></TD>
 <?php
 }
 ?>
</TR>
  </TBODY></TABLE>

</DIV>
<INPUT TYPE="hidden" NAME="c_qtdProdutos" VALUE="<?php print($qtdProdutos); ?>">
<?php print("Nº de registros cadastrados: ".$qtdProdutos); ?>
<DIV class=module-footer></DIV></DIV></DIV></DIV></DIV>
<DIV class=clr></DIV></DIV>
<DIV class=clear></DIV></DIV>
<DIV class=clear></DIV></DIV></DIV>
<DIV class=clear></DIV></DIV></DIV>
<DIV class=clr></DIV></DIV>
<DIV class="clear height-100"></DIV>
<DIV id=ap-footerwrap>
<DIV id=ap-footermenu>
<DIV class=panel>
<DIV align="center"><SPAN class=preview><font color="#FFFFFF">Harmonia</font></SPAN>
</DIV></DIV>
</DIV>
</DIV>
</DIV>
</BODY>
</HTML>
