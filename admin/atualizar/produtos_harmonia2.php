<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Harmonia</title>


<?php

     session_start();

      $system_control = $_SESSION["system_control"];
     $status = $_SESSION["status"];
     $codigo = $_SESSION["codigo"];



       ?>


       <style>

/*
	Blue Dream
	Written by Teylor Feliz  http://www.admixweb.com
*/


table { background:#D3E4E5;
 border:1px solid gray;
 border-collapse:collapse;
 color:#fff;
 font:normal 12px verdana, arial, helvetica, sans-serif;
}
caption { border:1px solid #5C443A;
 color:#5C443A;
 font-weight:bold;
 letter-spacing:20px;
 padding:6px 4px 8px 0px;
 text-align:center;
 text-transform:uppercase;
}
td, th { color:#363636;
 padding:.4em;
}
tr { border:1px dotted gray;
}
thead th, tfoot th { background:#5C443A;
 color:#FFFFFF;
 padding:3px 10px 3px 10px;
 text-align:left;
 text-transform:uppercase;
}
tbody td a { color:#363636;
 text-decoration:none;
}
tbody td a:visited { color:gray;
 text-decoration:line-through;
}
tbody td a:hover { text-decoration:underline;
}
tbody th a { color:#363636;
 font-weight:normal;
 text-decoration:none;
}
tbody th a:hover { color:#363636;
}
tbody td+td+td+td a { background-image:url('bullet_blue.png');
 background-position:left center;
 background-repeat:no-repeat;
 color:#03476F;
 padding-left:15px;
}
tbody td+td+td+td a:visited { background-image:url('bullet_white.png');
 background-position:left center;
 background-repeat:no-repeat;
}
tbody th, tbody td { text-align:left;
 vertical-align:top;
}
tfoot td { background:#5C443A;
 color:#FFFFFF;
 padding-top:3px;
}
.odd { background:#fff;
}
tbody tr:hover { background:#99BCBF;
 border:1px solid #03476F;
 color:#000000;
}







</style>




</head>

<body>

<?php
 require("../../ligar.php");
$codigo_adm = $_GET['codigo_adm'];

            $consultar = "SELECT * FROM $table_harprodutos WHERE codigo=$codigo_adm";
            $resultado = mysql_query($consultar);
            $consultar = mysql_num_rows($resultado);
            $vetor = mysql_fetch_array($resultado);


            ?>




	<!-- all you need with Tablecloth is a regular, well formed table. No need for id's, class names... -->



     <table border="1" align="center" width="90%">

     
                <tr>
      <td ><font color="#400040">Foto</td>
      </tr>

      <tr>

      <td>
      

      



<BR><BR>
<form name="a" action="mudarfoto2.php" method="post" enctype="multipart/form-data">
<center><IMG src="../../img/<?php print($vetor['foto1']); ?>" width="150" height="100"></center>
<BR><BR>
<input type="file" name="Arquivo" id="Arquivo">   <BR><BR> <BR>
<center><input type="submit" value="Atualizar Foto"></center>
</form>
      </td>

      </tr>
     
    <form name="f" action="produtos_harmonia3.php" method="post">
     
           <tr>
      <td ><font color="#400040">Nome</td>
      </tr>

      <tr>
      <td><font color="black"><b><input type="text" name="c_nome" value="<?php print($vetor['nome']); ?>" size="30">
      </td>
      </tr>

      <tr>
      <td ><font color="#400040">Codigo</td>
      </tr>
      <tr>
      <td ><font color="black"><b><input type="text" name="c_codigo2" value="<?php print($vetor['codigo2']); ?>" size="30">
      </td>
      </tr>

            <tr>
      <td ><font color="#400040">Tamanho</td>
      </tr>
      <tr>
      <td><font color="black"><b><input type="text" name="c_tamanho" value="<?php print($vetor['tamanho']); ?>" size="30">
      </td>
      </tr>

            <tr>
      <td ><font color="#400040">Estoque</td>
      </tr>
      <tr>
      <td><font color="black"><b><input type="text" name="c_estoque" value="<?php print($vetor['estoque']); ?>" size="30">
      </td>
      </tr>

            <tr>
      <td ><font color="#400040">Descricao</td>
      </tr>
      <tr>
      <td><font color="black"><b><center><input type="text" name="c_descricao" value="<?php print($vetor['descricao']); ?>" size="55">
      </td>
      </tr>
      
            <tr>
      <td ><font color="#400040">Preco de compra</td>
      </tr>

      <tr>
      <td><font color="black"><b><input type="text" name="c_preco" value="<?php print($vetor['preco']); ?>" size="10">
      </td>
      </tr>
      
      
       <tr>
      <td ><font color="#400040">Frete da compra</td>
      </tr>

      <tr>
      <td><font color="black"><b><input type="text" name="c_frete" value="<?php print($vetor['frete']); ?>" size="10">
      </td>
      </tr>
      
       <tr>
      <td ><font color="#400040">Embalagem</td>
      </tr>

      <tr>
      <td><font color="black"><b><input type="text" name="c_embalagem" value="<?php print($vetor['embalagem']); ?>" size="10">
      </td>
      </tr>
      


      

      
      <input type="hidden" name="codigo" value="<?php print($vetor['codigo']); ?>">
      <tr>
      <td colspan="2"><center><input type="submit" value="Editar"></td>
      </tr>




      </table>


      </form>








</body>
</html>
