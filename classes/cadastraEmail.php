<?php

class cadastraEmail {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addMessage($name, $email, $content) {
        $query = "INSERT INTO formulario (nome_usuario, email_usuario, assunto_usuario, data ) 
        VALUES (:name, :email, :content, NOW())";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':content', $content, PDO::PARAM_STR);

        return $stmt->execute();
    }
}
?>
