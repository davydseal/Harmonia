<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Cadastro De Usuarios</title>

 <link rel="stylesheet" type="text/css" href="cadastrar_arquivos/main-rollup.css">


</head>
<body>
<div id="pageWrapper">
<div id="contentMain">
<div class="contentTL">
<div class="contentTR">
<div class="contentBL">
<div class="contentBR">
<div class="contentWrapper">
<div class="body_wrapper">
<form id="registerform" action="usuario2.php" name="register" method="post" onsubmit="return verify_passwords(password, passwordconfirm);" class="vbform block"> <h2 class="blockhead">Cadastro na SSN</h2>
<div class="blockbody formcontrols">
<h3 class="blocksubhead">Informações Pessoais</h3>
<div class="section">
<div class="blockrow">
<ul class="group">
<li><label for="regusername">Nome do usuário:</label><input class="primary textbox" name="c_nome" maxlength="25" tabindex="1" type="text"></li>
<li><label for="regusername">Sobrenome do Usuário:</label><input class="primary textbox"  name="c_sobrenome" maxlength="25" tabindex="1" type="text"></li>
<li><label for="regusername">Data de nascimento</label>
<select name="c_dia">
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
</li>
<li><label for="regusername">Endereço:</label><input class="primary textbox"  name="c_endereco" maxlength="100" tabindex="1" type="text"></li>
<li><label for="regusername">Sexo:</label>
<select name="c_sexo">
<option value="M">Masculino</option>
<option value="F">Feminino</option>
</select>
</li>
<li><label for="regusername">Telefone:</label>(<input class="primary textbox"  name="c_telefone1" maxlength="2" size="2" tabindex="1" type="text">)<input class="primary textbox"  name="c_telefone2" maxlength="4" size="4" tabindex="1" type="text">-<input class="primary textbox"  name="c_telefone3" maxlength="4" size="4" tabindex="1" type="text"></li>
<li><label for="regusername">Celular:</label>(<input class="primary textbox"  name="c_celular1" maxlength="2" size="2" tabindex="1" type="text">)<input class="primary textbox"  name="c_celular2" maxlength="4" size="4" tabindex="1" type="text">-<input class="primary textbox"  name="c_celular3" maxlength="4" size="4" tabindex="1" type="text"></li>
<li><label for="regusername">Cpf:</label><input class="primary textbox"  name="c_cpf1" maxlength="2" size="2" tabindex="1" type="text">-<input class="primary textbox"  name="c_cpf2" maxlength="4" size="4" tabindex="1" type="text">-<input class="primary textbox"  name="c_cpf3" maxlength="4" size="4" tabindex="1" type="text">-<input class="primary textbox"  name="c_cpf4" maxlength="4" size="4" tabindex="1" type="text"></li>

</ul>
<div class="rightcol">
<div id="reg_verif_div" class="primary" style="display:none;"></div>
<BR>


</div>
</div>
<h3 class="blocksubhead">Informações De Acesso</h3>
<div class="blockrow">
<ul class="group">
<li><label for="regusername">Login:</label><input class="primary textbox"  name="c_nickname" maxlength="100" tabindex="1" type="text"></li>
<li> <label for="password">Senha:</label><input class="textbox" name="c_senha" id="password" maxlength="50" value="" tabindex="1" type="password"> </li>
<li> <label for="passwordconfirm">Confirmar Senha:</label> <input class="textbox" name="c_senha2" id="passwordconfirm" maxlength="50" value="" tabindex="1" type="password"> </li>
</ul>
</div>
<div class="blockrow">
<ul class="group">
<li> <label for="email">Email:</label> <input class="textbox" name="c_email" id="email" maxlength="50" dir="ltr" tabindex="1" type="text"> </li>
<li> <label for="emailconfirm">Confirmar Endereço de Email:</label> <input class="textbox" name="email2" id="emailconfirm" maxlength="50" dir="ltr" tabindex="1" type="text"> </li>
</ul>
</div>
</div>
</div>
<div class="blockfoot actionbuttons">
<div class="group">
<input class="button" value="Completar Registro" tabindex="1" accesskey="s" type="submit">
<input class="button" name="Reset" tabindex="1" value="Limpar Campos" type="reset">
</div>
</div>
</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div>
</div>
</div>
</div>
</div>
</body>
</html>
