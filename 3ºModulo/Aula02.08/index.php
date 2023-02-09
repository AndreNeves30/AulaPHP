<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de comidas</title>
</head>
<body>
	<h1>Gerenciamento de alimentos</h1>
	<form action="crud.php" method="post">
		Nome: <input type="text" name="nome"><br><br>
		Quantidade: <input type="text" name="qtn"><br><br>
		Preço: <input type="text" name="preco"><br><br>
		Código: <input type="text" name="cod"><br><br>
		<button>Cadastrar</button>
		<button>Alterar</button>
		<button>Excluir</button>
		<button>Pesquisar</button>
	</form>

</body>
</html>