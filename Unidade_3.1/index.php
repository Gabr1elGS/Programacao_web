<?php
include "Funcionario.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $funcionario = new Funcionario();

    // Definindo os atributos do funcionário
    $funcionario->setNomeCompleto($_POST['NomeCompleto']);
    $funcionario->setDataNasc($_POST['dataNasc']);
    $funcionario->setFuncao($_POST['Funcao']);
    $funcionario->setTelefone($_POST['telefone']);
    $funcionario->setCorFundo($_POST['corFundo']);
    $funcionario->setEmail($_POST['email']);
    $funcionario->setSalarioLiquido($_POST['SalarioLiquido']);
    $funcionario->setSalarioBruto($_POST['SalarioBruto']);

    // Exibir dados do funcionário
    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dados do Funcionário</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h4>Dados do Funcionário</h4>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informações Pessoais</h5>
                    <p class="card-text"><strong>Nome Completo:</strong> <?php echo htmlspecialchars($funcionario->getNomeCompleto()); ?></p>
                    <p class="card-text"><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($funcionario->getDataNasc()); ?></p>
                    <p class="card-text"><strong>Função:</strong> <?php echo htmlspecialchars($funcionario->getFuncao()); ?></p>
                    <p class="card-text"><strong>Telefone:</strong> <?php echo htmlspecialchars($funcionario->getTelefone()); ?></p>
                    <p class="card-text"><strong>Cor:</strong> <?php echo htmlspecialchars($funcionario->getCorFundo()); ?></p>
                    <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($funcionario->getEmail()); ?></p>
                    <p class="card-text"><strong>Salário Líquido:</strong> <?php echo htmlspecialchars($funcionario->getSalarioLiquido()); ?></p>
                    <p class="card-text"><strong>Salário Bruto:</strong> <?php echo htmlspecialchars($funcionario->getSalarioBruto()); ?></p>
                    <p class="card-text"><strong>Cálculo do Desconto:</strong> <?php echo htmlspecialchars($funcionario->calculaDesconto()); ?></p>
                </div>
            </div>
            <a href="indexx.php" class="btn btn-primary mt-4">Voltar ao Formulário</a>
        </div>
    </body>
    </html>
    <?php
}
?>
