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

$codigo_adm = $_GET["codigo_adm"];

       require("../../ligar.php");
       $consulta_news = "SELECT * FROM $table_harprodutos WHERE codigo=$codigo_adm";
       $resultado = mysql_query($consulta_news);
       $consulta_jogadores = "SELECT * FROM $table_harprodutos where codigo=$codigo_adm";
       $resultado_jogadores = mysql_query($consulta_jogadores);
       $vetor2 = mysql_fetch_array($resultado_jogadores);
       $vetor = mysql_fetch_array($resultado);


?>




      <table border="1" align="center" width="90%">
      
        <tr>
      <td><font color="black"><b><center>Fotos</td>
      <td><center><img src="../../img/<?php print($vetor2['foto1']); ?>" width="150" height="100"></td>
      </tr>
      
      
       <tr>
      <td><font color="black"><b><center>Nome</td>
      <td><center><?php print($vetor2['nome']); ?></td>
      </tr>

      <tr>
      <td><font color="black"><b><center>Codigo</td>
      <td><center><?php print($vetor2['codigo2']); ?></td>
      </tr>

      <tr>
      <td><font color="black"><b><center>Tamanho</td>
      <td><center><?php print($vetor2['tamanho']); ?></td>
      </tr>
              <tr>
      <td><font color="black"><b><center>Estoque</td>
      <td><center><?php print($vetor2['estoque']); ?></td>
      </tr>
        <tr>
      <td><font color="black"><b><center>Descricao do produto</td>
      <td><center><?php print($vetor2['descricao']); ?></td>
      </tr>
              <tr>
      <td><font color="black"><b><center>Preco da compra</td>
      <td><center><?php print($vetor2['preco']); ?></td>
      </tr>
              <tr>
      <td><font color="black"><b><center>Preco de venda</td>
      <td><center><?php print($vetor2['venda']); ?></td>
      </tr>
      
       <tr>
      <td><font color="black"><b><center>Custo BDI</td>
      <td><center><?php print($vetor2['bdi']); ?></td>
      </tr>
      
        <tr>
      <td><font color="black"><b><center>Rateio BDI</td>
      <td><center><?php print($vetor2['impostos']); ?></td>
      </tr>
      
       <tr>
      <td><font color="black"><b><center>Frete da compra</td>
      <td><center><?php print($vetor2['frete']); ?></td>
      </tr>
      
       <tr>
      <td><font color="black"><b><center>Embalagem</td>
      <td><center><?php print($vetor2['embalagem']); ?></td>
      </tr>
      
      <tr>
      <td><font color="black"><b><center>Imposto simples</td>
      <td><center><?php print($vetor2['imposto']); ?>%</td>
      </tr>
      
       <tr>
      <td><font color="black"><b><center>Custo final</td>
      <td><center><?php print($vetor2['custof']); ?></td>
      </tr>
      
       <tr>
      <td><font color="black"><b><center>Magem de lucro</td>
      <td><center><?php print($vetor2['magem']); ?>%</td>
      </tr>
      
       <tr>
      <td><font color="black"><b><center>Pre&ccedil;o de venda</td>
      <td><center><?php print($vetor2['custov']); ?></td>
      </tr>




      </table>
      <BR><BR>







</body>
</html>



