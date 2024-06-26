<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Linksun a Gestão da Sua Energia</title>
    <meta content name="description">
    <meta content name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logoemail.png" rel="icon">
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Fonts Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Swall Fire -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.js"></script>

    <!-- Vanilla Masker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.1.0/vanilla-masker.min.js"></script>

    <!-- Jquery CDNS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo"><img src="assets/img/linksun.png" alt class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#services">Soluções</a></li>
                    <li><a class="nav-link scrollto " href="#about">Nosso CRM</a></li>
                    <li><a class="nav-link scrollto" href="#features">Diferenciais</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contato</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <a class="botao-flutuante" href="http://api.whatsapp.com/send?1=pt_BR&phone=554738420103" target="_blank">
        <i class="fab fa-whatsapp"></i> Entrar em Contato
    </a>

    <section id="hero" class="d-flex align-items-center">

        <div class="container-fluid" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Maximize a eficiência gerencial de sua empresa de energia
                        solar</h1>
                    <h2>
                        Com nosso CMR integrado, você ainda terá propostas rápidas,
                        integração com distribuidores, gerenciamento de metas, projetos e
                        pós vendas.
                    </h2>
                    <div>
                        <a id="btn-agendar" class="btn-get-started scrollto">Agende uma demonstração</a>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt>
                </div>
            </div>
        </div>

    </section>
    <main id="main">

        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-orange">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                                </svg>
                                <i class="bx bxs-shapes"></i>
                            </div>
                            <h4>Multi Lojas<span style="color:red">(em breve)</span></h4>
                            <p>Gerencie o faturamento e controle de metas dos seus vendedores por loja.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                                </svg>
                                <i class='bx bx-objects-vertical-top'></i>
                            </div>
                            <h4>Multi tipos de Projetos<span style="color:red">(em breve)</span></h4>
                            <p>Controle todo os tipos de projetos fornecidos para os seus clientes. (vendas, limpeza de modulos, troca de padrão, etc).</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                                </svg>
                                <i class='bx bx-money-withdraw'></i>
                            </div>
                            <h4>Precificação de acordo com a politica de preço<span style="color:red">(em breve)</span></h4>
                            <p>Determine o caminho pelo qual será precificado os projetos da sua empresa.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                                </svg>
                                <i class="bx bx bx-task"></i>
                            </div>
                            <h4>Automação de Tarefas</a></h4>
                            <p>Automatize suas tarefas, e gerencie suas atividades com mais
                                agilidade e precisão.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                                </svg>
                                <i class='bx bx-filter-alt'></i>
                            </div>
                            <h4>Diversos Funis Personalizados</a></h4>
                            <p>Crie funis de acordo com as suas preferências, e agilize cada
                                vez mais as suas vendas.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                                </svg>
                                <i class="bx bx-layer"></i>
                            </div>
                            <h4>Automações Por Etapas</a></h4>
                            <p>Crie e gerencie bloqueios para cada etapa do seu projeto de
                                forma rápida e dinâmica.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                                </svg>
                                <i class="bx bx-file"></i>
                            </div>
                            <h4>Propostas e Orçamentos</a></h4>
                            <p>Gere propostas e orçamentos em poucos cliques com agilidade e
                                performace.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                                </svg>
                                <i class="bx bx-check"></i>
                            </div>
                            <h4>Controle de Metas</a></h4>
                            <p>Controle a metas de vendas de cada vendedores, e avalie seu
                                progresso nos gráficos de metas.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                                </svg>
                                <i class="bx bx-code-alt"></i>
                            </div>
                            <h4>Integração de APis junto aos Distribuidores</a></h4>
                            <p>Avalie as ofertas dos distribuidores de maneira
                                centralizada.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-4 col-6 text-center">

                        <span>+ 30.000</span>
                        <p>PROPOSTAS GERADAS</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">

                        <span>+37.000.000</span>
                        <p>EM VENDAS</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">

                        <span>+2.500</span>
                        <p>EM PROJETOS FECHADOS</p>
                    </div>

                </div>

            </div>
        </section>

        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                        <img src="assets/img/about3.png" class="img-fluid" alt>
                    </div>

                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3>Um CRM que atende suas necessidades</h3>
                        <p class="fst-italic">
                            Uma das principais vantagens do LinkSun é o seu CRM integrado,
                            que permite o gerenciamento eficiente de todos os contatos e
                            oportunidades de negócio

                        </p>
                        <ul style="text-align: justify;">
                            <li><i class="bi bi-check-circle"></i>Gestão
                                Centralizada: Todas as informações do cliente em um só
                                lugar, para uma visão completa e abrangente</li>

                            <li><i class="bi bi-check-circle"></i>Automação de Tarefas:
                                Elimine tarefas repetitivas e ganhe tempo
                                para se concentrar no que realmente importa.</li>
                            <li><i class="bi bi-check-circle"></i>Analise de dados: Insights
                                valiosos sobre o que você possa personalizar
                                suas estratégias de venda </li>

                        </ul>

                    </div>
                </div>

            </div>
        </section>

        <section id="features" class="features" style="background-color: #f8f9ff;">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Diferenciais do Linksun</h2>
                    <p>O LinkSun foi desenvolvido para atender às demandas de vendas e
                        gestão de projetos fotovoltaicos com foco no atendimento
                        personalizado ao cliente.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">

                        <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <i class='bx bx-objects-vertical-top'></i>
                            <h4>Multi tipos de Projetos</h4>
                            <p>Controle todo os tipos de projetos fornecidos para os seus clientes. (vendas, limpeza de modulos, troca de padrão, etc).</p>
                        </div>

                        <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <i class='bx bx-money-withdraw'></i>
                            <h4>Precificação de acordo com a politica de preço</h4>
                            <p>Determine o caminho pelo qual será precificado os projetos da sua empresa, de acordo com a politica de preço configurada.</p>
                        </div>

                        <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <i class='bx bxs-dashboard'></i>
                            <h4>CRM Integrado</h4>
                            <p>Com a ferramenta é possível acompanhar o status de cada
                                projeto, registrar todas as interações com os clientes e
                                manter um histórico completo de todas as atividades</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-transfer-alt"></i>
                            <h4>Proposta Rápida</h4>
                            <p>Crie propostas em poucos cliques de forma rápida e
                                eficiente,
                                incorporando os detalhes específicos do cliente,
                                garantindo a eficiência da equipe de vendas.
                            </p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-layer"></i>
                            <h4>Gestão de Etapas do Projeto</h4>
                            <p>Gerencie as etapas do seu projeto com facilidade, atráves do nosso crm integrado.</p>
                        </div>
                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-user-plus"></i>
                            <h4>Integração com Distribuidores</h4>
                            <p>Avalie as ofertas dos distribuidores de maneira
                                centralizada,
                                capacitando uma tomada de decisão alinhada com o
                                mercado.</p>
                        </div>

                        <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-file"></i>
                            <h4>Documentos Personalizados</h4>
                            <p>Personalize de acordo com a sua preferências seus
                                documentos
                                de proposta e geração de contrato.</p>
                        </div>
                    </div>
                    <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
                        <img src="assets/img/features.svg" alt class="img-fluid">
                    </div>
                </div>

            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contato</h2>

                </div>

                <div class="row">

                    <div class="col-lg-6 d-flex align-items-stretch">
                        <div class="info">

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Endereço</h4>
                                <p>Rua Fiscal Verdi Francisco Lenzi,
                                    153 - Centro Jaraguá do Sul, SC</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telefone</h4>
                                <p>(47) 3275-2250 | (47) 3842-0103</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>atendimento@linksun.com.br</p>
                            </div>

                            <div class="social-icons">
                                <a href="https://www.facebook.com/sistemalinksun?mibextid=LQQJ4d" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.instagram.com/sistemalinksun/" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="https://www.linkedin.com/company/sistemalinksun/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <div class="info">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3570.841266025069!2d-49.07917652457498!3d-26.493055276899877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94de946f4b3cb815%3A0x851fdb9921eb45d7!2sCustomax%20Servi%C3%A7os%20Ltda!5e0!3m2!1spt-BR!2sbr!4v1713286334264!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-md-6 footer-contact">
                        <h3>Sobre o Linksun</h3>
                        <p>
                            O linksun é um produto para empresas de energia
                            fotovoltaica<br>
                            desenvolvida pela empresa Customax Tecnologia!
                        </p>

                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>
                            Horários de Atendimento</h4>

                        <p>Segunda á sexta: 08:00 ás 17:00</p>



                    </div>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; 2024 <strong><span>Sistema Linksun</span></strong>,
                        um produto Customax.<a style="color: #fff;" href="privacidade">Consulte nossa
                            Política e Privacidade</a>
                    </div>
                    <div class="credits">

                        Desenvolvido por <a href="https://www.customax.com.br/">Customax Tecnologia.</a>

                    </div>
                </div>

            </div>

        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


    <?php include("includes/Cookies.php"); ?>


    <script>
        document.getElementById("btn-agendar").addEventListener("click", function() {
            // Swal fire
            Swal.fire({
                title: "Agende uma demonstração",
                html: '<input id="swal-input1" class="swal2-input" placeholder="Nome">' +
                    '<input id="swal-input2" class="swal2-input" placeholder="Cidade">' +
                    '<input id="swal-input3" class="swal2-input" placeholder="Email">',
                focusConfirm: false,
                showCancelButton: true,
                confirmButtonText: "Enviar",
                preConfirm: () => {
                    const nome = document.getElementById('swal-input1').value;
                    const cidade = document.getElementById('swal-input2').value;
                    const email = document.getElementById('swal-input3').value;
                    if (!nome || !cidade || !email) {
                        Swal.showValidationMessage('Por favor, preencha todos os campos');
                    }
                    return {
                        nome: nome,
                        cidade: cidade,
                        email: email
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Dados enviados",
                        html: `<p>Nome: ${result.value.nome}</p>` +
                            `<p>Cidade: ${result.value.cidade}</p>` +
                            `<p>Email: ${result.value.email}</p>`
                    });
                }
            });
        });
    </script>

    <!-- Scripts Links -->
    <script src="js/BuscaCookies.js?time=<?php echo time(); ?>"></script>
    <script src="js/EnviarEmail.js?time=<?php echo time(); ?>"></script>

</body>

</html>