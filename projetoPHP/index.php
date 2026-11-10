<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Clientes</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="container">
		<h2>Cadastro de Clientes</h2>
		<p class="subtitulo">Preencha os campos abaixo para registrar o cliente no sistema.</p>

		<form action="processa.php" method="POST">

			<fieldset>
				<legend>Dados Pessoais</legend>

				<div class="linha-grupo">
					<div class="campo w-70">
						<label for="nome">Nome completo: *</label>
						<input type="text" id="nome" name="nome" placeholder="Ex: João Silva" required minlength="3"
							autofocus>
					</div>
					<div class="campo w-30">
						<label for="idade">Idade: *</label>
						<input type="text" id="idade" name="idade" required>
					</div>
				</div>

				<div class="linha-grupo">
					<div class="campo w-50">
						<label>Gênero: *</label>
						<div class="opcoes-inline">
							<label><input type="radio" name="sexo" value="Masculino" required> Masculino</label>
							<label><input type="radio" name="sexo" value="Feminino" required> Feminino</label>
							<label><input type="radio" name="sexo" value="Outro" required> Outro</label>
						</div>
					</div>
					<div class="campo w-50">
						<label for="email">E-mail: *</label>
						<input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
					</div>
				</div>

				<div class="linha-grupo">
					<div class="campo w-70">
						<label for="cidade">Cidade: *</label>
						<input type="text" id="cidade" name="cidade" placeholder="Ex: São Paulo" required minlength="2">
					</div>
				</div>
			</fieldset>

			<fieldset>
				<legend>Configurações Adicionais</legend>

				<div class="campo">
					<label for="observacoes">Observações Internas:</label>
					<textarea id="observacoes" name="observacoes" rows="4"
						placeholder="Informações complementares sobre o perfil do cliente..."></textarea>
				</div>
				<div class="campo termo-aceite">
					<label>
						<input type="checkbox" name="termos" value="aceito" required>Declaro que os dados fornecidos são
						verídicos e aceito as políticas de privacidade. *
					</label>
				</div>
			</fieldset>

			<div class="acoes">
				<button type="reset" class="btn-limpar">Limpar Tudo</button>
				<button type="submit" class="btn-salvar">Salvar Cadastro</button>
			</div>
		</form>
	</div>

</body>

</html>