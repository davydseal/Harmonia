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

<LI><A class=Frontpage href="dados_pessoais.php"><SPAN class=component-image></SPAN>Dados Pessoais</A></LI>
<LI><A class=ArchivedArticles href="dados_sistema.php"><SPAN class=component-image></SPAN>Dados do Sistema</A></LI>


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
									<div id="ap-submenu">

					<ul id="submenu">

<li>
<a href="dados_sistema.php">Dados do Sistema</a>
</li>
<li>
<a href="../admin.php">Voltar</a>
</li>


</ul>


				<div class="clear"></div>
			</div>

			<div id="ap-content">
				<div id="ap-content-inner">



<div class="main">
			<div class="module">
					<h3>Meus dados pessoais</h3>
					
					   <?php

                 require("../../ligar.php");

                 $consulta2 = "SELECT * FROM $table_hardados where cod_login ='$codigo'";
                 $resultado_consulta2 = mysql_query($consulta2);
                 $quantos_registros2 = mysql_num_rows($resultado_consulta2);



                            $vetor2 = mysql_fetch_array($resultado_consulta2);
                            $c_sexo2 = ($vetor2['sexo']);


          $telefone1 = substr($vetor2['telefone'],0,2);
          $telefone2 = substr($vetor2['telefone'],2,4);
          $telefone3 = substr($vetor2['telefone'],6,4);

          $celular1 = substr($vetor2['celular'],0,2);
          $celular2 = substr($vetor2['celular'],2,4);
          $celular3 = substr($vetor2['celular'],6,4);

                 ?>



			<div style="float:center;">



   <BR>
   
   <form name="e" action="dados_pessoais2.php" method="post">
   
   <center>
           <b> Nome</b><BR>
<input type="text" name="c_nome" value="<?php print($vetor2['nome']) ?>"><BR>
<b>Sobrenome</b><BR>
<input type="text" name="c_sobrenome" value="<?php print($vetor2['sobrenome']) ?>"><BR>
<b>data nascimento</b>
<BR>
dia:  <select name="dn_dia">
                  <OPTION
  selected value="<?php print($vetor2['dn_dia']) ?>"><?php print($vetor2['dn_dia']) ?></OPTION>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
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
                 </select>
mes:                 <select name="dn_mes">
                  <OPTION
  selected value="<?php print($vetor2['dn_mes']) ?>"><?php print($vetor2['dn_mes']) ?></OPTION>
    <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>

                 </select>
ano:     <select name="dn_ano">
                  <OPTION
  selected value="<?php print($vetor2['dn_ano']) ?>"><?php print($vetor2['dn_ano']) ?></OPTION>
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
   <BR>
<b>Sexo</b>
<BR>
              <?php
                 if($vetor2[6] == 'M')
                 {
                 ?>

                  <input type="radio" name="c_sexo" value="M" checked><font color="black">Masculino <input type="radio" name="c_sexo" value="F"><font color="black">Feminino

                 <?php
                 }
                 else
                 {
                 ?>

                <input type="radio" name="c_sexo" value="M"><font color="black">Masculino <input type="radio" name="c_sexo" value="F" checked><font color="black">Feminino

                 <?php
                 }
                 ?>

<BR>
<b>telefone</b>
<BR>
(<input type="text" name="c_tel1" value="<?php print("$telefone1") ?>" size="2">)<input type="text" name="c_tel2" value="<?php print("$telefone2") ?>" size="2">-<input type="text" name="c_tel3" value="<?php print("$telefone3") ?>" size="2">
<BR>
<b>Celular</b>
<BR>
(<input type="text" name="c_cel1" value="<?php print("$celular1") ?>" size="2">)<input type="text" name="c_cel2" value="<?php print("$celular2") ?>" size="2">-<input type="text" name="c_cel3" value="<?php print("$celular3") ?>" size="2">
<BR>
<b>E-mail</b>
<BR>
<input type="text" name="c_email" value="<?php print($vetor2['email']) ?>">
<BR>
<b>Endereco</b>
<BR>
<input type="text" name="c_endereco" value="<?php print($vetor2['endereco']) ?>">


<BR><BR>
<input type="submit" value="Salvar os dados">

 </center>

      </form>


			</div>

  </div>


        <DIV class=module-footer></DIV>
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







</body></html>
