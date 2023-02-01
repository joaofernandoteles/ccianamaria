<?php $pagina = 'Noticia'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
</head>

<body class="g-sidenav-show vh-100 bg-gray-100">
    <?php include 'header.php'; ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php include 'menu_topo.php'; ?>


        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-12">
                    <div class="card ">
                        <div class="card-header pb-0">
                            <h6 class="float-start">Lista de Noticias</h6>
                            <div class="text-end mb-2">
                                <a href="noticia_form.php" class="btn bg-gradient-dark mb-0 px-3 btn-sm" title="Adicionar">
                                    <i class="fa fa-plus me-1"></i>ADD NOTICIA
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Capa Noticia</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Titulo</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center" width="15%">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $query = $con->query('CALL Proc_S_Noticia');
                                        while ($res = $query->fetch(PDO::FETCH_OBJ)) { ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-3 py-1" style="height:150px ;">
                                                        <img style="height:100% ;" src="assets/img/noticia/<?= $res->Imagem ?>" alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-3 py-1">
                                                        <h6 class="mb-0 "><?= $res->Titulo ?></h6>
                                                    </div>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <a href="noticia_edit.php?IDNoticia=<?= $res->IDNoticia ?>" class="btn bg-gradient-info mb-0  btn-sm" title="Editar"><i class="fa-solid fa-pen-to-square font-13"></i></a>
                                                    <button class="btn bg-gradient-danger mb-0  btn-sm" title="Excluir" onclick="destroy(<?= $res->IDNoticia ?>)"><i class="fa-solid fa-trash font-13"></i></button>
                                                    <a href="imgnoticia_form.php?IDNoticia=<?= $res->IDNoticia ?>" class="btn bg-gradient-add mb-0  btn-sm" title="Editar"><i class="fa-regular fa-images font-13"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <?php include 'js.php'; ?>

    <script>
        function destroy(IDNoticia) {
            Swal.fire({
                title: 'Deseja DELETAR esta Noticia ?',
                text: '',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, Deletar',
                cancelButtonText: 'Não, Cancelar',
                closeOnConfirm: true,
                closeOnCancel: true
            }).then((result) => {
                if (result.value) {
                    $.post('assets/ajax/noticia.php?option=delete', {
                        IDNoticia: IDNoticia
                    }).done(function() {
                        location.reload();
                    });
                }
            })
        }
    </script>

</body>

</html>