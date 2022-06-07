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
       $consulta_news = "SELECT * FROM $table_harlogins WHERE codigo=$codigo_adm";
       $resultado = mysql_query($consulta_news);
       $consulta_jogadores = "SELECT * FROM $table_hardados where cod_login=$codigo_adm";
       $resultado_jogadores = mysql_query($consulta_jogadores);
       $vetor2 = mysql_fetch_array($resultado_jogadores);
       $vetor = mysql_fetch_array($resultado);
       

?>




      <table border="1" align="center" width="40%">

      <tr>
      <td colspan="2"><font color="white"><center><IMG title="<?php print($vetor['nickname']); ?>" src="../../img/<?php print($vetor['foto']); ?>" height="150" width="250"></td>
      </tr>
      <tr>
      <td><b><center>Nome</td>


      <td><font color="black"><center><?php print($vetor2['nome']); ?></td>

         </tr>
      <tr>
      <td><font color="black"><b><center>Sobrenome
      </td>
      <td><center><?php print($vetor2['sobrenome']); ?></td>
      </tr>
            <tr>
      <td><font color="black"><center><b>Data Nascumento</td> <td><center><?php print($vetor2['dn_dia']); ?>/<?php print($vetor2['dn_mes']); ?>/<?php print($vetor2['dn_ano']); ?></td>
      </tr>
      
        <tr>
      <td><font color="black"><b><center>Sexo
      </td>
      <td><center>
      <?php
      if($vetor2[7] == 'M')
      {
      ?>
      Masculino
      <?php
      }
      else if($vetor[7] == 'F')
      {
      ?>
      Feminino
      <?php
      }
      else
      {
      ?>
      <font color="red">Desconhecido</font>
      <?php
      }
      ?>

      </td>
      </tr>
        <tr>
      <td><font color="black"><b><center>Telefone
      </td>
      <td><center>

      <?php
      $telefone = substr($vetor2[8], 0, 2);
      $telefone2 = substr($vetor2[8], 2, 4);
      $telefone3 = substr($vetor2[8], 6, 4);
      
      
      
       $celular = substr($vetor2[9], 0, 2);
      $celular2 = substr($vetor2[9], 2, 4);
      $celular3 = substr($vetor2[9], 6, 4);
      
      $cpf1 = substr($vetor2[11], 0, 3);
      $cpf2 = substr($vetor2[11], 3, 3);
      $cpf3 = substr($vetor2[11], 6, 3);
      $cpf4 = substr($vetor2[11], 9, 2);

      
      
      ?>
      (<?php print($telefone); ?>)<?php print($telefone2); ?>-<?php print($telefone3); ?></td>
      </tr>
        <tr>
      <td><font color="black"><b><center>Celular
      </td>
      <td><center>(<?php print($celular); ?>)<?php print($celular2); ?>-<?php print($celular3); ?></td>
      </tr>
          <tr>
      <td><font color="black"><b><center>E-mail
      </td>
      <td><center><?php print($vetor2['email']); ?></td>
      </tr>
              <tr>
      <td><font color="black"><b><center>Endereco
      </td>
      <td><center><?php print($vetor2['endereco']); ?></td>
      </tr>
      
                    <tr>
      <td><font color="black"><b><center>Cpf
      </td>
      <td><center><?php print($cpf1); ?>.<?php print($cpf2); ?>.<?php print($cpf3); ?>-<?php print($cpf4); ?></td>
      </tr>
           <tr>
      <td><b><center>Nickname</td>


      <td><font color="black"><center><?php print($vetor['nickname']); ?></td>

         </tr>
         
             <tr>
      <td><b><center>Status</td>


      <td><font color="black"><center>
      <?php
      if($vetor[3] == 1)
      {
      ?>
      Administrador
      <?php
      }
      else if($vetor[3] == 2)
      {
      ?>
      Usuario
      <?php
      }
      else if($vetor[3] == 3)
      {
      ?>
      Empresa
      <?php
      }
      else
      {
      ?>
      <font color="red">Desconhecido</font>
      <?php
      
      }
      
      ?>
      </td>

         </tr>
                      <tr>
      <td><b><center>Situacao</td>


      <td><font color="black"><center>
      <?php
      if($vetor[4] == 1)
      {
      ?>
      Desbloqueado
      <?php
      }
      else if($vetor[4] == 2)
      {
      ?>
      Bloqueado
      <?php
      }
      else
      {
      ?>
      <font color="red">Desconhecido</font>
      <?php

      }

      ?>
      </td>

         </tr>

                      <tr>
      <td><b><center>Login</td>


      <td><font color="black"><center>
      <?php
      if($vetor[6] == 1)
      {
      ?>
      Online
      <?php
      }
      else if($vetor[6] == 0)
      {
      ?>
      Offline
      <?php
      }
      else
      {
      ?>
      <font color="red">Desconhecido</font>
      <?php

      }

      ?>
      </td>

         </tr>

      
      


      </table>


      </form>








</body>
</html>



