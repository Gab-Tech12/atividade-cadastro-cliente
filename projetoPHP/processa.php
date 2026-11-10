<?php
header('Content-Type: text/html; charset=utf-8');


if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Acesso negado. Por favor, envie o formulário corretamente.");
}

$nome        = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$idade       = isset($_POST['idade']) ? trim($_POST['idade']) : '';
$sexo        = isset($_POST['sexo']) ? trim($_POST['sexo']) : '';
$email       = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$cidade      = isset($_POST['cidade']) ? trim($_POST['cidade']) : '';
$observacoes = isset($_POST['observacoes']) ? trim($_POST['observacoes']) : '';


if (empty($nome) || empty($idade) || empty($sexo) || empty($email) || empty($cidade)) {
    die("Erro: Por favor, preencha todos os campos obrigatórios corretamente.");
}


if ($email === false) {
    die("Erro: O formato do e-mail inserido é inválido.");
}


if (!ctype_digit($idade) || (int)$idade <= 0) {
    die("Erro: A idade deve ser um número inteiro maior que zero.");
}

if ((int)$idade < 18) {
    die("Cadastro permitido apenas para maiores de 18 anos.");
}


if ($sexo !== "Masculino" && $sexo !== "Feminino" && $sexo !== "Outro") {
    die("Erro: Opção de sexo inválida enviada.");
}


$nomeFormatado   = mb_convert_case($nome, MB_CASE_TITLE, "UTF-8");
$cidadeFormatada = mb_convert_case($cidade, MB_CASE_TITLE, "UTF-8");


$observacoesLimpas = htmlspecialchars($observacoes, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmação de Cadastro</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container resposta-sucesso">
        <h3>Registro Processado com Sucesso!!!</h3>
        <p class="subtitulo">Os dados abaixo foram validados pelo servidor e estão prontos para armazenamento:</p>
        <hr>
        <ul>
            <li><strong>Nome:</strong> <?php echo $nomeFormatado; ?></li>
            <li><strong>Idade:</strong> <?php echo $idade; ?></li>
            <li><strong>Gênero:</strong> <?php echo $sexo; ?></li>
            <li><strong>E-mail:</strong> <?php echo $email; ?></li>
            <li><strong>Cidade:</strong> <?php echo $cidadeFormatada; ?></li>
            <li><strong>Observações:</strong>
                <p><?php echo !empty($observacoesLimpas) ? nl2br($observacoesLimpas) : "Nenhuma"; ?></p>
            </li>
        </ul>
        <div class="acoes">
            <a href="index.php" class="btn-retornar">Voltar ao Formulário</a>
        </div>
    </div>

</body>
</html>