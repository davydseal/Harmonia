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
 require("../../ligar.php");
$codigo_adm = $_GET['codigo_adm'];

            $consultar = "SELECT * FROM $table_harfornecedor WHERE codigo=$codigo_adm";
            $resultado = mysql_query($consultar);
            $vetor = mysql_fetch_array($resultado);

            $consultar2 = "SELECT * FROM $table_harfornecedor WHERE codigo=$codigo_adm";
            $resultado2 = mysql_query($consultar2);
            $vetor2 = mysql_fetch_array($resultado2);

            ?>

            <form name="f" action="novo_fornecedor3.php" method ="post">



                  <table border="1" align="center">
                         <tr>
                             <td colspan="2"><center><font color="black"><b>Dados Pessoais do fornecedor</b></td>
                         </tr>
                         
                         
                         <?php

      $telefone = substr($vetor2[6], 0, 2);
      $telefone2 = substr($vetor2[6], 2, 4);
      $telefone3 = substr($vetor2[6], 6, 4);
      
      


?>
                         
                         

                         <tr>
                             <td><font color="black">(*)INSC ESTADIAL</td><td><input type="text" size="20" name="c_inscest" value="<?php print($vetor2['inscest']);?>"></td>
                         </tr>
                         <tr>
                             <td><font color="black">(*)INSC MUNICIPAL</td><td><input type="text" size="20" name="c_inscmun" value="<?php print($vetor2['inscmun']);?>"></td>
                         </tr>

                     <tr>
                             <td><font color="black">(*)ENDERECO</td><td><input type="text" size="20" name="c_endereco" value="<?php print($vetor2['endereco']);?>"></td>
                         </tr>

  <tr>
                             <td><font color="black">(*)CEP</td><td><input type="text" size="20" name="c_cep" value="<?php print($vetor2['cep']);?>"></td>
                         </tr>
                         
                         <tr>
                             <td><font color="black">(*)Telefone</td><td>(<input type="text" size="2" name="c_telefone1" maxlength="2" onKeyUp="telefone1();" value="<?php print($telefone);?>">)<input type="text" size="4" name="c_telefone2" maxlength="4" onKeyUp="telefone2();" value="<?php print($telefone2);?>">-<input type="text" size="4" name="c_telefone3" maxlength="4" onKeyUp="telefone3();" value="<?php print($telefone3);?>"><br></td>
                         </tr>

                           <tr>
                             <td><font color="black">(*)CONTATO</td><td><input type="text" size="20" name="c_contato" value="<?php print($vetor2['contato']);?>"></td>
                         </tr>

                           <tr>
                             <td><font color="black">(*)EMAIL</td><td><input type="text" size="20" name="c_email" value="<?php print($vetor2['email']);?>"></td>
                         </tr>
                         
                           <tr>
                             <td><font color="black">(*)SITE</td><td><input type="text" size="20" name="c_site" value="<?php print($vetor2['site']);?>"></td>
                         </tr>

                           <tr>
                             <td><font color="black">(*)TEXTO</td><td><input type="text" size="20" name="c_texto" value="<?php print($vetor2['texto']);?>"></td>
                         </tr>




                         <input type="hidden" name="login" value="<?php print($codigo_adm); ?>">
                         <tr>
                         <td colspan="2"><center><input type="submit" value="Alterar"></td>
                         </tr>
                  </table>
</body>
</html>
