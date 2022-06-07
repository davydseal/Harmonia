<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Harmonia</title>
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

$codigo_news = $_GET["codigo_pessoa"];

       require("../../ligar.php");
       $consulta_news = "SELECT * FROM $table_harfornecedor WHERE codigo=$codigo_news";
       $resultado = mysql_query($consulta_news);
       $vetor2 = mysql_fetch_array($resultado);

       $codigo_logins = "SELECT * FROM $table_harfornecedor WHERE codigo=$codigo_news";
       $XD = mysql_query($codigo_logins);
       $vetor = mysql_fetch_array($XD);


?>


<div id="container">


	<div id="content">


	<!-- all you need with Tablecloth is a regular, well formed table. No need for id's, class names... -->


              <form name="f" action="novo_fornecedor3.php" method="post">
      <table border="1" width="100%">

        <tr>
         <td colspan="2">Voce tem certeza que quer excluir dados?</td>
         </tr>
         <input type="hidden" name="excluir" value="<?php print($vetor['codigo']); ?>"
         <tr>
         <td colspan="2"><input type="submit" value="Sim tenho certeza e desejo excluir dados"></td>
         </tr>
         </form>
      <tr>
      <td><b><center>CNPJ</td>


      <td><font color="black"><center><?php print($vetor2['cnpj']); ?></td>

         </tr>
      <tr>
      <td><font color="black"><b><center>Insc estadual
      </td>
      <td><center><?php print($vetor2['inscest']); ?></td>
      </tr>
      
       <tr>
      <td><font color="black"><b><center>Insc municipal
      </td>
      <td><center><?php print($vetor2['inscmun']); ?></td>
      </tr>

 <tr>
      <td><font color="black"><b><center>Cep
      </td>
      <td><center><?php print($vetor2['cep']); ?></td>
      </tr>




        <tr>
      <td><font color="black"><b><center>Telefone
      </td>
      <td><center>

      <?php
      $telefone = substr($vetor2[6], 0, 2);
      $telefone2 = substr($vetor2[6], 2, 4);
      $telefone3 = substr($vetor2[6], 6, 4);



      ?>
      (<?php print($telefone); ?>)<?php print($telefone2); ?>-<?php print($telefone3); ?></td>
      </tr>
      
       <tr>
      <td><font color="black"><b><center>Contato
      </td>
      <td><center><?php print($vetor2['contato']); ?></td>
      </tr>


          <tr>
      <td><font color="black"><b><center>E-mail
      </td>
      <td><center><?php print($vetor2['email']); ?></td>
      </tr>
              <tr>
      <td><font color="black"><b><center>Site
      </td>
      <td><center><?php print($vetor2['site']); ?></td>
      </tr>


           <tr>
      <td><b><center>Razao social</td>


      <td><font color="black"><center><?php print($vetor['texto']); ?></td>

         </tr>











      </table>


      </form>



</div>
</div>
</td>
</tr>
</table>


	</div>
</div>



</body>
</html>



