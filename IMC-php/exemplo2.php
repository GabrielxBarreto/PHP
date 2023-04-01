<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário com CSS estilizado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<form action="receber2.php" method="get">
			<h1>Calculadora de IMC</h1>
			<label for="">Altura:
				<input type="number"name="altura" step="0.1" value="1.60">
			</label>
			<label for="">Peso:
				<input type="number" name="peso" step="0.1" value="60">
			</label>
            <label for="">Idade:
				<input type="number" name="idade">
			</label>
            <fieldset for="">Sexo:
				<input type="radio" name="sexo" value="M">Masculino
                <input type="radio" name="sexo" value="F">Feminino
                <input type="radio" name="sexo" value="nb">Não Binário

            </fieldset>
			<button>calcular</button>
		</form>
	</div>
</body>
</html>