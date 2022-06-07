<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0073)http://ap3.adminpraise.com/administrator/index.php?option=com_adminpraise -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" id="minwidth"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

<LINK rel=stylesheet type=text/css href="index_arquivos/style_index.css">
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
<body id="minwidth-body" class="ap3  theme4 com_adminpraise ap-task-  ap-view- ap-section- ap-type- chrome">
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

<LI><A class=Frontpage href="../cadastrar/novo_administrador.php"><SPAN class=component-image></SPAN>Administradores</A></LI>
<LI><A class=ArchivedArticles href="../cadastrar/novo_usuario.php"><SPAN class=component-image></SPAN>Usuarios</A></LI>
<LI><A class=ArchivedArticles href="../cadastrar/novo_fornecedor.php"><SPAN class=component-image></SPAN>Fornecedores</A></LI>
<LI><A class=ArchivedArticles href="../cadastrar/novo_produto.php"><SPAN class=component-image></SPAN>Produtos</A></LI>
<LI><A class=ArticleTrash href="#"><SPAN class=component-image></SPAN>News</A>
<ul>
<li><a href="../cadastrar/newsadm.php">News Administrador</a></li>
<li><a href="../cadastrar/news_usuario.php">News Usuarios</a></li>
</ul></LI>


</UL>
</LI>


<LI class=parent>
<A class=Articles href="#"><SPAN class=component-image></SPAN><SPAN class=parent-name>Consultar</SPAN><SPAN class=subarrow></SPAN></A>
<UL class=submenu>

</LI>
</LI>

<LI><A class=Frontpage href="novo_administrador.php"><SPAN class=component-image></SPAN>Administradores</A></LI>
<LI><A class=ArchivedArticles href="novo_usuario.php"><SPAN class=component-image></SPAN>Usuarios</A></LI>
<LI><A class=ArchivedArticles href="novo_fornecedor.php"><SPAN class=component-image></SPAN>Fornecedores</A></LI>
<LI><A class=ArchivedArticles href="harmoniaprodutos.php"><SPAN class=component-image></SPAN>Produtos</A></LI>
<LI><A class=ArticleTrash href="#"><SPAN class=component-image></SPAN>News</A>
<ul>
<li><a href="newsadm.php">News Administrador</a></li>
<li><a href="news_usuario.php">News Usuarios</a></li>
</ul>
</LI>
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
</ul>
</LI>

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
</ul>
</LI>





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

	<div class="clear"></div>
</div>

<div id="ap-middle">
<div id="ap-menu">
<UL class=ap-avatar>

<?php
require("../../ligar.php");
$consulta = "SELECT * FROM $table_harlogins WHERE codigo=$codigo";
$resultado = mysql_query($consulta);
$vetor_foto = mysql_fetch_array($resultado);
?>
<LI><A href="../cadastrar/mudarfoto.php" ><IMG title="<?php print($vetor_foto['nickname']); ?>" src="../../img/<?php print($vetor_foto['foto']); ?>"></A><BR>
<A href="../../login/sair/finalizar.php">Sair</A></LI></UL>




		<div class="clr"></div>
	</div>
		<div id="ap-main" class="ap-static-wrapper ap-main-marginleft">
		<div class="ap-main-inner">
	<div id="ap-static">

		<div class="clear"></div>
	</div>
		<div id="ap-mainbody" class="ap-tall">
									<div id="alt-toolbar">
				<div class="toolbar" id="toolbar">
<table class="toolbar"><tbody><tr>
</tr></tbody></table>
</div>
			</div>


			<div id="ap-content">
				<div id="ap-content-inner">



<div class="main">
			<div class="module">
					<h3>Relatorio</h3>
               </div>
               </div>
                </div>
                 </div>



		<center>	           <BR>
			<table align="center" border="1">
			<tr align="center" bgcolor="#FFFFFF">
<td><b>Codigo</td><td><b>Nome</td><td><b>Tamanho</td><td><b>Estoque</td><td><b>Descricao do produto</td><td><b>Preco de compra</td><td><b>Preco da venda sugerido</td><td><b>Custo BDI</td><td><b>Rateio de BDI</td><td><b>Frete compra</td><td><b>Embalagem</td><td><b>imposto simples</td><td><b>Custo final</td><td><b>Magem de lucro</td><td><b>Custo da Venda</td>

			</tr>
			
  <?php
             require("../../ligar.php");
            $consulta3 = "SELECT * FROM $table_harprodutos order by codigo desc";
            $resultado3 = mysql_query($consulta3);
            $quantos_forum = mysql_num_rows($resultado3);

            ?>

                      <?php
            for($j=0;$j < $quantos_forum;$j++)
            {
            $variavel = mysql_fetch_array($resultado3);
            if($j >= 350)
            {
            break;
            }

            ?>


<tr>
  <td>&nbsp;</td>
</tr>




<TR align="center">
<TD><?php print($variavel['codigo2']); ?></TD>
<TD><a href="../consultar/consultar_produto.php?codigo_adm=<?php print($variavel['codigo']); ?>" class="modal" rel="{handler: &#39;iframe&#39;, size: {x: 750, y: 500}}"><?php print($variavel['nome']); ?></a></TD>
<TD><?php print($variavel['tamanho']); ?></TD>
<TD><?php print($variavel['estoque']); ?></TD>
<TD><?php print($variavel['descricao']); ?></TD>
<TD><?php print($variavel['preco']); ?></TD>
<TD><?php print($variavel['venda']); ?></TD>
<TD><?php print($variavel['bdi']); ?></TD>
<TD><?php print($variavel['impostos']); ?></TD>
<TD><?php print($variavel['frete']); ?></TD>
<TD><?php print($variavel['embalagem']); ?></TD>
<TD><?php print($variavel['imposto']); ?></TD>
<TD><?php print($variavel['custof']); ?></TD>
<TD><?php print($variavel['magem']); ?></TD>
<TD><?php print($variavel['custov']); ?></TD>

 <?php
 }
 ?>
</TR>

  </TBODY>

<form method="POST" action="teste.php" name="teste">
<input type="submit" value="Enviar">
</form>

  </TABLE>


</DIV></DIV></DIV>

<DIV class=module-footer></DIV>
<DIV class=clr></DIV>
<DIV class=clear></DIV>
<DIV class=clear></DIV>
<DIV class=clear></DIV>
<DIV class=clr></DIV>
<DIV class="clear height-100"></DIV>
<DIV id=ap-footerwrap>
<DIV id=ap-footermenu>
<DIV class=panel>
<DIV align="center"><SPAN class=preview><font color="#FFFFFF">Harmonia</font></SPAN></DIV>
</DIV>
</DIV>
</DIV>




</body></html>
