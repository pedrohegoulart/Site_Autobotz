<?php
	//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Pedro Goulart">
        <meta name="description" content="A Autobotz UFMG é uma equipe de competição da Universidade Federal de Minas Gerais (UFMG), 
        focada nas áreas de Mecatrônica, Robótica e Controle.">
        <meta name="keywords" content="Robótica, Mecatrônica, desenvolvimento, UFMG, robots, Mechatronics, development, MACRO, ROS, machine learning, 
        competições, LARC OPEN, IEEE">
        
        <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Autobotz UFMG | Membros</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/icofont.css" rel="stylesheet">
        <link href="vendors/linear-icon/style.css" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/swiper/css/swiper.min.css" rel="stylesheet">
        <link href="vendors/flipster-slider/jquery.flipster.min.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
    <body data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="100">
       
       <div id="preloader">
            <div id="preloader_spinner">
				<div class="pre_inner">
					<div class="dot dot-1"></div>
					<div class="dot dot-2"></div>
					<div class="dot dot-3"></div>
				</div>
            </div>
        </div>
       
		<!--================Header Area ===================-->
		<header class="dash_tp_menu_area nine_menu">
            <div class="container">
            	<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><img src="img/logo-branco-r.png" alt=""></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="#Support"><strong>Apoio</strong></a></li>
							<li><a href="index.php#project"><strong>Projetos</strong></a></li>
							<li><a href="index.php#group"><strong>Grupo</strong></a></li>
							<li><a class="btn-entrar" style="color: #fffff;
								font-family: 'Heebo', sans-serif;
								font-weight: bold;
								text-transform: uppercase;
								font-size: 14px;
								background: #c9343c;
								padding: 0px 50px;
								display: inline-block;
								line-height: 39px;
								border: 3px solid #fffff;
								border-radius: 20px;
								-webkit-transition: all 400ms linear 0s;
								-o-transition: all 400ms linear 0s;
								transition: all 400ms linear 0s;" href="apoiador.php">Torne-se um Apoiador</a>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
            </div>
        </header>
        <!--================End Header Area =================-->
        
        <!--================Nine Clients Area =================-->
        <section class="clients_count_nine">
        	<div class="container">
        		<div class="row clients_count_inner">
        			
        		</div>
        	</div>
        </section>
        <!--================End Nine Clients Area =================-->
        
        <!--================Start Screenshot Area =================-->
        <section class="screenshot_area_two" id="screenshot">
            <div class="screenshot_left">
                <div class="screenshot_tab">
                    <div class="left_title">
                        <h2>Áreas de Desenvolvimento</h2>
                    </div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mecânica</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Eletrônica</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Navegação</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Gestão</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home" style="text-align: justify;">
							<p>A área de Mecânica da equipe é responsável por projetar, desenvolver e dimensionar os sistemas mecânicos presentes em nossos robôs. Sempre 
							buscando a solução mais otimizada possível para o problema a ser solucionado.
							<br/><br/>Os membros da Mecânica da Autobotz atuam em áreas como:
								<dl>
									<li>Processos de Fabricação;</li>
									<li>Análise Estrutural;</li>
									<li>Mecanismos de Transmissão;</li>
									<li>Dinâmica de Manipuladores;</li>
									<li>Desenhos Técnicos 3D;</li>
									<li>Simulação de Materiais.</li>
								</dl>
							</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile" style="text-align: justify;">
							<p>A área de Eletrônica da equipe é responsável por projetar, desenvolver e dimensionar os circuitos elétricos e a central de processamento dos 
							robôs. Sempre buscando fazer seu trabalho de forma organizada, para obter não só bons resultados, mas também uma maior facilidade de manutenção.
							<br/><br/>Os membros da Eletrônica da Autobotz atuam em áreas como:
								<dl>
									<li>Emissão e Processamento de Sinal;</li>
									<li>Elaboração e Confecção de Circuitos;</li>
									<li>Dimensionamento de Batérias;</li>
									<li>Dinâmica de Manipuladores;</li>
									<li>Microeletrônica;</li>
									<li>Dimensionamento de Atuadores.</li>
								</dl>
							</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages" style="text-align: justify;">
							<p>A área de Navegação da equipe é responsável por elaborar, desenvolver e programar softwares que irão fazer parte da central de 
							processamento dos robôs. Sempre buscando fazer seu trabalho de forma organizada, prezando as boas práticas e correção de possíveis 
							bugs no sistema.
							<br/><br/>Os membros da Navegação da equipe atuam em áreas como:
								<dl>
									<li>Visão Computacional;</li>
									<li>Inteligência Artificial;</li>
									<li>Controle de Sistemas Eletrônicos;</li>
									<li>Machine Learning;</li>
									<li>ROS (Robot Operating System);</li>
									<li>Simulação de Sistemas Robóticos.</li>
								</dl>
							</p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings" style="text-align: justify;">
							<p>A área de Gestão da equipe é responsável por criar publicidade, comunicar os feitos da equipe para a sociedade e promover 
							parcerias institucionais e financeiras. Buscando sempre mostrar a importância da robótica no dia a dia do cidadão comum e tentando 
							ao máximo democratizar o acesso à informação sobre a área.
							<br/><br/>Os membros da Gestão da equipe atuam em áreas como:
								<dl>
									<li>Gestão de Projetos;</li>
									<li>Logística;</li>
									<li>Marketing;</li>
									<li>Recursos Humanos;</li>
									<li>Finanças.</li>
								</dl>
							</p>
                        </div>
                    </div>
                </div>
            </div>
            <div >
				<img src="img/Projects/Autoboat/img-plataforma4.jpg" alt="">
        	</div>
            
        </section>
        <!--================End Screenshot Area =================-->


		<!--==================== Start sc clients logo area ====================-->
		<section class="sc-clients-logo-area" style="background-color:#f3f1ee" id="Support">
                <div class="container">
                    <div class="sc-clients-slider owl-carousel">
						<div class="item">
                            <a href="#"><img src="img/cph-logo-r.png" alt="" height="75px"></a>
                        </div>                        
                        <div class="item">
							<a href="#"><img src="img/UFMG-logo-r.png" alt="" height="75px" ></a>
                        </div>
                        <div class="item">
							<a href="#"><img src="img/macro.png" alt=""  height="75px" ></a>
                        </div>                        
                    </div>
                </div>
        </section>
        <!--==================== End sc clients logo area ====================-->
		
			<!--====================Seve Contact area ====================-->
		<section class="contact_seven_area violet" id="contact">
			<div class="main_title2 gray">
				<h2>Contate-nos</h2>
				<p>Se você deseja apoiar nossa equipe, pode entrar em contato conosco diretamente pelo formulario abaixo ou enviando um e-mail para
					autobotz.ufmg@gmail.com.</p></br></br>
				<h3 style="color:#c9343c;">
					<?php 
						//Recuperando o valor da variável global, os erro de login.
							if(isset($_SESSION['MensagemMembroErro'])){
								echo $_SESSION['MensagemMembroErro'];
								unset($_SESSION['MensagemMembroErro']);
					}?>
				</h3>
			</div>
			<div class="contact_seven_box">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<form class="contact_us_form row" action="acess/membro.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="name" name="nome" placeholder="Nome">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="phone" name="curso" placeholder="Curso">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="subject" name="area" placeholder="Área">
                                </div>
                                <div class="form-group col-lg-12">
                                    <textarea class="form-control" name="mensagem" id="message" rows="1" placeholder="Mensagem"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" value="submit" class="btn theme_btn form-control">Enviar</button>
                                </div>
                            </form>
						</div>
						<div class="col-md-4">
							<div class="contact_details_seven">
								<div class="media">
									<div class="media-left">
										<i class="icofont icofont-social-google-map"></i>
									</div>
									<div class="media-body">
										<p>Sala 33 - CPH UFMG<br />Rua D, 43, Pampulha<br />Belo Horizonte - MG</p>
									</div>
								</div>
								<!--<div class="media">
									<div class="media-left">
										<i class="icofont icofont-android-nexus"></i>
									</div>
									<div class="media-body">
										<a href="tel:(+00)9933247"><p>(+00) 99 33 247</p></a>
									</div>
								</div>-->
								<div class="media">
									<div class="media-left">
										<i class="icofont icofont-envelope"></i>
									</div>
									<div class="media-body">
										<a href="mailto:Info@fabiocode.com"><p>autobotz.ufmg@gmail.com</p></a>
									</div>
								</div>
								<ul>
									<li><a href="https://www.facebook.com/autobotzufmg/"><i class="icofont icofont-social-facebook"></i></a></li>
            						<li><a href="https://www.linkedin.com/in/autobotz-ufmg-0a44001a1/"><i class="icofont icofont-social-linkedin"></i></a></li>
            						<li><a href="https://www.youtube.com/channel/UC24N0U7BnWwNMfYMeS8n9GQ"><i class="icofont icofont-social-youtube"></i></a></li>
									<li><a href="https://www.instagram.com/autobotz.ufmg/?hl=pt-br"><i class="icofont icofont-social-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="contact_seven_map">
				<div id="map" class="map row m0"></div>
				<script>
					var map;
					function initMap() {
						var autobotz_loc = {lat: -19.874889, lng: -43.967773};
						map = new google.maps.Map(document.getElementById('map'), {center: autobotz_loc, zoom: 16});
						var marker = new google.maps.Marker({position: autobotz_loc, map: map, icon:'/img/marcador-r2.png'});



						/*var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: iconBase + 'parking_lot_maps.png'
  });*/
					}
				</script>
			</div>
		</section>
		<!--====================End Seve Contact area ====================-->

		<!--================Ten Say Area =================-->
        <section class="ten_say_area p_100">
        	<div class="container">
        		<div class="ten_title">
					<h3>Nossa Filosofia</h3>
					<h2><br />"Você pode encarar um <span>erro</span> como uma besteira a ser esquecida ou como um resultado que aponta uma <span>nova direção</span>."</h2>
        			<p>- Steve Jobs.</p>
        		</div>
        		<div class="ten_say_slider owl-carousel">
        		
        		</div>
        	</div>
        </section>
        <!--================End Ten Say Area =================-->
		
        <!--================Footer Area =================-->
        <footer class="ten_footer_area">
            <div class="ten_footer_widget">
            	<div class="container">
            		<div class="row">
            			<div class="col-md-5 col-xs-6">
            				<aside class="t_f_widget t_ab_widget"> 
            					<img src="img/logo-branco-r.png" alt="">
            					<h4>Equipe Autobotz UFMG</h4>
            					<p>Autobotz é um grupo de pesquisa e competição da Universidade Federal de Minas Gerais (UFMG) focado em mecatrônica, controle e robótica. Nosso objetivo é participar de competições e impulsionar a ciência.</p>
            				</aside>
            			</div>
            			<div class="col-md-3 col-xs-6">
            				<aside class="t_f_widget t_link_widget"> 
            					<div class="ten_f_title">
            						<h3>Guias</h3>
            					</div>
            					<ul>
            						<li><a href="index.php"><i class="icofont icofont-thin-right"></i> Home</a></li>
            						<li><a href="#about"><i class="icofont icofont-thin-right"></i> Sobre</a></li>
            						<li><a href="#project"><i class="icofont icofont-thin-right"></i> Projetos</a></li>
            						<li><a href="#group"><i class="icofont icofont-thin-right"></i> Grupo</a></li>
            						<li><a href=""><i class="icofont icofont-thin-right"></i> Apoiador</a></li>
            						<li><a href=""><i class="icofont icofont-thin-right"></i> Entre na Equipe</a></li>
            					</ul>
            				</aside>
            			</div>
            			<div class="col-md-4 col-xs-12">
            				<aside class="t_f_widget t_contact_widget"> 
            					<div class="ten_f_title">
            						<h3>Contato</h3>
            					</div>
								<p>Endereço:</p>
								<h4>Sala 33 - CPH UFMG, Rua D, Número 43, Pampulha, Belo Horizonte - MG, 31360-420</h4>
            					<!--<h5>Telefone: </h5>-->
								<p>E-mail:</p>
								<h4>autobotz.ufmg@gmail.com</h4>
            					<!--<a class="send_bent" href="#">Send Message</a>-->
            					<h6>Redes Sociais</h6>
            					<ul>
            						<li><a href="https://www.facebook.com/autobotzufmg/"><i class="fa fa-facebook"></i></a></li>
            						<li><a href="https://www.linkedin.com/in/autobotz-ufmg-0a44001a1/"><i class="fa fa-linkedin"></i></a></li>
            						<li><a href="https://www.youtube.com/channel/UC24N0U7BnWwNMfYMeS8n9GQ"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="https://www.instagram.com/autobotz.ufmg/?hl=pt-br"><i class="fa fa-instagram"></i></a></li>
            					</ul>
            				</aside>
            			</div>
            		</div>
            	</div>
            </div>
            <div class="ten_f_copyright">
            	<div class="container">
            		<p class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | powered by Colorlib <br/>Edited by Pedro Goulart</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
            	</div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra Plugin -->
        <script src="vendors/parallax/jquery.parallax-scroll.js"></script>
        <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/flexslider/flex-slider.js"></script>
        <script src="vendors/flexslider/mixitup.js"></script>
        <script src="vendors/nice-selector/jquery.nice-select.min.js"></script>
        <script src="vendors/swiper/js/swiper.min.js"></script>
        <script src="vendors/flipster-slider/jquery.flipster.min.js"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC5xzJ2vbqtp5bU6G9M01M_d6cKW37uVk&callback=initMap" async defer></script>
        <script src="js/gmaps.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>