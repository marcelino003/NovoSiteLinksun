<?php
require '../connection/connpdo.php';

class CookieInsertion {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function insertCookies($localizacao_usuario, $data_aceitacao, $nome_dia_semana) {
        try {
            $gravarCookies = "INSERT INTO cookies_usuarios (localizacao_usuario, data_aceitacao, nome_dia_semana) 
            VALUES (:localizacao_usuario, :data_aceitacao, :nome_dia_semana)";

            $insereCookies = $this->conn->prepare($gravarCookies);

            // Substituir os parâmetros
            $insereCookies->bindParam(':localizacao_usuario', $localizacao_usuario);
            $insereCookies->bindParam(':data_aceitacao', $data_aceitacao);
            $insereCookies->bindParam(':nome_dia_semana', $nome_dia_semana);

            $insereCookies->execute();

            return "Dados inseridos com sucesso!";
        } catch (PDOException $e) {
            return "Erro ao inserir dados: " . $e->getMessage();
        }
    }
}

if (isset($_POST['localizacao_usuario'])) {
    $localizacao_usuario = $_POST['localizacao_usuario'];

    $data_aceitacao = $_COOKIE['data_aceitacao'];
    $nome_dia_semana = $_COOKIE['nome_dia_semana'];

    $cookieInsertion = new CookieInsertion($conn);
    $result = $cookieInsertion->insertCookies($localizacao_usuario, $data_aceitacao, $nome_dia_semana);

    echo $result;
}
?>
