<?php
//ALTERAR de acordo com o número da porta
// verificar conexão com o XAMPP
$servername = "localhost:3309";
$username = "root";
$password = "";
$dbname = "exercicio";

try {
    // Tenta criar uma conexão com o banco de dados 
    // Confere se as informações estão corretas
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se houve algum erro na conexão 
    if($conn->connect_error) {
        throw new Excepcion("Falha na conexão: " . $conn->connect_error);
    }
    echo "Conexão realizado com sucesso!";
} catch (Excepcion $e) {
    // Exibe uma mensagem de erro amigável 
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>




