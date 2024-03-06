<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $byUser = $_POST["combo_box_part"];
    $pole = $_POST["combo_box_pole"];
    $first = $_POST["combo_box_first"];
    $second = $_POST["combo_box_second"];
    $third = $_POST["combo_box_third"];
    $code = $_POST["code"];
    $race = $_POST["race"]; // Obtém o nome do circuito
    
    // Conecta-se ao banco de dados
    $servername = "o677vxfi8ok6exrd.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "dus6hc2j9924pph1";
    $password = "dlehpqbwph9imq4b";
    $dbname = "wviodp4jxv0bpshs";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
    // Verifica o código do usuário
    $stmt_code = $conn->prepare("SELECT id FROM bolao_users WHERE code = ?");
    $stmt_code->bind_param("s", $code);
    $stmt_code->execute();
    $stmt_code->store_result();
    
    if ($stmt_code->num_rows == 0) {
        die("Código inválido.");
    }
    
    // Prepara a declaração SQL
    $sql = "INSERT INTO bolao_guess (byUser, pole, first, second, third, race) VALUES (?, ?, ?, ?, ?, ?)";
    
    // Prepara a declaração
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $byUser, $pole, $first, $second, $third, $race);
    
    // Executa a declaração
    if ($stmt->execute()) {
        echo "Palpite enviado com sucesso!";
    } else {
        echo "Erro ao enviar palpite: " . $stmt->error;
    }
    
    // Fecha as declarações e a conexão
    $stmt_code->close();
    $stmt->close();
    $conn->close();
} else {
    echo "O formulário não foi enviado.";
}
?>
