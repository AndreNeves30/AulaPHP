<!DOCTYPE html>
<html>
<head> 

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>aulinha formuláriu</title>
</head>
<body>
<form name="cadastro" method="get" action="pagina_form.php">

Nome: <input type="text" name="nome" size="30" maxlength="10"> <br><br>
Senha: <input type="password" name="senha"> <br><br>
Aceito o termo de uso <br><br>
<input type="radio" name="sexo" value="fen">Feminino	
<input type="radio" name="sexo" value="mas">Masculino
<br>
<input type="hidden" name="login" value="admin">
<br>
&nbsp; &nbsp; &nbsp;
<input type="button" name="VOLTAR">
&nbsp; &nbsp; &nbsp;
<!--<input type="reset" name="LIMPAR"> -->
&nbsp; &nbsp; &nbsp;
<input type="submit" name="ENVIAR">
&nbsp; &nbsp; &nbsp;
<a href="#" onclick="document.cadastro.reset()">Limpar</a>
&nbsp; &nbsp; &nbsp;
<a href="#" onclick="window.location.href='http://www.google.com.br'">Google
</a>
</form>

<form name="comes" method="get" action="pagina_form.php">

Comidas:
<select name="comida">
	<option>Pizza</option>
	<option selected="true">Torta Holandesa</option>
	<option>Cachorro-quente</option>
</select>
<br>
<br>
<input type="submit" name="ENVIAR">
<br><br>

Nos informe sua opinião:<br>
<textarea name="msg" cols="50" rows="10">
	
</textarea>
<br><br>
<input type="submit" name="ENVIAR">
</form>



</body>
</html>