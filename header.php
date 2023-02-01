<!DOCTYPE html>
<html lang="pt-br" class="h-100" style="overflow-x: hidden;">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Alsite DevTeam">

	<title>TITULO DO SITE</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="//site-assets.fontawesome.com/releases/v6.1.2/css/all.css">

	<!-- build:css -->
	<link href="assets/css/app.css" rel="stylesheet">
	<!-- endbuild -->

</head>

<style>
	.header {
		font-size: 12px !important;
		font-weight: 600 !important;
		text-transform: capitalize !important;
		font-family: 'Poppins', sans-serif !important;
		color: #fff !important;
		line-height: 70px !important;
		border: none !important;
	}

	.div-1_header {
		background-color: #fff;
		height: 52px;
		max-width: 100% !important;
	}

	.div-2_header {
		height: 52px;
		display: flex;
		align-items: flex-end;
		max-width: 100% !important;
	}

	.ul-header {
		padding: 0 170px !important;
		display: flex;
		justify-content: center;
	}

	.li-header {
		display: flex !important;
		height: 35px;
		flex-direction: column;
		justify-content: center;
	}

	.li-header button {
		height: 17px;
		display: flex;
		flex-direction: row;
		justify-content: center;
		align-items: center;
	}

	.li-header i {
		padding-left: 10px;
	}

	@media (max-width: 680px) {
		.header {
			font-size: 16px !important;
		}
	}

	@media (max-width: 520px) {
		.header {
			font-size: 14px !important;
			text-decoration: none;
			color: #40579a !important;
		}

		.li-header {
			font-size: 14px !important;
			width: 271px;
		}

		.wrap_menu {
			height: 48px;
		}
	}

	@media (max-width: 766px) {
		.div_logo img {
			width: 170px !important;
		}

		.div_noticias {
			width: 300px !important;
		}
	}

	.container,
	.container-fluid,
	.container-sm,
	.container-md,
	.container-lg,
	.container-xl,
	.container-xxl {
		width: 100%;
		padding-right: 0 !important;
		padding-left: 0 !important;
		margin-right: auto;
		margin-left: auto;
	}

	header .wrap_menu {
		background-color: #ffffff !important;
	}

	.wrap_menu {
		height: 60px;
		display: flex;
		align-items: flex-end;
	}

	.li_somos a {
		color: #fff !important;
		font-size: 12px;

	}

	.li_somos {
		display: flex;
		flex-direction: column;
		align-items: center;
		font-family: 'muli' !important;
		font-size: 11px !important;
		font-weight: lighter !important;
	}

	.li_somos:hover a {
		color: #0e90c6 !important;
	}

	.li-header:hover button {
		color: #0e90c6 !important;
	}

	.header {
		font-family: 'muli' !important;
		font-size: 11px !important;
		font-weight: lighter !important;
	}

	.quem_somos {
		font-family: 'muli' !important;
		font-size: 11px !important;
		font-weight: lighter !important;
		color: #40579a !important;
		text-decoration: none;
	}

	.div_logo img {
		width: 320px;
	}

	.div_logo {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
	}

	.mobile-menu>ul>li ul li {
		border-bottom: 1px solid #000000 !important;
	}

	#topbar {
		background-color: #f9f9f9;
		height: 220px;
		display: flex;
		flex-direction: column;
		justify-content: center;
	}

	.div_bannertopo {
		height: 155px;
		padding: 0px 140px;
	}
</style>


<header>

	<div id="topbar">
		<div class="container topo">
			<div class="row div_bannertopo">
				<div class="col-12 col-md-4 text-center div_logo">
					<a href="index.php">
						<img src="assets/img/logo_cci.png" alt="">
					</a>
				</div>
				<?php
				$query = $con->prepare('CALL Proc_S_BannerTopo');
				$query->execute();
				$res = $query->fetchAll(PDO::FETCH_OBJ);
				$query->closeCursor();
				foreach ($res as $res) {
				?>
					<div class="col-12 col-md-8 div_banner" style="background: url(./adm/assets/img/bannertopo/<?= $res->Imagem ?>) !important; background-size: cover !important; background-position: center !important; display: flex; justify-content: center; align-items: flex-end; border-radius: 5px;">
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
	<div class="wrap_menu" class="div-1_header" id="wrap_menu" style="height: 40px;">
		<div class="container" class="div-2_header" style="max-width: 100% !important">
			<nav id="main-menu" style=" height: 40px; background-color: #40579a; display: flex; flex-direction: column; justify-content: center;" class="">
				<img class="pull-nav" src="assets/img/menu_imagem.png" alt="menu-icon" style="width: 13px;">
				<ul class="text-center menu d-md-flex align-items-center justify-content-md-around ul-header" style="padding: 0 170px;">
					<li class="menu-item li-header"><a href="index.php" class="header">HOME</a></li>
					<li class="uk-inline li-header">
						<button class="uk-button uk-button-default header" type="button">QUEM SOMOS <i class="fa-solid fa-caret-down"></i></button>
						<div uk-dropdown="pos: bottom-center; mode: click; animation: reveal-top; animate-out: true; duration: 700" style="background: #40579a; box-shadow: none;">
							<ul class="uk-nav uk-dropdown-nav">
								<li class="li_somos">
									<a href="#">QUEM SOMOS?</a>
								</li>
								<li class="uk-nav-divider"></li>
								<li class="li_somos">
									<a href="#">NOSSA HISTÓRIA</a>
								</li>
								<li class="uk-nav-divider"></li>
								<li class="li_somos">
									<a href="#">INFRAESTRUTURA</a>
								</li>
								<li class="uk-nav-divider"></li>
								<li class="li_somos">
									<a href="#">COLABORADORES</a>
								</li>
							</ul>
						</div>

					</li>
					<li class="menu-item li-header"><a href="" class="header">PROPOSTA PEDAGÓGICA</a></li>
					<li class="menu-item li-header"><a href="noticia.php" class="header">NOTÍCIAS E EVENTOS</a></li>
					<li class="menu-item li-header"><a href="transparencia.php" class="header">TRANSPARÊNCIA</a></li>
					<li class="menu-item li-header"><a href="" class="header">AGENDA</a></li>
					<li class="menu-item li-header"><a href="https://wa.me/5516996335974 " class="header" target="_blank">CONTATO</a></li>
				</ul>
			</nav>
		</div>
	</div>

</header>

<div class="mobile-menu-cover"></div>
<!-- MOBILE MENU -->
<nav class="mobile-menu" style="background: #f9f9f9 !important;">

	<a href="index.php">
		<img src="assets/img/logo_cci.png" alt="logo" class="img-fluid">
	</a>

	<svg class="svg-plus pull-nav">
		<use xlink:href="#svg-plus"></use>
	</svg>

	<!-- MENU LIST -->
	<ul class="menu">

		<li class="menu-item li-header"><a href="index.php" class="header">HOME</a></li>

		<li>
			<a href="#" class="quem_somos">QUEM SOMOS
				<!-- SVG ARROW -->
				<svg class="svg-arrow">
					<use xlink:href="#svg-arrow"></use>
				</svg>
				<!-- /SVG ARROW -->

			</a>
			<ul style=" background: none; border-top: none;">
				<li>
					<a href="#" class="quem_somos">QUEM SOMOS?</a>
				</li>
				<li>
					<a href="#" class="quem_somos">NOSSA HISTÓRIA</a>
				</li>
				<li>
					<a href="#" class="quem_somos">INFRAESTRUTURA</a>
				</li>
				<li>
					<a href="#" class="quem_somos">COLABORADORES</a>
				</li>
			</ul>
		</li>
		<li class="menu-item li-header"><a href="" class="header">PROPOSTA PEDAGÓGICA</a></li>
		<li class="menu-item li-header"><a href="noticia.php" class="header">NOTÍCIAS E EVENTOS</a></li>
		<li class="menu-item li-header"><a href="transparencia.php" class="header">TRANSPARÊNCIA</a></li>
		<li class="menu-item li-header"><a href="" class="header">AGENDA</a></li>
		<li class="menu-item li-header"><a href="https://wa.me/5516996335974" class="header" target="_blank">CONTATO</a></li>

	</ul>

	<svg style="display: none;">
		<symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
			<path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
			L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z" />
		</symbol>
	</svg>

	<svg style="display: none;">
		<symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
			<rect x="5" width="3" height="13" />
			<rect y="5" width="13" height="3" />
		</symbol>
	</svg>

</nav>

</html>