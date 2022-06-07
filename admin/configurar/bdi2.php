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

$codigo = $_GET["codigo"];

       require("../../ligar.php");
       $consulta_news = "SELECT * FROM $table_harbdi WHERE codigo=$codigo";
       $resultado = mysql_query($consulta_news);
       $vetor = mysql_fetch_array($resultado);


?>




	<!-- all you need with Tablecloth is a regular, well formed table. No need for id's, class names... -->


       <form name="f" action="bdi3.php" method="post">
      <table border="1" align="center">

      <tr>
      <td colspan="2"><font color="black"><center>Numero</td>
      </tr>
      <tr>
      <td colspan="2"><b><center><input type="text" name="c_custo" value="<?php print($vetor['custo']); ?>"></td>
      </tr>


      <input type="hidden" name="codigo" value="<?php print($vetor['codigo']); ?>">
      <tr>
      <td colspan="2"><center><input type="submit" value="Editar"></td>
      </tr>




      </table>


      </form>








</body>
</html>



