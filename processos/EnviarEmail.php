<?php
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';

include_once '../connection/connpdo.php';
require '../classes/cadastraEmail.php';

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$response = array();

if (!empty($data['name']) && !empty($data['email']) && !empty($data['content'])) {
    $cadastraEmail = new CadastraEmail($conn);

    if ($cadastraEmail->addMessage($data['name'], $data['email'], $data['content'])) {
        $mail = new PHPMailer(true);

        try {
            $mail->CharSet = 'UTF-8';
            $mail->isSMTP();
            $mail->Host = 'smtp.linksun.com.br';
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@linksun.com.br';
            $mail->Password = '7uy*s8opmA0*';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom($data['email']);
            $mail->addAddress('atendimento@linksun.com.br', 'Atendimento');
            $mail->isHTML(true);
            $mail->Subject = 'Quero conhecer mais sobre o Linksun';
            $mail->Body = "Nome: " . $data['name'] . "<br>E-mail: " . $data['email'];
            
            if (!empty($data['tel'])) {
                $mail->Body .= "<br>Telefone: " . $data['tel'];
            }
            
            $mail->Body .= "<br>Conteúdo: " . $data['content'];
            $mail->AltBody = "Nome: " . $data['name'] . "\nE-mail: " . $data['email'];
            
            if (!empty($data['tel'])) {
                $mail->AltBody .= "\nTelefone: " . $data['tel'];
            }
            
            $mail->AltBody .= "\nConteúdo: " . $data['content'];
            $mail->send();
            
            $response['status'] = 'Enviado com Sucesso!';
            
            // Enviar o email de retorno para o mesmo endereço de email do usuário que enviou o email original
            $returnEmail = new PHPMailer(true);
            $returnEmail->CharSet = 'UTF-8';
            $returnEmail->isSMTP();
            $returnEmail->Host = 'smtp.linksun.com.br';
            $returnEmail->SMTPAuth = true;
            $returnEmail->Username = 'no-reply@linksun.com.br';
            $returnEmail->Password = '7uy*s8opmA0*';
            $returnEmail->SMTPSecure = 'ssl';
            $returnEmail->Port = 465;
            $returnEmail->setFrom('no-reply@linksun.com.br', 'Linksun No-Reply');
            $returnEmail->addAddress($data['email'], $data['name']); 
            $returnEmail->isHTML(true);
            $returnEmail->Subject = 'Re: Quero conhecer mais sobre o Linksun';
            $returnEmail->msgHTML(file_get_contents('../email/index.html'));            
            $returnEmail->send();
            
            $response['return_status'] = 'E-mail de retorno enviado com sucesso!';
            
        } catch (Exception $e) {
            $response['status'] = 'Erro ao enviar o e-mail: ' . $e->getMessage();
        }
    }
} else {
    $response['status'] = 'Dados não enviados!';
}

header('Content-Type: application/json');
echo json_encode($response);
?>