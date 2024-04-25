<?php
require 'vendor/autoload.php'; // Carregar a biblioteca PHPMailer

// Configurações do banco de dados
$servername = "seu_servidor";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "sua_base_de_dados";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta para verificar novos registros nos últimos 15 dias
$last15days = date('Y-m-d', strtotime('-15 days'));
$query = "SELECT * FROM formulario WHERE data >= '$last15days'";
$result = $conn->query($query);

if ($result->num_rows > 0) {

    // Configurar o PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'seu_servidor_smtp';
    $mail->SMTPAuth = true;
    $mail->Username = 'seu_email';
    $mail->Password = 'sua_senha';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('seu_email', 'Seu Nome');
    $mail->addAddress('destinatario_email', 'Nome do Destinatário');
    $mail->addAttachment('caminho_para_arquivo_excel', 'nome_do_arquivo_excel.xlsx');

    $mail->isHTML(true);
    $mail->Subject = 'Novos registros do formulário';
    $mail->Body = 'Segue em anexo os novos registros do formulário';

    if (!$mail->send()) {
        echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
    } else {
        echo 'E-mail enviado com sucesso!';
    }
} else {
    echo 'Nenhum novo registro nos últimos 15 dias.';
}

$conn->close();
?>
