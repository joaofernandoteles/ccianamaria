<?php

require_once 'assets/include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Alsite DevTeam">

	<title>CCI Ana Maria Fernandes Oliveira</title>
	<link rel="shortcut icon" href="assets/img/logo_cci.png">
	<link rel="stylesheet" type="text/css" href="//site-assets.fontawesome.com/releases/v6.1.2/css/all.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:opsz@6..96&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">







	<!-- build:css -->
	<link href="assets/css/app.css" rel="stylesheet">
	<!-- endbuild -->

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/css/uikit.min.css" />

	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit-icons.min.js"></script>

</head>
<style>
	@font-face {
		font-family: maxwell;
		src: url("./assets/fonts/maxwell.regular.ttf");
	}

	@font-face {
		font-family: coolvetica;
		src: url("./assets/fonts/coolvetica rg.otf");
	}

	@font-face {
		font-family: droid_regular;
		src: url("./assets/fonts/droid-sans.regular.ttf");
	}

	@font-face {
		font-family: droid;
		src: url("./assets/fonts/droid-sans.bold.ttf");
	}

	@font-face {
		font-family: TrajanPro;
		src: url("./assets/fonts/TrajanPro-Regular.ttf");
	}

	@font-face {
		font-family: Justus;
		src: url("./assets/fonts/Justus-Roman.ttf");
	}

	@font-face {
		font-family: Cunia;
		src: url("./assets/fonts/Cunia.ttf");
	}

	@font-face {
		font-family: muli;
		src: url("./assets/fonts/muli.regular.ttf");
	}

	a {
		text-decoration: none;
	}

	/* The sticky class is added to the navbar with JS when it reaches its scroll position */
	.sticky {
		position: fixed;
		top: 0;
		width: 100%;
		z-index: 10;
	}

	/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
	.sticky+.content {
		padding-top: 60px;
	}

	.swiper {
		width: 100%;
		height: 100%;
	}

	.swiper-slide {
		text-align: center;
		font-size: 18px;
		background: #fff;

		/* Center slide text vertically */
		display: -webkit-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		-webkit-justify-content: center;
		justify-content: center;
		-webkit-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center;
	}

	.swiper-slide img {
		display: block;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.icon_produtos {
		color: black !important;
	}

	.uk-open>.uk-modal-dialog {
		background: #f3f3f3;
		width: 50%;
		border-radius: 10px;
	}

	.ref_box {
		height: 140px;
		display: flex;
		flex-direction: column;
		justify-content: space-evenly;
		align-items: flex-start;
	}

	.uk-modal-body>:last-child,
	.uk-modal-footer>:last-child,
	.uk-modal-header>:last-child {
		font-size: 19px;
	}

	[data-uk-cover],
	[uk-cover] {
		width: 435px !important;
		height: 435px !important;
	}

	.imagem_box {
		position: absolute;
		left: 50%;
		width: 60%;
		top: 50%;
		--uk-position-translate-x: -50%;
		--uk-position-translate-y: -50%;
		transform: translate(var(--uk-position-translate-x), var(--uk-position-translate-y));
	}

	.noticias {
		height: 1400px;
		background-color: #dcdcdc29;
		display: flex;
		flex-direction: column;
		justify-content: flex-start;
	}

	.parceiros {
		height: 650px;
		background-color: #dcdcdc29;
		display: flex;
		flex-direction: column;
		justify-content: flex-start;
	}

	@media (max-width: 992px) {
		.noticias {
			height: 732px;
		}

		.parceiros {
			height: 732px;
		}

		.div-produto {
			width: 48% !important;
		}
	}



	.p_rodape {
		color: #ffffff;
		font-family: verdana;
		margin-top: 7px
	}

	.noticias_info {
		display: flex;
		justify-content: center;
		padding: 20px;
		height: 412px;
	}

	.div-produto {
		width: 24% !important;
	}

	@media (max-width: 1199px) {
		.div-produto {
			width: 31% !important;
		}
	}


	@media (max-width: 766px) {

		.noticias_info {
			display: flex;
			justify-content: center;
			padding: 20px;
		}

		.noticias {
			height: max-content;
		}

		.parceiros {
			height: max-content;
		}


		.div-produto {
			width: 70% !important;
		}

		.uk-open>.uk-modal-dialog {
			width: 100%;
		}

		.p_rodape {
			font-size: 14px;
		}

		.imagem_box {
			max-width: 69% !important;
		}

		.espaco {
			padding: 38px 38px !important;
		}

		.row_de_noticias {
			margin-top: 0px !important;
		}

		.texto_parceiros {
			margin: 45px !important;
			width: 330px !important;

		}

		#franca {
			width: 150px !important;
		}

		#secretaria {
			width: 216px !important;
		}

		.img_noticia {
			width: 300px !important;
		}

		.div_logo img {
			width: 170px !important;
		}

		.header {
			color: #40579a !important;
		}

		.titulo_noticias h3 {
			font-size: 26px !important;
		}
	}

	.imagem_na_div {
		height: 74px;
		width: 118px;
		background-position: center;
		background-repeat: no-repeat;
		background-size: contain;
		overflow: hidden;

	}

	.titulo_noticias h3 {
		font-size: 33px;
		font-family: 'muli';
		font-weight: bold;
	}


	.div_calendario {
		width: 40px;
		display: flex;
		align-items: center;
		justify-content: center;
		background: #40579a;
	}

	.data {
		background: #000000;
		width: 100px;
		display: flex;
		align-items: center;
		justify-content: center;
		border-radius: 0px 10px 0px 0px;
	}

	.data p {
		color: #fff;
		margin: 0px;
		font-family: 'ADAM' !important;
		font-size: 13px;
	}

	.barra_blog {
		background: #40579a;
		width: 100%;
		height: 7px;
	}

	.info_blog {
		width: 100%;
		background: #ffffff;
		height: 105px;
		display: flex;
		align-items: flex-start;
		padding: 20px 30px 0px 30px;
		justify-content: center;
	}

	.info_blog p {
		margin: 0px;
		font-family: 'droid' !important;
		color: #3653a8;
		text-transform: uppercase;
		text-align: left;
		font-size: 12px;
	}

	.blog_texto p {
		color: #707070;
		text-align: left;
		font-family: 'droid_regular' !important;
		font-size: 11px;
		text-transform: inherit;
		padding-top: 12px;
		border-top: 1px solid #333;

		/* CSS PARA COLOCAR (...) */

		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 4;
		-webkit-box-orient: vertical;
	}

	.blog_texto {
		background: #ffffff;
		height: 100px;
		padding: 0px 30px 0px 30px;
		border-radius: 0px 0px 13px 13px;
		width: 100%;
	}


	.div_data {
		height: 35px;
		display: flex;
		justify-content: flex-start;
	}

	.div_blog {
		height: 39px !important;
		padding: 0px !important;
		display: flex;
		flex-direction: column;
		justify-content: flex-end;
	}

	.div_calendario i {
		color: #ffffff;
	}

	.div_noticias {
		border-radius: 13px 13px 13px 13px;
		box-shadow: 10px 10px 20px rgb(50 50 50 / 45%);
	}

	.div_parceiros {
		display: flex !important;
		margin-top: 50px;
		flex-direction: column;
		align-items: center;
		justify-content: center;
	}

	.simbolo_parceiros {
		display: flex;
		flex-direction: row;
		align-items: center;
	}


	.texto_parceiros {
		margin-top: 45px;
		width: 887px;
	}

	.texto_parceiros p {
		text-align: left;
		font-family: 'muli';
		text-align: left;
		font-size: 18px;
		font-weight: lighter;
		color: #3e3e3ee6;
	}

	.espaco {
		display: flex;
		flex-direction: column;
		align-items: center;
		padding: 0px 38px
	}


	#franca {
		width: 200px;
	}

	#secretaria {
		width: 286px;
	}

	.img_noticia {
		height: 225px;
		width: 315px;
		border-radius: 13px 13px 0px 0px;
	}


	.row_de_noticias {
		display: flex;
		align-items: center;
	}

	.icon_noticia {
		margin-top: 65px !important;
	}
</style>

<body class="d-flex flex-column h-100">

	<div role="main" class="flex-shrink-0">

		<section id="home">

			<?php include 'header.php'; ?>

			<?php include 'banner.php'; ?>
		</section>



		<section class="noticias" id="empresa">
			<div class="container text-center">
				<div class="container text-center" style="margin-top: 50px; height: 131px; display: flex; flex-direction: column; justify-content: center;">
					<div class="titulo_noticias">
						<h3>NOTICIAS E EVENTOS</h3>
					</div>

					<div style="position:relative">
						<div style="position: absolute; left: calc(50% + 0px); top: calc(50% + -5px); transform: translate(-50%, -50%); width: 160px; border-bottom: 3px solid #40579a;"></div>
					</div>
				</div>
			</div>
			<div class="container text-center" style="margin-bottom: 4%; max-width: 1000px;">
				<div class="row row_de_noticias" style="display: flex; align-items: center;">


					<?php
					$query = $con->prepare('CALL Proc_S_NoticiaRecente');
					$query->execute();
					$res = $query->fetchAll(PDO::FETCH_OBJ);
					$query->closeCursor();
					foreach ($res as $res) {
					?>
						<div class="icon_noticia col-12 col-md-4 form-group">
							<a href="texto_noticia.php?IDNoticia=<?= $res->IDNoticia ?>" style="text-decoration: none;">
								<div class="espaco">
									<div class="div_noticias">
										<div class="uk-inline">
											<div class="img_noticia" style="background: url('./adm/assets/img/noticia/<?= $res->Imagem ?>') !important; background-size: cover !important; background-position: top !important;">
											</div>
											<div class="uk-position-bottom uk-overlay div_blog">
												<!-- <div class="div_data">
													<div class="div_calendario"><i class="fa-light fa-calendar-days calendario"></i></div>
													<div class="data">
														<p>21/12/2022</p>
													</div>
												</div> -->
												<div class="barra_blog"></div>
											</div>
										</div>
										<div class="info_blog">
											<p class="nome_blog">
												<?= $res->Titulo ?>
											</p>
										</div>
										<div class="blog_texto">
											<p>
												<?= $res->Manchete ?>
											</p>
										</div>

									</div>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
	</div>

	<?php include 'footer.php'; ?>


	<!-- build:js -->
	<script src="assets/js/app.js"></script>
	<!-- endbuild -->
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper(".mySwiper", {
			slidesPerView: 3,
			spaceBetween: 30,
			slidesPerGroup: 3,
			loop: true,
			loopFillGroupWithBlank: true,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	</script>
	<script>
		// When the user scrolls the page, execute myFunction
		window.onscroll = function() {
			myFunction()
		};

		// Get the navbar
		var navbar = document.getElementById("wrap_menu");

		// Get the offset position of the navbar
		var sticky = wrap_menu.offsetTop;

		// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
		function myFunction() {
			if (window.pageYOffset >= sticky) {
				wrap_menu.classList.add("sticky")
			} else {
				wrap_menu.classList.remove("sticky");
			}
		}



		const elements = domento.querySelectorAll('.blog_texto')
		const LIMIT = 190

		for (let p of elements) {
			const aboveLimit = p.innerText.length > LIMIT
			const dotsOrEmpty = aboveLimit ? '...' : ''
			p.innerText = p.innerText.substring(0, LIMIT) + dotsOrEmpty
		}
	</script>


</body>

</html>