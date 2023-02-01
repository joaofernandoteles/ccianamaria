<?php

require_once '../include/config.php';

$conexao = new conexao();
$con = $conexao->conecta();

if ($_GET['option'] == 'select') {
    $query = $con->prepare('CALL Proc_S_U_Noticia (:IDNoticia)');
    $query->bindValue(':IDNoticia', $_POST['IDNoticia']);
    $query->execute();
    $res = $query->fetch(PDO::FETCH_OBJ);
    echo json_encode($res);
}

if ($_GET['option'] == 'insert') {

    //SALVA NO BANCO
    $query = $con->prepare('CALL Proc_I_Noticia (:Titulo, :Conteudo, :Manchete)');
    $query->bindValue(':Titulo', $_POST['Titulo']);
    $query->bindValue(':Conteudo', nl2br($_POST['Conteudo']));
    $query->bindValue(':Manchete', $_POST['Manchete']);
    $query->execute();
    //PEGA O IDNOTICIA
    $res = $query->fetch(PDO::FETCH_OBJ);
    $IDNoticia = $res->IDNoticia;
    $query->closeCursor();

    $i = 0;
    while (!empty($_FILES['Imagem']['name'][$i])) {
        $extensao1 = explode('.', $_FILES['Imagem']['name'][$i]);
        $novo_nome =  Md5(date('Y-m-d H:i:s') . rand()) . '.' . $extensao1[count($extensao1) - 1];
        $destino1 = '../img/noticia/' . $novo_nome;

        move_uploaded_file($_FILES['Imagem']['tmp_name'][$i], $destino1);

        $query = $con->prepare('CALL Proc_I_ImagemNoticia (:IDNoticia, :Imagem, :Capa)');
        $query->bindValue(':IDNoticia', $IDNoticia);
        $query->bindValue(':Imagem', $novo_nome);
        $query->bindValue(':Capa', $i == 0 ? 1 : 0);
        $query->execute();
        $query->closeCursor();
        $i++;
    }
}

if ($_GET['option'] == 'update') {

    $query = $con->prepare('CALL Proc_U_Noticia (:IDNoticia, :Titulo, :Manchete, :Conteudo)');
    $query->bindValue(':IDNoticia', $_POST['IDNoticia']);
    $query->bindValue(':Titulo', $_POST['Titulo']);
    $query->bindValue(':Manchete', $_POST['Manchete']);
    $query->bindValue(':Conteudo', nl2br($_POST['Conteudo']));
    $query->execute();
}

if ($_GET['option'] == 'delete') {
    $query = $con->prepare('CALL Proc_D_Noticia (:IDNoticia)');
    $query->bindValue(':IDNoticia', $_POST['IDNoticia']);
    $query->execute();
    $query->closeCursor();
}

if ($_GET['option'] == 'deleteimg') {

    $query = $con->prepare('CALL Proc_S_U_ImagemNoticia (:IDImagemNoticia)');
    $query->bindValue(':IDImagemNoticia', $_POST['IDImagemNoticia']);
    $query->execute();
    $res = $query->fetch(PDO::FETCH_OBJ);
    $unlink1 = '../img/noticia/' . $res->Imagem;
    $query->closeCursor();


    $query = $con->prepare('CALL Proc_D_ImagemNoticia (:IDImagemNoticia)');
    unlink($unlink1);
    $query->bindValue(':IDImagemNoticia', $_POST['IDImagemNoticia']);
    $query->execute();
    $query->closeCursor();
}
