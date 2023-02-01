<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Alsite DevTeam">

	<title>TITULO DO SITE</title>
	<link rel="shortcut icon" href="favicon.ico">

	<!-- build:css -->
	<link href="assets/css/app.css" rel="stylesheet">
	<!-- endbuild -->
	<style type="text/css">
		.py-3 {
			padding-top: 1rem !important;
			padding-bottom: 1rem !important;
		}

		footer {
			background-color: #e2e2e2;
			color: #393778;
		}

		.bag-whatsapp-alert {
			z-index: 1020;
			position: fixed;
			bottom: 120px;
			padding: 5px 7px;
			right: 156px;
			background: #616161;
			display: none;
			color: #fff;
			border-radius: 5px;
			font-size: 15px;
			width: auto;
		}

		.bag-whatsapp-alert-arrow {
			position: fixed;
			bottom: 128px;
			padding: 4px 7px;
			right: 150px;
			background: #616161;
			display: none;
			width: 15px;
			height: 15px;
			-webkit-transform: rotate(45deg);
			transform: rotate(45deg);
			z-index: 31;
		}

		.bloco-wthats .link-whats,
		.titulo {
			overflow: hidden;
			background-repeat: no-repeat;
		}

		.bloco-wthats {
			position: fixed;
			right: 46px;
			bottom: 89px;
			z-index: 100;
			width: 100px;
			height: 100px;
		}

		.bloco-wthats .aura,
		.bloco-wthats .link-whats {
			position: absolute;
			display: block;
			top: 50%;
			width: 70px;
			height: 70px;
			border-radius: 50%;
			-khtml-transform: translate(-50%, -50%);
			left: 50%;
		}

		.bloco-wthats .link-whats {
			z-index: 1;
			background-color: #44bb6e;
			background-image: url(./assets/img/whatsapp.png) !important;
			background-size: 55px !important;
			background-position: 50% 50%;
			background-size: 30px;
			-webkit-box-shadow: 6px 6px 25px 0 rgba(0, 0, 0, 0.3);
			box-shadow: 6px 6px 25px 0 rgba(0, 0, 0, 0.3);
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			-webkit-transition: all 0.3s ease;
			transition: all 0.3s ease;
		}

		.bloco-wthats .link-whats:hover {
			background-color: #16b84f;
		}

		.bloco-wthats .aura {
			background-color: #44bb6e;
			filter: alpha(opacity=100);
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
			-webkit-opacity: 1;
			-khtml-opacity: 1;
			-moz-opacity: 1;
			-ms-opacity: 1;
			-o-opacity: 1;
			opacity: 1;
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			-webkit-transition: width 1.5s, height 1.5s, opacity 2.5s;
			transition: width 1.5s, height 1.5s, opacity 2.5s;
			-webkit-animation-name: aura;
			animation-name: aura;
			-webkit-animation-duration: 2s;
			animation-duration: 2s;
			-webkit-animation-iteration-count: infinite;
			animation-iteration-count: infinite;
		}

		@-webkit-keyframes aura {
			0% {
				filter: alpha(opacity=100);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
				-webkit-opacity: 1;
				-khtml-opacity: 1;
				-moz-opacity: 1;
				-ms-opacity: 1;
				-o-opacity: 1;
				opacity: 1;
				width: 70px;
				height: 70px;
			}

			100% {
				filter: alpha(opacity=0);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
				-webkit-opacity: 0;
				-khtml-opacity: 0;
				-moz-opacity: 0;
				-ms-opacity: 0;
				-o-opacity: 0;
				opacity: 0;
				width: 150px;
				height: 150px;
			}
		}

		@keyframes aura {
			0% {
				filter: alpha(opacity=100);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
				-webkit-opacity: 1;
				-khtml-opacity: 1;
				-moz-opacity: 1;
				-ms-opacity: 1;
				-o-opacity: 1;
				opacity: 1;
				width: 70px;
				height: 70px;
			}

			100% {
				filter: alpha(opacity=0);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
				-webkit-opacity: 0;
				-khtml-opacity: 0;
				-moz-opacity: 0;
				-ms-opacity: 0;
				-o-opacity: 0;
				opacity: 0;
				width: 150px;
				height: 150px;
			}
		}

		@media (max-width: 766px) {
			.endereço_footer {
				width: 271px;
			}

			.imagem_footer {
				display: flex;
				flex-direction: column;
				justify-content: center;
				height: 340px !important;
			}

			.div_imagem {
				display: flex !important;
				justify-content: flex-start !important;
				width: 100% !important;
				height: 100% !important;
				align-items: center !important;
				flex-direction: column !important;
				padding-top: 100px !important;
			}

			.uk-open>.uk-modal-dialog {
				width: 100%;
			}

			.div_info {
				display: flex;
				flex-direction: column;
				align-items: center;
			}

			.bloco-wthats {
				bottom: 66px !important;
				right: 16px !important;
			}

			.bag-whatsapp-alert-arrow {
				bottom: 106px;
				right: 123px;
			}

			.bag-whatsapp-alert {
				bottom: 98px;
				right: 129px;
			}

			.footer {
				height: 1128px !important;
				background: #1b1f23;
			}

			.div_footer {
				height: 1300px !important;
			}

			.logo {
				margin-left: 0px !important;
			}

			.div_bannertopo {
				padding: 0px 50px !important;
				height: 190px;
			}

			.div_logo {
				height: 60px;
			}

			.div_banner {
				height: 105px !important;
			}

			.icons_footer {
				display: flex;
				flex-direction: row;
				align-items: center;
				justify-content: space-evenly;
			}

			.icon1 {
				width: auto;
			}

			.icon1 img {
				width: 100px;
			}

			.icon2 img {
				width: 170px;
			}

			.icon2 {
				width: auto;
			}
		}

		.info_footer {
			display: flex;
			align-items: center;
			padding: 2px;
		}

		.info_telefone {
			display: flex;
			align-items: baseline;
			margin-top: 7px;
		}

		.detales p {
			display: flex;
			flex-direction: column;
			align-items: center;
			font-size: 8px;
			font-family: 'Michroma', sans-serif;
			color: #f7b64a;
			letter-spacing: 2px;
		}

		.div_imagem {
			display: flex;
			align-items: center;
			justify-content: center;
			width: 100%;
			height: 100%;
		}

		.div_footer {
			background-color: #e2e2e2;
			display: flex;
			flex-direction: column;
			align-items: center;
			height: 377px;
			background: #40579a !important;
			justify-content: center;
		}

		.footer {
			height: 377px;
			background: #40579a !important;
		}

		.logo {
			margin-bottom: 12px;
			width: 220px;
			margin-left: 47px;
		}

		.imagem_footer {
			height: 306px;
			padding: 0px 30px;
		}

		.titulo_footer {
			height: 66px;
		}

		.titulo_footer h4 {
			text-align: left;
			color: #fff;
			font-family: 'Montserrat', sans-serif;
			Font-weight: bolder;
			font-size: 20px;
		}

		.texto1_footer {
			display: flex;
			margin-top: 11px;
		}

		.texto2_footer {
			margin-top: 11px;
		}

		.texto3_footer {
			margin-top: 11px;
		}

		.texto1_footer p {
			color: #fff;
			text-align: left;
			font-size: 13px;
		}


		.texto2_footer a {
			text-decoration: none;
		}

		.texto3_footer p {
			color: #fff;
			text-align: left;
			font-size: 14px;
		}

		.texto2_footer p {
			color: #fff;
			text-align: left;
			font-size: 16px;
			margin-bottom: 23px;

		}

		.texto2_footer i {
			margin-bottom: 23px;
		}

		.div_icons {
			display: flex;
			align-items: center;
			flex-direction: row;
			color: #fff;
		}

		.div_icons i {
			padding-right: 20px;
			font-size: 36px;
		}

		.localizacao p {
			color: #fff;
			text-align: left;
			font-size: 16px;
		}

		.iframe {
			width: 100%;
		}
	</style>
</head>
<footer class="footer">
	<div class="container div_footer">
		<div class="row vertical-align div_imagem">
			<div class="col-md-4 text-center imagem_footer">
				<div class="titulo_footer">
					<h4>MAPA</h4>
					<div style="position:relative">
						<div style="position: absolute; left: calc(10% + 47px); top: calc(50% + 5px); transform: translate(-50%, -50%); width: 170px; border-bottom: 7px solid #ffffff; border-radius: 60px;"></div>
					</div>
				</div>

				<div class="texto1_footer">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.612864815028!2d-47.38498757020356!3d-20.52209051838046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b0a66d69e38c83%3A0xbd1b417e72877e49!2sR.%20Jos%C3%A9%20do%20Patroc%C3%ADnio%2C%20Franca%20-%20SP%2C%2014401-199!5e0!3m2!1spt-BR!2sbr!4v1671629164511!5m2!1spt-BR!2sbr" height="221" style="border:0; border-radius:10px; width: 100% !important;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>

			<div class="col-md-4 text-center imagem_footer">
				<div class="titulo_footer">
					<h4>INFORMAÇÕES</h4>
					<div style="position:relative">
						<div style="position: absolute; left: calc(10% + 34px); top: calc(50% + 5px); transform: translate(-50%, -50%); width: 142px; border-bottom: 7px solid #ffffff; border-radius: 60px;"></div>
					</div>
				</div>
				<div class="texto3_footer">


					<div>
						<p>Rua José do Patrocínio-Vila Isabel, nº2501</p>
						<p>Franca - SP / CEP: 14.401.199</p>
					</div>

					<div>
						<p>Email: ccianamariafoliveira@gmail.com</p>
						<p>Telefone: (16) 3939 – 2829</p>
						<p>Celular: (16) 99633 – 5974 </p>
					</div>

				</div>
			</div>

			<div class="col-md-4 text-center imagem_footer">
				<div class="titulo_footer">
					<h4>HORÁRIO DE FUNCIONAMENTO</h4>
					<div style="position:relative">
						<div style="position: absolute; left: calc(10% + 6px); top: calc(50% + 5px); transform: translate(-50%, -50%); width: 87px; border-bottom: 7px solid #ffffff; border-radius: 60px;"></div>
					</div>

				</div>
				<div class="texto2_footer">


					<div>
						<div style="display: flex; align-items: center;">
							<p>Nossas Atividades Funcionam: </p>
						</div>
						<div style="display: flex; align-items: center;">
							<i style="color: #fff; padding-right: 10px;" class="fa-solid fa-calendar-days"></i>
							<p>Segunda-feira a Sexta-feira </p>
						</div>
						<div style="display: flex; align-items: center;">
							<i style="color: #fff; padding-right: 10px;" class="fa-regular fa-clock"></i>
							<p>Das 6:30 às 17:30 horas</p>
						</div>
					</div>
					<div class="row icons_footer">
						<div class="col-12 col-md-4 icon1">
							<img src="./assets/img/franca.png" alt="">
						</div>
						<div class="col-12 col-md-6 icon2">
							<img src="./assets/img/secretaria.png" alt="">
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="whatsapp">
		<span class="bag-whatsapp-alert" style="display: block;">Podemos Ajudar?</span>
		<span class="bag-whatsapp-alert-arrow" style="display: block;"></span>
		<div class="bloco-wthats" id="whatsappbtn">
			<a href="https://api.whatsapp.com/send?phone=5516996335974&text=&source=&data=" target="_blank" data-toggle-visibility="box_whatsapp" data-show-shadow="false" class="link-whats"></a>
			<div class="aura" data-ix="new-interaction"></div>
		</div>
		<audio hidden="hidden" id="whatsapp-song">
			<source src="assets/img/WhatsApp.mp3" type="audio/mp3" />
		</audio>
	</div>

</footer>

</html>