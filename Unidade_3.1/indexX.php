<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: var(--bg-color, white);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Formulario</h1>
        <form method="post" action="index.php">
            <div class="form-group">
                <label for="nomeCompleto">Nome Completo:</label>
                <input type="text" class="form-control" id="nomeCompleto" name="NomeCompleto" required>
            </div>
            <div class="form-group">
                <label for="dataNasc">Data de Nascimento:</label>
                <input type="date" class="form-control" id="dataNasc" name="dataNasc" required>
            </div>
            <div class="form-group">
                <label for="funcao">Função:</label>
                <input type="text" class="form-control" id="funcao" name="Funcao" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="number" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="corFundo">Cor de Fundo:</label>
                <input type="text" class="form-control" id="corFundo" name="corFundo" placeholder="Exemplo: #ff0000" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="salarioLiquido">Salário Líquido:</label>
                <input type="number" class="form-control" id="salarioLiquido" name="SalarioLiquido" required>
            </div>
            <div class="form-group">
                <label for="salarioBruto">Salário Bruto:</label>
                <input type="number" class="form-control" id="salarioBruto" name="SalarioBruto" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Funcionário</button>
        </form>

        <script>
            // Função para definir o cookie
            function setCookie(cname, cvalue, exdays) {
                const d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                const expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }

            // Função para obter o cookie
            function getCookie(cname) {
                const name = cname + "=";
                const decodedCookie = decodeURIComponent(document.cookie);
                const ca = decodedCookie.split(';');
                for (let i = 0; i < ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            // Ao carregar a página, aplicar a cor de fundo armazenada no cookie
            window.onload = function() {
                const corFundo = getCookie("corFundo");
                if (corFundo) {
                    document.body.style.backgroundColor = corFundo;
                }

                const inputCorFundo = document.getElementById("corFundo");
                inputCorFundo.addEventListener("change", function() {
                    setCookie("corFundo", inputCorFundo.value, 7); // Armazenar por 7 dias
                    document.body.style.backgroundColor = inputCorFundo.value;
                });
            }
        </script>
    </div>
</body>
</html>
