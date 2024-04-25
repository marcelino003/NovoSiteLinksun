<!DOCTYPE html>
<html lang="ept-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
        }
        
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #1FB0E3;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .header {
            background: url('logo.png') no-repeat center center; 
            background-size: cover; 
            color: #fff;
            text-align: center;
            padding: 0; 
            height: 360px;
            border-radius: 10px 10px 0 0;
        }
        
        .content {
            padding: 40px;
            color: #3e3e3e;
            background-color: rgb(255, 255, 255);
            font-size: 20px;
            line-height: 1.6;
            font-weight: lighter;
        }
        
        .content .texto {
            font-size: 16px; 
        }
        
        .content2 h3 {
            line-height: 1.6; 
            margin-top: -50%; 
            margin-bottom: 10px; 
            margin-left: 50px; 
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }
        
        .content2 h3 span {
            background-image: linear-gradient(to right, yellow, orange);
            -webkit-background-clip: text;
            color: transparent;
        }
        
        .gradiente-linha {
            display: inline-block;
            background-image: linear-gradient(to right, yellow, orange);
            width: 51%;
            height: 1px;
            margin-bottom: 20px;
            margin-left: 40px;
        }
        
        .styled-list {
            font-size: 16px; 
            line-height: 1.9; 
            margin-top: 30px; 
            margin-bottom: 10px; 
            margin-left: 30px; 
            color: #fff;
            font-weight: lighter;
        }
        
        .right-aligned-image {
            flex-shrink: 0;
            width: 600px; 
            margin-left: auto; 
            margin-right: 40px; 
        }
        
        .footer {
            background-color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 12px;
        }
        
        .social-icons {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        .social-icons li {
            margin: 0 10px;
        }
        
        .social-icons a {
            color: #F8D03A; /* Cor amarela */
            font-size: 24px;
            transition: color 0.3s;
        }
        
        .social-icons a:hover {
            color: #1FB0E3; /* Cor azul */
        }
        </style>
    </head>
    <body>
        <div class="email-container">
            <div class="header">
                <!-- A imagem é definida como background do header -->
            </div>
            <div class="content">
                <p>Olá João Marcelino!</p>
                <p class="texto">Agradecemos pelo contato, Em breve entraremos
                    em contato para responder às suas perguntas e compartilhar
                    mais informações.</p>
            </div>

            <div class="content2">
                <img class="right-aligned-image"
                    src="imagem2.png" alt>
                <h3>Outros Recu<span>rsos Linksun</span></h3>
                <!-- <div class="gradiente-linha"></div> -->
                <ul class="styled-list">
                    <li>Controle de comissões para representantes;</li>
                    <li>Módulo de pós-vendas com controle de reclamações e
                        calendário de manutenção preventiva;</li>
                    <li>Relatórios de gestão relacionados a coletas de dados,
                        propostas e projetos vendidos;</li>
                    <li>Controle de comissões para representantes;</li>
                    <li>Área de informativos para avisos gerais;</li>
                </ul>
                <img class="right-aligned-image" src="imagem1.png" alt>
                <br>
                <br>
            </div>

            <div class="footer">
                <p>Conecte-se conosco nas redes sociais:</p>
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/sistemalinksun"
                            target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a
                            href="http://api.whatsapp.com/send?1=pt_BR&phone=554738420103"
                            target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a
                            href="https://www.linkedin.com/company/sistemalinksun"
                            target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/sistemalinksun/"
                            target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <!-- Adicione mais ícones de redes sociais conforme necessário -->
                </ul>
            </div>

        </div>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>