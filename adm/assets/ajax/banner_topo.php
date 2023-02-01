<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
	$query = $con->prepare('CALL Proc_S_U_BannerTopo (:IDBannerTopo)');
	$query->bindValue(':IDBannerTopo', $_POST['IDBannerTopo']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	echo json_encode($res);
}

if ($_GET['option'] == 'insert') {

	$extensao1 = explode('.', $_FILES['Imagem']['name']);
	$novo_nome =  md5(date('Y-m-d H:i:s')) . '.' . $extensao1[count($extensao1) - 1];
	$destino1 = '../img/bannertopo/' . $novo_nome;
	move_uploaded_file($_FILES['Imagem']['tmp_name'], $destino1);


	$query = $con->prepare('CALL Proc_I_BannerTopo (:Imagem)');
	$query->bindValue(':Imagem', $novo_nome);
	$query->execute();
}

if ($_GET['option'] == 'update') {

	$query = $con->prepare('CALL Proc_S_U_BannerTopo (:IDBannerTopo)');
	$query->bindValue(':IDBannerTopo', $_POST['IDBannerTopo']);
	$query->execute();
	$res = $query->fetch(PDO::FETCH_OBJ);
	$novo_nome = $res->Imagem;
	$unlink = '../img/bannertopo/' . $res->Imagem;
	$query->closeCursor();


	if (isset($_FILES['Imagem']['name']) && !empty($_FILES['Imagem']['name'])) {
		unlink($unlink);	
		$extensao1 = explode('.', $_FILES['Imagem']['name']);
		$novo_nome =  md5(date('Y-m-d H:i:s')) . '.' . $extensao1[count($extensao1) - 1];
		$destino1 = '../img/bannertopo/' . $novo_nome;
		move_uploaded_file($_FILES['Imagem']['tmp_name'], $destino1);
	}

	$query = $con->prepare('CALL Proc_U_BannerTopo (:IDBannerTopo, :Imagem)');
	$query->bindValue(':IDBannerTopo', $_POST['IDBannerTopo']);
	$query->bindValue(':Imagem', $novo_nome);
	$query->execute();
}

if ($_GET['option'] == 'delete') {
	$query = $con->prepare('CALL Proc_D_BannerTopo (:IDBannerTopo)');
	$query->bindValue(':IDBannerTopo', $_POST['IDBannerTopo']);
	$query->execute();
	$query->closeCursor();
}
