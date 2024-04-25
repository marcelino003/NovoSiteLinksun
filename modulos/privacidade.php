<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script>
		$(document).ready(function() {
			$('a[href^="#"]').on('click', function(e) {
				e.preventDefault();

				var target = this.hash;
				var $target = $(target);

				// Ajuste do deslocamento considerando a altura do cabeçalho
				var headerHeight = $('#header').outerHeight() || 0;
				var offset = $target.offset().top - headerHeight;

				$('html, body').animate({
					'scrollTop': offset
				}, 1000, 'swing');
			});
		});
	</script>


	<style>
		/*--------------------------------------------------------------
# Privacity Section
--------------------------------------------------------------*/
	</style>

	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<title>
		Linksun - Privacidade
	</title>
	<meta content="" name="description" />
	<meta content="" name="keywords" />
	<!-- Favicons -->
	<!-- <link href="img/logo/favicon.ico" rel="icon" sizes="16x16" /> -->
	<link rel="icon" type="image/x-icon" href="images/logo/favicon.ico">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
	<!-- Vendor CSS Files -->
	<link href="vendor/animate.css/animate.min.css" rel="stylesheet" />
	<link href="vendor/aos/aos.css" rel="stylesheet" />
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
	<link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
	<link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
	<link href="vendor/remixicon/remixicon.css" rel="stylesheet" />
	<link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />


	<!-- <link rel="stylesheet" type="text/css" href="css/fullpage.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/animate.css"> -->
	<link rel="stylesheet" href="css/privacidade.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>


	<header id="header">
		<div class="container-fluid">
			<div class="navbar">
				<div class="navigation-row">
					<nav id="navigation">
						<button type="button" role="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
						<div class="nav-box navbar-collapse">
							<ul class="navigation-menu nav navbar-nav navbars" id="nav">
								<li data-menuanchor="Home"><a href="Home">Home</a></li>
								<li data-menuanchor="Sobre"><a href="home#Sobre">Sobre</a></li>
								<li data-menuanchor="Recursos"><a href="home#Recursos">Recursos</a></li>
								<li data-menuanchor="Diferenciais"><a href="home#Diferenciais">Diferenciais</a></li>
								<li data-menuanchor="Resultados"><a href="home#Resultados">Resultados</a></li>
								<li data-menuanchor="Depoimentos"><a href="home#Depoimentos">Depoimentos</a></li>
								<li data-menuanchor="Contato"><a href="home#Contato">Contato</a></li>
								<li data-menuanchor="Contato" class="active"><a href="privacidade">Privacidade</a></li>


							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>


	<main id="main ">
		<!-- ======= Breadcrumbs ======= -->
		<section class="breadcrumbs">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
				</div>
			</div>
		</section>
		<!-- End Breadcrumbs -->
		<div class="container">
			<div class="row">
				<div class="col-md-3 ">
					<div class="privacity-menu">
						<div class="privacity-menu-title">
							Conteúdo
						</div>
						<a class="nav-link privacity-scrollto" href="#politica">
							1. Política de Privacidade
						</a>
						<a class="nav-link privacity-scrollto" href="#conceitos">
							2. Conceitos
						</a>
						<a class="nav-link privacity-scrollto" href="#coleta">
							3. Informações Coletadas
						</a>
						<a class="nav-link privacity-scrollto" href="#consentimento">
							4. Consentimento
						</a>
						<a class="nav-link privacity-scrollto" href="#comrpomisso">
							5. Compromisso
						</a>
						<a class="nav-link privacity-scrollto" href="#comunicacao">
							6. Comunicações e Atualizaões
						</a>

					</div>
				</div>
				<div class="col-md-9" style="margin-top: 100px;">
					<section class="section-title-privacity" id="politica">
						<p>
							1. Política de Privacidade do sistema Linksun
						</p>
						<h2 class="scroll-to-bold">
							Porque a Linksun trata dados?
						</h2>
					</section>
					<div class="row content" style="text-align: justify;">
						<p>
							O Linksun, sendo um sistema do grupo Customax Tecnologia – empresa comprometida em prestar serviços com qualidade e segurança, sempre adequada às melhores práticas de mercado - está envolvida em proteger a privacidade e a segurança dos dados pessoais dos usuários que utilizam o sistema.
							<br>
							<br>
							Reconhecemos a importância crítica da privacidade online e estamos empenhados em adotar práticas responsáveis para garantir a confidencialidade, integridade e disponibilidade das informações fornecidas por nossos usuários, sempre em conformidade com a Lei Geral de Proteção de Dados Pessoais (LGPD).
							<br>
							<br>
							Quando você utiliza nosso sistema ou solicita algum suporte para este, pode ser necessário informar dados pessoais, às vezes até sensíveis, para viabilizar essa atividade.
							<br>
							<br>
							Assim, esse termo visa informar os usuários do sistema sobre como coletamos, utilizamos, armazenamos e protegemos suas informações pessoais que são obtidas através do uso do sistema, oferecendo, ainda, informações claras e compreensíveis aos usuários, explicando propósitos específicos para os quais seus dados serão utilizados.

						</p>
						<p>
							Quando você entra em contato conosco solicitando suporte ou serviço pode ser necessário
							coletar dados pessoais para viabilizar essa atividade.
						</p>
						<p>
							Cumprimos a Lei Geral de Proteção de Dados Pessoais (LGPD) e essa Política descreve
							como funciona o tratamento de dados feito por nossa empresa. Se, após a leitura de Política
							de Privacidade,
							você ainda tiver dúvidas, pode entrar em contato através de mensagem com nosso canal de
							suporte técnico LGPD,
							você se comunicará com o nosso encarregado de dados, cujas informações completas estão no
							final dessa Política.
						</p>
					</div>
					<section class="section-title-privacity" id="conceitos">
						<p>
							2. Conceitos Importantes
						</p>
						<h2 class="scroll-to-bold">
							para melhor entendimento dessa Política
						</h2>
					</section>
					<div class="row content" style="text-align: justify;">
						<p>
							<span class="blue-text">
								LINKSUN:
							</span>
							Refere-se ao sistema de gestão de energia desenvolvido pelo grupo Customax Tecnologia.

						</p>
						<p>
							<span class="blue-text">
								CUSTOMAX:
							</span>
							Refere-se à Customax Serviço Ltda., pessoa jurídica de direito privado, inscrita no CNPJ sob o nº 12.331.709-0001/59, com sede na Rua Fiscal Verdi Francisco Lenzi, nº 153, Centro, Jaraguá do Sul – SC, CEP 89251-450, desenvolvedora e detentora dos direitos da Linksun.

						</p>
						<p>
							<span class="blue-text">
								DADOS PESSOAIS:
							</span>
							Referem-se às informações que possam ser usadas, direta ou indiretamente, para identificar uma pessoa, como nome, endereço, número de telefone, endereço de e-mail, fotografia, número de identificação, entre outros.
						</p>
						<p>
							<span class="blue-text">
								DADOS SENSÍVEIS:
							</span>
							Referem-se às informações pessoais que, se divulgadas ou utilizadas indevidamente, podem causar danos significativos, constrangimento ou discriminação para o titular dos dados, como informações médicas, sobre origem racial e ética, orientação sexual, afiliação política, religiosa ou crenças pessoais, informações financeiras, dados biométricos, informações sobre código genético, entre outros.
						</p>
						<p>
							<span class="blue-text">
								TITULAR DE DADOS:
							</span>
							Refere-se à pessoa a quem se referem os dados pessoais e/ou sensíveis que estão sendo coletados, processados, armazenados ou utilizados.

						</p>
						<p>
							<span class="blue-text">
								ENCARREGADO DE DADOS:
							</span>
							Refere-se à pessoa responsável por assegurar que determinada empresa cumpra com os direitos do titular de dados, podendo ser conhecido também como data protection officer (DPO).
						</p>
						<p>
							<span class="blue-text">
								ENCARREGADO DE DADOS PESSOAIS:
							</span>
							É a pessoa que atua como canal de comunicação entre a CUSTOMAX, os titulares dos dados e a
							Autoridade Nacional de Proteção de Dados (ANPD), quando o assunto é a proteção dos dados
							pessoais, conforme art. 5, inciso VIII, da LGPD.
						</p>
						<p>
							<span class="blue-text">
								TRATAMENTO DE DADOS:
							</span>
							Refere-se a qualquer operação realizada com dados pessoais e sensíveis, como coleta, produção, recepção, classificação, processamento, comunicação, compartilhamento, transferência, eliminação ou armazenamento.

						</p>
						<p>
							<span class="blue-text">
								LGPD:
							</span>
							Refere-se à legislação que trata da proteção, tratamento e uso de dados em vigência no Brasil.
							Demais conceitos podem ser verificados no artigo 5º da LGPD e que, vislumbradas quaisquer dúvidas, o grupo Customax Tecnologia prontifica-se a saná-las, através de nossos canais de contato.

						</p>
						<p>
							<span class="blue-text">
								POLÍTICA:
							</span>
							É essa política de Privacidade.
						</p>
						<p>
							<span class="blue-text">
								SERVIÇOS:
							</span>
							São todos os serviços oferecidos pela Customax, incluindo prestação de suporte
							(erros/dúvidas).
						</p>
						<p>
							<span class="blue-text">
								TITULAR DOS DADOS PESSOAIS:
							</span>
							Você, uma pessoa física, é titular de seus dados pessoais, conforme artigo 5., inciso V, da
							LGPD. Seja na condição de cliente, colaborador, parceiro de negócios, consumidor, ou usuário
							dos nossos produtos e serviços.
						</p>
						<p>
							<span class="blue-text">
								TRATAMENTO DE DADOS PESSOAIS:
							</span>
							É o que fazemos com os dados, com base no art. 5, inciso X, da LGPD, por exemplo: coleta,
							armazenamento, acesso, utilização, processamento, compartilhamento, avaliação e eliminação.
							A Customax atuará como controladora de seus dados pessoais, sempre que você fornecer seus
							dados e não estivermos na posição de operadora de dados, ou seja, cabe a nossa empresa a
							competência das decisões referentes ao tratamento dos dados pessoais sempre que atuar como
							controladora.
						</p>
					</div>
					<section class="section-title-privacity" id="coleta">
						<p>
							3. INFORMAÇÕES COLETADAS
						</p>
						<h2 class="scroll-to-bold">
							de Dados
						</h2>
					</section>
					<div class="row content" style="text-align: justify;">
						<p>
							A Linksun relaciona-se com alguns dados que são imprescindíveis para a execução do sistema contratado enquanto a relação jurídica entre o contratante e a empresa existir. Assim, faz-se extremamente relevante apresentar quais são os dados coletados, as atividades de tratamento realizadas e suas finalidades, quais sejam:
							<br>
							<br>
							<span class="blue-text">DADOS COLETADOS:</span> Para a utilização do sistema, o contratante terá acesso à telas que apresentam campos para coleta e armazenamento de dados pessoais, como por exemplo Cadastro de Usuário, Cliente, Fornecedores, além de anexos, entre outros.
							<br>
							<br>

							Contabilizam-se, ainda, nos dados coletados, os dados cujos o fornecimento seja necessário para realização de suporte, em que o contratante precisará compartilhar informações com a Linksun para que esta o auxilie em determinada situação. Esses dados serão exclusivamente utilizados para as finalidades abaixo descritas, não podendo ser vendidos e/ou compartilhados sem autorização prévia do titular.
							<br>
							<br>
							<span class="blue-text"> TRATAMENTO DE COLETA:</span> O software, para seu funcionamento, necessita da aquisição de dados pessoais, acrescidos ao sistema pelo próprio titular dos dados, para autenticação e segurança, personalização da experiência do usuário e melhorias no desempenho do sistema.
							<br>
							<br>
							<span class="blue-text"> TRATAMENTO DE RECEPÇÃO E ACESSO: </span>
							O tratamento de recepção e acesso dos dados desempenha um papel crucial na operação em nosso sistema Linksun, proporcionando aos clientes recursos que possibilitam a organização e gestão efetiva do acesso aos dados coletados. O sistema Linksun é projetado com funcionalidades que capacitam os usuários a controlar e restringir o acesso apenas a indivíduos autorizados, permitindo assim que cada cliente ajuste as configurações de privacidade conforme suas necessidades específicas.
							<br>
							<br>
							No contexto do tratamento de recepção, o sistema Linksun possui medidas robustas para garantir que os dados sejam coletados de maneira ética e legal, de acordo com as normativas vigentes de privacidade e proteção de dados. Também fornecemos suporte técnico para auxiliar os clientes na configuração e manutenção eficaz dos controles de acesso, promovendo, assim, a segurança e a conformidade.
							<br>
							<br>
							Essa abordagem oferece flexibilidade aos clientes, permitindo que personalizem suas políticas de acesso de acordo com as exigências regulatórias e as necessidades específicas de seus negócios. Adicionalmente, reforçamos nosso compromisso constante com o aprimoramento contínuo do sistema Linksun, assegurando que este evolua para oferecer registros precisos e sempre atualizados sobre a origem e o momento da recepção dos dados.
							<br>
							<br>
							Essa iniciativa não apenas promove a transparência e rastreabilidade do processo, mas também reflete a dedicação da nossa empresa em desenvolver o Linksun como uma solução cada vez mais robusta e alinhada com as necessidades dinâmicas dos nossos clientes.
							<br>
							<br>
							<span class="blue-text"> TRATAMENTO DE ARMAZENAMENTO, UTILIZAÇÃO E PROCESSAMENTO: </span>
							O tratamento de armazenamento, utilização e processamento de dados pelo Linksun representa uma fase crucial na gestão eficiente das informações coletadas. A empresa se compromete em fornecer o armazenamento seguro dos dados, adotando práticas que garantem a integridade e a confidencialidade das informações. Além disso, o sistema Linksun utiliza tecnologias avançadas para organizar e processar os dados, mantendo sua relevância em consonância com a finalidade inicial da coleta.
							<br>
							<br>

							<span class="blue-text"> TRATAMENTO DE ELIMINAÇÃO: </span>
							A solicitação de exclusão de dados do sistema está disponível para o cliente somente no momento em que decide encerrar o contrato com o Linksun. Este procedimento, denominado tratamento de eliminação, ocorre quando a relação jurídica entre as partes é encerrada, não se fazendo cabível durante a existência do contrato, haja vista o Linksun utilizar tão somente os dados estritamente necessários para seu funcionamento. O Linksun conduz o tratamento de eliminação de dados de forma segura e eficiente, seguindo procedimentos específicos que garantem a exclusão completa e irreversível dos dados.
							<br>
							<br>
							<span class="blue-text"> DIREITOS DO TITULAR DE DADOS: </span>
							A LGPD confere diversos direitos aos titulares de dados, garantindo que estes tenham controle sobre o tratamento de seus dados pessoais e sensíveis. Entre todos os direitos elencados pela lei, pode-se extrair:
							DIREITO DE INFORMAÇÃO: O titular de dados tem o direito de ser informado de forma clara, precisa e fácil sobre o tratamento de seus dados.
							<br>
							<br>
							<span class="blue-text"> DIREITO DE CONFIRMAÇÃO E ACESSO: </span> O titular de dados tem o direito de confirmar se seus dados estão sendo processados e de obter acesso às informações sobre esse tratamento.
							DIREITO DE CORREÇÃO: O titular de dados tem o direito de corrigir dados incompletos, inexatos ou desatualizados.
							<br>
							<br>
							<span class="blue-text"> DIREITO À ANONIMIZAÇÃO, BLOQUEIO OU ELIMINAÇÃO: </span> O titular de dados tem o direito de solicitar a anonimização, bloqueio ou eliminação de dados desnecessários, excessivos ou que estejam em desconformidade com a LGPD.
							<br>
							<br>
							<span class="blue-text"> DIREITO AO CONSENTIMENTO: </span> O titular de dados tem o direito de consentir ou não o tratamento de seus dados.
							A Linksun, respeitando a legislação e os direitos dos usuários, disponibiliza canais de contato para que o titular de dados entre em contato conosco para solicitar informações sobre o tratamento de seus dados pessoais e sensíveis.

						</p>
					</div>


					<section class="section-title-privacity" id="consentimento">
						<p>
							4. CONSENTIMENTO
						</p>
						<h2 class="scroll-to-bold">
							Dessa Política
						</h2>
					</section>
					<div class="row content" style="text-align: justify;">
						<p>
							Ao se interessar pela compra de nosso sistema e ter acesso a este termo, você pode consentir ou não com a política de privacidade aqui descrita. Caso não se verifique o aceite, não se fará possível a contratação de acesso ao sistema, haja vista os únicos tratamentos de dados utilizados pela Linksun serem os imprescindíveis para que você usufrua do sistema.
							Reconhecemos, ainda, seu direito de retirar o consentimento a qualquer momento, podendo realizar tal preferência via nossos canais de contato, rescindindo o negócio e estando cabível às situações previstas no contrato assinado pela compra do sistema.


						</p>
					</div>




					<section class="section-title-privacity" id="compromisso">
						<p>
							5. COMPROMISSO
						</p>
						<h2 class="scroll-to-bold">
							Privacidade dos Dados
						</h2>
					</section>
					<div class="row content" style="text-align: justify;">
						<p>
							Reconhecendo a importância da privacidade dos dados pessoais e sensíveis, a Linksun assume o compromisso integral de implementar e manter medidas robustas de segurança para proteger os dados tratados pelo nosso sistema.
							<br>
							<br>
							Nossa empresa está empenhada em assegurar que as informações dos usuários sejam tratadas com o mais alto padrão de ética e conformidade legal, implementando protocolos de segurança avançados, criptografia de dados, controle de acesso, monitoramento ativo, treinamento contínuo da equipe, avaliações de risco, transparência, comunicação e quaisquer mais ações que se fizerem necessárias.
							<br>
							<br>
							Este compromisso reflete a nossa dedicação em proteger as informações dos usuários e em garantir que a confiança depositada em nosso software seja recompensada com a mais alta qualidade em termos de segurança da informação.
						</p>

					</div>
					<section class="section-title-privacity" id="comunicacao">
						<p>
							6. COMUNICAÇÕES E ATUALIZAÇÕES
						</p>
						<h2 class="scroll-to-bold">
							Dessa Política
						</h2>
					</section>
					<div class="row content" style="text-align: justify;">
						<p>

							Mantemo-nos, ainda, comprometidos em informá-lo no caso de quaisquer atualizações neste termo. Se você tiver dúvidas acerca do tratamento de seus dados pessoais e sensíveis ou ainda queira fazer alguma sugestão ou comentário, entre em contato com nossa empresa, falando com nosso DPO: Alan Leopold, endereço eletrônico lgpd@customax.com.br.
							Agradecemos a confiança de nossos usuários e permanecemos dedicados à proteção de suas informações pessoais.
						</p>
					</div>
					<br>
					<p align="right">
						Equipe Linksun, <br>
						Equipe Customax Tecnologia,

						<br>

						<br />
						Última atualização em: 10/01/2024
					</p>
				</div>
			</div>
		</div>

		</div>
	</main>
	<!-- End #main -->

	<!-- <?php include("footer.php") ?> -->

	<a class="back-to-top d-flex align-items-center justify-content-center" href="#politica">
		<i class="bi bi-arrow-up-short">
		</i>
	</a>

	<!-- Vendor JS Files -->
	<script src="vendor/aos/aos.js">
	</script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js">
	</script>
	<script src="vendor/glightbox/js/glightbox.min.js">
	</script>
	<script src="vendor/isotope-layout/isotope.pkgd.min.js">
	</script>
	<script src="vendor/swiper/swiper-bundle.min.js">
	</script>
	<script src="vendor/php-email-form/validate.js">
	</script>
	<!-- Template Main JS File -->
	<script src="js/privacidade.js">
	</script>

</body>

</html>