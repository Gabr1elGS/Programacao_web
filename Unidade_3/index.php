<?php
include "imovel.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo = $_POST['tipo'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $num_quartos = $_POST['num_quartos'];
    $num_banheiros = $_POST['num_banheiros'];
    $area_const = $_POST['area_const'];
    $valorImovel = $_POST['valorImovel'];

    $imovel = new Imovel($tipo, $cep, $numero, $complemento, $num_quartos, $num_banheiros, $area_const, $valorImovel);

    $endereco = json_decode(file_get_contents("https://viacep.com.br/ws/$cep/json/"));

    echo "Dados do Imóvel:<br>";
    echo "Tipo: " . $imovel->getTipo() . "<br>";
    echo "CEP: " . $imovel->getCep() . "<br>";
    echo "Número: " . $imovel->getNumero() . "<br>";
    echo "Complemento: " . $imovel->getComplemento() . "<br>";
    echo "Número de Quartos: " . $imovel->getNum_quartos() . "<br>"; 
    echo "Número de Banheiros: " . $imovel->getNum_banheiros() . "<br>";
    echo "Área Construída: " . $imovel->getArea_const() . " m²<br>";
    echo "Valor do Imóvel: R$ " . number_format($imovel->getValorImovel(), 2, ',', '.') . "<br>";
    echo "Previsão de IPTU: R$ " . number_format($imovel->Previsao_Iptu(), 2, ',', '.') . "<br>";

    if (isset($endereco->erro)) {
        echo "Endereço não encontrado.";
    } else {
        echo "Endereço: " . $endereco->logradouro . ", " . $endereco->bairro . ", " . $endereco->localidade . " - " . $endereco->uf;
    }
} else {
?>

<h2>Formulario do Imovel</h2><br>
<form method="POST">
    Tipo: <input type="text" name="tipo" required><br>
    CEP: <input type="text" name="cep" required><br>
    Número: <input type="text" name="numero" required><br>
    Complemento: <input type="text" name="complemento"><br>
    Número de Quartos: <input type="number" name="num_quartos" required><br>
    Número de Banheiros: <input type="number" name="num_banheiros" required><br>
    Área Construída (m²): <input type="number" name="area_const" required><br>
    Valor do Imóvel: <input type="number" name="valorImovel" required><br>
    <input type="submit" value="Cadastrar Imóvel">
</form>

<?php
}
?>
