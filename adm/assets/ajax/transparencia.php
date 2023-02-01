<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
    $query = $con->prepare('CALL Proc_S_U_Transparencia (:IDTransparencia)');
    $query->bindValue(':IDTransparencia', $_POST['IDTransparencia']);
    $query->execute();
    $res = $query->fetch(PDO::FETCH_OBJ);
    echo json_encode($res);
}

if ($_GET['option'] == 'insert') {


    $extensao1 = explode('.', $_FILES['Arquivo']['name']);
    $novo_nome =  md5(date('Y-m-d H:i:s')) . '.' . $extensao1[count($extensao1) - 1];
    $destino1 = '../arquivos/transparencia/' . $novo_nome;
    move_uploaded_file($_FILES['Arquivo']['tmp_name'], $destino1);

    //SALVA NO BANCO
    $query = $con->prepare('CALL Proc_I_Transparencia (:Nome, :Arquivo, :Categoria)');
    $query->bindValue(':Nome', $_POST['Nome']);
    $query->bindValue(':Arquivo', $novo_nome);
    $query->bindValue(':Categoria', $_POST['IDCategoria']);
    $query->execute();
    $query->closeCursor();
}

if ($_GET['option'] == 'update') {

    $query = $con->prepare('CALL Proc_S_U_Transparencia (:IDTransparencia)');
    $query->bindValue(':IDTransparencia', $_POST['IDTransparencia']);
    $query->execute();
    $res = $query->fetch(PDO::FETCH_OBJ);
    $novo_nome = $res->Arquivo;
    $unlink = '../arquivos/transparencia/' . $res->Arquivo;
    $query->closeCursor();

    if (isset($_FILES['Arquivo']['name']) && !empty($_FILES['Arquivo']['name'])) {
        unlink($unlink);
        $extensao1 = explode('.', $_FILES['Arquivo']['name']);
        $novo_nome =  md5(date('Y-m-d H:i:s')) . '.' . $extensao1[count($extensao1) - 1];
        $destino1 = '../arquivos/transparencia/' . $novo_nome;
        move_uploaded_file($_FILES['Arquivo']['tmp_name'], $destino1);
    }

    $query = $con->prepare('CALL Proc_U_Transparencia (:IDTransparencia, :Nome, :Arquivo, :Categoria)');
    $query->bindValue(':IDTransparencia', $_POST['IDTransparencia']);
    $query->bindValue(':Nome', $_POST['Nome']);
    $query->bindValue(':Arquivo', $novo_nome);
    $query->bindValue(':Categoria', $_POST['IDCategoria']);
    $query->execute();
    $query->closeCursor();
}

if ($_GET['option'] == 'delete') {

    $query = $con->prepare('CALL Proc_S_U_Transparencia (:IDTransparencia)');
    $query->bindValue(':IDTransparencia', $_POST['IDTransparencia']);
    $query->execute();
    $res = $query->fetch(PDO::FETCH_OBJ);
    $novo_nome = $res->Arquivo;
    $unlink = '../arquivos/transparencia/' . $res->Arquivo;
    $query->closeCursor();


    $query = $con->prepare('CALL Proc_D_Transparencia (:IDTransparencia)');
    $query->bindValue(':IDTransparencia', $_POST['IDTransparencia']);
    unlink($unlink);
    $query->execute();
    $query->closeCursor();
}
