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
        <title>Autobotz UFMG | Equipe de Robótica da UFMG</title>

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
							<li class="active"><a href="#about"><strong>Sobre</strong></a></li>
							<li><a href="#project"><strong>Projetos</strong></a></li>
							<li><a href="#group"><strong>Grupo</strong></a></li>
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
                            
							<li><a class="btn-entrar" style="color: #000000;
								font-family: 'Heebo', sans-serif;
								font-weight: bold;
								text-transform: uppercase;
								font-size: 14px;
								background: #ffffff;
								padding: 0px 50px;
								display: inline-block;
								line-height: 39px;
								border: 1px solid #ffffff;
								border-radius: 20px;
								-webkit-transition: all 400ms linear 0s;
								-o-transition: all 400ms linear 0s;
								transition: all 400ms linear 0s;" href="membros.php">Junte-se a Equipe</a>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
            </div>
        </header>
        <!--================End Header Area =================-->
        
        <!--================End Header Area =================-->
        <section class="slider_two_area" id="home">
            <div id="main_slider_ten" class="rev_slider" data-version="5.3.1.6">
                <ul> 
                    <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <!-- LAYERS -->
                        <div class="slider_text_box">
                            <div class="tp-caption first_text" 
                            data-x="['right','right','center','center']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-hoffset="['20','20','0','0']" 
                            data-voffset="['-100','-100','-100','-100']" 
                            data-fontsize="['20','20','20','20','20']" 
                            data-lineheight="['30','30','30','30','30']"
                            data-width="['none','none','none','100%','100%']"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                            data-textAlign="['right','right','right','center']">
                            Autobotz UFMG</div>
                            
                            <div class="tp-caption secand_text" 
                            data-x="['right','right','center','center']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-hoffset="['25','36','0','0']" 
                            data-voffset="['-10','0','0','0','-20']"  
                            data-fontsize="['60','40','40','40','30']"
                            data-lineheight="['60','50','50','50','40']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['right','right','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"><br />Uma equipe de <br/> pesquisa e competição <br /> de robótica aplicada</div>
                            <div class="tp-caption third_text" 
                                data-x="['right','right','center','center','center']" 
                                data-y="middle" 
                                data-hoffset="['20','0','0','0']" 
                                data-voffset="['120','120','120','120','105']"
                                data-fontsize="['16','16','28','28']"
                                data-lineheight="['28','28','38','38']"
                                data-width="['450','840','820','600','450','350','380']"
                                data-height="none"
                                data-transform_idle="o:1;"
                                data-whitespace="normal"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="800" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05" 
                                data-textAlign="['right','right','center','center']">
                            </div>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-2 ten_mobile" 
                                data-x="['-50','-50','-50','-50']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['bottom','bottom','bottom','bottom']" 
                                data-voffset="['0','0','0','0']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="image" 
                                data-responsive_offset="on" 
                                data-frames='[{"from":"x:right(R);","speed":800,"to":"o:1;","delay":750,"ease":"Power4.easeOut"},{"delay":"wait","speed":800,"to":"x:left(R);","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;"><img src="img/home-slider/home-slide-robo-r.png" style="margin-left:-31%" alt="" data-no-retina> 
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="img/home-slider/slider-1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <!-- LAYERS -->
                        <div class="slider_text_box">
                            <div class="tp-caption first_text" 
                            data-x="['right','right','center','center']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-hoffset="['20','20','0','0']" 
                            data-voffset="['-100','-100','-100','-100']" 
                            data-fontsize="['20','20','20','20','20']" 
                            data-lineheight="['30','30','30','30','30']"
                            data-width="['none','none','none','100%','100%']"
                            data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                            data-textAlign="['right','right','right','center']">
                            Autobotz UFMG</div>
                            
                            <div class="tp-caption secand_text" 
                            data-x="['right','right','center','center']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-hoffset="['25','36','0','0']" 
                            data-voffset="['-10','0','0','0','-20']"  
                            data-fontsize="['60','40','40','40','30']"
                            data-lineheight="['60','50','50','50','40']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['right','right','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]">Desenvolvento tecnologias <br />Para o futuro.</div>
                            <div class="tp-caption third_text" 
                                data-x="['right','right','center','center','center']" 
                                data-y="middle" 
                                data-hoffset="['20','0','0','0']" 
                                data-voffset="['120','120','120','120','105']"
                                data-fontsize="['16','16','28','28']"
                                data-lineheight="['28','28','38','38']"
                                data-width="['450','840','820','600','450','350','380']"
                                data-height="none"
                                data-transform_idle="o:1;"
                                data-whitespace="normal"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="800" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                data-elementdelay="0.05" 
                                data-textAlign="['right','right','center','center']">
                            </div>
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-2 ten_mobile" 
                                data-x="['-50','-50','-50','-50']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['bottom','bottom','bottom','bottom']" 
                                data-voffset="['0','0','0','0']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="image" 
                                data-responsive_offset="on" 
                                data-frames='[{"from":"x:right(R);","speed":800,"to":"o:1;","delay":750,"ease":"Power4.easeOut"},{"delay":"wait","speed":800,"to":"x:left(R);","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--================End Header Area =================-->
        
        <!--================Ten Registration Area =================-->
        <section class="ten_registration">
        	<div class="container">
        		<div class="pull-left">
        			<h4>A Autobotz está sempre ansiosa para novas conexões. Apoie-nos!</h4>
        		</div>
        		<div class="pull-right">
        			<a class="theme_btn" href="apoiador.php"><strong>Torne-se um Apoiador</strong></a>
        		</div>
        	</div>
        </section>
        <!--================End Ten Registration Area =================-->
        
        <!--================Powerfull Area =================-->
        <section class="ten_powerfull_area p_100" id="about"> 
        	<div class="container">
        		<div class="ten_title">
        			<h2><span>Sobre</span> a Equipe</h2>
        			<p>Sempre buscamos promover a construção de conhecimento dentro do âmbito acadêmico e social em diferentes áreas.</p>
        		</div>
        		<div class="powerfull_inner">
        			<div class="row">
        				<div class="col-md-3 col-xs-6">
        					<div class="pw_item">
        						<i class="icofont icofont-code"></i>
        						<h4>Navegação</h4>
        					</div>
        				</div>
        				<div class="col-md-3 col-xs-6">
        					<div class="pw_item">
        						<i class="icofont icofont-memory-card"></i>
        						<h4>Eletrônica</h4>
        					</div>
        				</div>
        				<div class="col-md-3 col-xs-6">
        					<div class="pw_item">
        						<i class="icofont icofont-repair"></i>
        						<h4>Mecânica</h4>
        					</div>
        				</div>
        				<div class="col-md-3 col-xs-6">
        					<div class="pw_item">
        						<i class="icofont icofont-speed-meter"></i>
        						<h4>Gestão e Projetos</h4>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="ten_perfomance">
        			<div class="row">
        				<div class="col-md-6">
        					<div class="ten_p_img">
        						<img src="img/sobre.jpg" alt="">
        					</div>
        				</div>
        				<div class="col-md-6">
        					<div class="ten_p_text">
        						<h3><br/>Nossos objetivos e visões.</h3>
        						<p style="text-align: justify;" >A Autobotz UFMG é uma equipe de competição da Universidade Federal de Minas Gerais (UFMG), focada nas áreas de Mecatrônica, 
                                Robótica e Controle. Temos como objetivo desenvolver novas técnicas e aplicações no campo da robótica por meio de artigos 
                                e participações de competições, como a Competição Latino-Americana de Robótica, de forma a impulcionar o meio científico 
                                brasileiro.<br/>
                                A visão da equipe é contribuir para o crescimento ético-profissional dos membros e associados, de modo a criar pessoas 
                                conscientes e engajadas com a sociedade.</p>
        						<!--<a class="theme_btn" href="#">Read More</a>-->
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
		<!--================End Powerfull Area =================-->
		<!--================Server Price Area =================-->
        <div class="server_price_area" id="project">
            <div class="container">
                <div class="great_title">
                    <h2>Alguns Projetos</h2>
                    <p>Conheça alguns dos projetos desenvolvidos pela Autobotz ao longo desses anos.</p>
                </div>
                <div class="row service_price_inner">
                    <div class="col-md-4 col-xs-6">
                        <div class="server_price_item">
                            <div class="pirce_head">
                                <img src="img/logo-big-r.png" alt="">
                                
                            </div>
                            <div class="pirce_body">
                                <h5>AUTOBOAT</h5>
                                <p>Um robô baseado em um design<br />de aerobarco que tem como<br /> objeto localizar e transportar<br /> objetos das plataformas</p>
                                <div class="pirce_footer">
                                    <a href="autoboat.php">Saiba Mais +</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="server_price_item prime">
                            <div class="pirce_head">
                                <img src="img/logo-big-r.png" alt="">
                                
                            </div>
                            <div class="pirce_body">
                                <h5>ESTEIRA</h5>
								<p>Um veículo autônomo construído<br /> para IEEE Open para percorrer <br />diferentes tipos de solo e atender a <br />muitos vigias.</p>
                                <div class="pirce_footer">
                                    <a href="esteira.php">Saiba Mais +</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="server_price_item ultimate">
                            <div class="pirce_head">
                                <img src="img/logo-big-r.png" alt="">
                            </div>
                            <div class="pirce_body">
                                <h5>VSS SOCCER</h5>
								<p>Um time de futebol construído <br /> para competir na competição <br />O IEEE Very Small Size Soccer<br /> na CBR.</p>
                                <div class="pirce_footer">
                                    <a href="soccer.php">Saiba Mais +</a>
                                </div>
                            </div>
						</div>						
					</div>
                </div>
            </div>
        </div>
        <!--================End Server Price Area =================-->
        
        <!--================Ten Video Area =================-->
        <section class="ten_video_area">
        	<div class="left_ten">
        		<div class="ten_video_text">
        			<div class="text_v_text_inner">
        				<h4>Conheça-nos mais um pouco</h4>
						<p>Veja mais do nosso trabalho nesses 8 anos de equipe construindo e desenvolvendo robôs autônomos para grandes competições nacionais e internacionais.</p>
						<a class="popup-youtube" href="https://www.youtube.com/watch?v=5q4rUhv6HQo">Assistir o Video pelo Youtube.</a>
        			</div>
        		</div>
        	</div>
        	<div class="right_ten">
        		<div class="ten_video_img">
        			<img src="img/video/imagem-video.jpg" alt="">
        			<a class="popup-youtube ten_video_icon" href="https://www.youtube.com/watch?v=5q4rUhv6HQo"><img src="img/video/ten-video-icon.png" alt=""></a>
        			
        		</div>
        	</div>
        </section>
        <!--================End Ten Video Area =================-->
        
        <!--================Ten Watch Area =================-->
        <section class="ten_watch_area">
        	<div class="left_watch">
        		<div class="left_w_text">
        			<div class="watch_text_item">
        				<h4> Navegação</h4>
        				<p>Controle por visão computacional e sensoriamento para autônomia e inteligencia do robô.</p>
        			</div>
        			<div class="watch_text_item">
        				<h4>Mecânica</h4>
        				<p>Desenvolvimento de um projeto mecânico estrutural balanceado que permita boa articulação.</p>
        			</div>
        		</div>
        	</div>
        	<div class="right_watch">
        		<div class="right_w_text">
        			<div class="watch_text_item_two">
        				<h4>Eletrônica</h4>
        				<p>Elaboração e confecção de circuitos eletrônicos eficientes e que integre a mecânica e navegação.</p>
        			</div>
        			<div class="watch_text_item_two">
        				<h4>Gestão de Projetos</h4>
        				<p>Gerenciamento e coordenação técnicas, conhecimentos e habilidades conclusão de projetos robóticos.</p>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Ten Watch Area =================-->
        
        <!--================Ten Newsletter Area =================-->
        <section class="ten_newsletter_area" id="group">
        	<div class="container">
        		<div class="row newsletter_inner">
        			<div class="col-md-6">
        				<div class="left_ns_text">
        					<!--<h3></h3>-->
        				</div>
        			</div>
        			<div class="col-md-6">
        				<div class="right_ns_text">
        					<h3>Inscreva na Newsletter para saber das novidades.</h3>
        					<p>Fique sempre atualizados dos nossos avanços e conquistas!</p>
                            <p>
                                <?php 
                                    //Recuperando o valor da variável global, os erro de login.
                                        if(isset($_SESSION['MensagemNewsletterErro'])){
                                            echo $_SESSION['MensagemNewsletterErro'];
                                            unset($_SESSION['MensagemNewsletterErro']);
                                }?>
                            </p>
                            <form action="acess/newsletter.php" method="post">
                                <div class="input-group">                                
                                    <input type="email" name="email" class="form-control" placeholder="Insire seu e-mail">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button submit" value="submit"><i class="icofont icofont-envelope-open"></i></button>
                                    </span>                                
                                </div>
                            </form>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Ten Newsletter Area =================-->
        
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>