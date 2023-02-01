<?php

require_once 'assets/include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/css/uikit.min.css" />

	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit-icons.min.js"></script>

</head>

<section id="banner" style="height: max-content;display: flex;align-items: flex-end; overflow-x: hidden;">

	<div class="uk-position-relative uk-visible-toggle uk-light" autoplay="false" autoplay-interval="4000" tabindex="-1" uk-slider style="width: 100%; overflow-x: hidden;">

		<ul class="uk-slider-items uk-child-width-1-1" style="display: flex; flex-direction: row; align-items: center;">

			<?php
			$query = $con->prepare('CALL Proc_S_Banner');
			$query->execute();
			$res = $query->fetchAll(PDO::FETCH_OBJ);
			$query->closeCursor();
			foreach ($res as $res) {
			?>
				<li style="height:100%; margin-right: 12px">
					<div class="row">
						<div class="col-12 col-md-12 uk-panel" style="background: url(./adm/assets/img/banner/<?= $res->Imagem ?>) !important; background-size: cover !important; background-position: center !important; display: flex; justify-content: center; align-items: flex-end; height:425px">
						</div>
					</div>
				</li>
			<?php } ?>

		</ul>

		<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
		<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

	</div>

</section>

</html>