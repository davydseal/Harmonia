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

            $consultar = "SELECT * FROM $table_harlogins WHERE codigo=$codigo_adm";
            $resultado = mysql_query($consultar);
            $vetor = mysql_fetch_array($resultado);
            
            $consultar2 = "SELECT * FROM $table_hardados WHERE cod_login=$codigo_adm";
            $resultado2 = mysql_query($consultar2);
            $vetor2 = mysql_fetch_array($resultado2);
            
            ?>

            <form name="f" action="novo_administrador3.php" method ="post">



                  <table border="1" align="center">
                         <tr>
                             <td colspan="2"><center><font color="black"><b>Dados Pessoais</b></td>
                         </tr>
                         <tr>
                             <td><font color="black">(*)Nome</td><td><input type="text" size="20" name="c_nome" maxlength="20" value="<?php print($vetor2['nome']);?>"></td>
                         </tr>
                         <tr>
                             <td><font color="black">(*)Sobrenome</td><td><input type="text" size="20" name="c_sobrenome" maxlength="20" value="<?php print($vetor2['sobrenome']);?>"></td>
                         </tr>

                         <tr>
                             <td><font color="black">(*)Sexo</td><td><input type="radio" name="c_sexo" value="M" <?php if($vetor2['sexo'] == "M"){print("checked");}?>>M<input type="radio" name="c_sexo" value="F" <?php if($vetor2['sexo'] == "F"){print("checked");}?>>F</td>
                         </tr>

<?php

      $telefone = substr($vetor2[8], 0, 2);
      $telefone2 = substr($vetor2[8], 2, 4);
      $telefone3 = substr($vetor2[8], 6, 4);
      
      $celular1 = substr($vetor2[9], 0, 2);
      $celular2 = substr($vetor2[9], 2, 4);
      $celular3 = substr($vetor2[9], 6, 4);
?>

                         <tr>
                             <td><font color="black">(*)Telefone</td><td>(<input type="text" size="2" name="c_telefone1" maxlength="2" onKeyUp="telefone1();" value="<?php print($telefone);?>">)<input type="text" size="4" name="c_telefone2" maxlength="4" onKeyUp="telefone2();" value="<?php print($telefone2);?>">-<input type="text" size="4" name="c_telefone3" maxlength="4" onKeyUp="telefone3();" value="<?php print($telefone3);?>"><br></td>
                         </tr>
                         <tr>
                             <td>Celular</td><td>(<input type="text" size="2" name="c_celular1" maxlength="2" onKeyUp="celular1();" value="<?php print($celular1);?>">)<input type="text" size="4" name="c_celular2" maxlength="4" onKeyUp="celular2();" value="<?php print($celular2);?>">-<input type="text" size="4" name="c_celular3" maxlength="4" onKeyUp="celular3();" value="<?php print($celular3);?>"></td>
                         </tr>
                         <tr>
                             <td><font color="black">(*)Email</td><td><input type="text" size="30" name="c_email" value="<?php print($vetor2['email']);?>"></td>
                         </tr>
                         <input type="hidden" name="login" value="<?php print($codigo_adm); ?>">
                         <tr>
                         <td colspan="2"><center><input type="submit" value="Alterar"></td>
                         </tr>
                  </table>
</body>
</html>
