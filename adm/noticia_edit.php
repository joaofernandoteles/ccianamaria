<?php $pagina = 'Noticia'; ?>

<!DOCTYPE html>
<html lang="en">

<style>
    .div_fotonoticia {
        height: 285px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .img {
        height: 231px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .img img {
        height: 100%;
    }

    .botao {
        height: 32px;
        display: flex;
        flex-direction: row;
        justify-content: center;
    }
</style>

<head>
    <?php include 'head.php'; ?>

    <link rel="stylesheet" href="../dist/ui/trumbowyg.min.css">

</head>

<body class="g-sidenav-show vh-100 bg-gray-100">
    <?php include 'header.php'; ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php include 'menu_topo.php'; ?>
        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6 class="float-start">Cadastro de Noticia</h6>
                            <p class="text-end m-0">
                                <a href="noticia_list.php" class="btn bg-gradient-danger btn-xs py-2 px-3 m-0 icon-btn" title="Adicionar">
                                    <i class="fa fa-arrow-left me-1"></i> voltar
                                </a>
                            </p>
                        </div>
                        <div class="card-body pb-2">
                            <form id="formCadastro" style="margin: 30px 0px;">
                                <div class="row">
                                    <div class="col-12 col-md-6 form-group">
                                        <label for="Titulo">Titulo</label>
                                        <input type="text" name="Titulo" id="Titulo" class="form-control" maxlength="255" required>
                                    </div>
                                    <div class="col-12 col-md-6 form-group">
                                        <label for="Manchete">Manchete</label>
                                        <input type="text" name="Manchete" id="Manchete" class="form-control" maxlength="255" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 form-group">
                                        <label for="Conteudo">Noticia</label>
                                        <textarea name="Conteudo" id="Conteudo" class="form-control" cols="30" rows="10" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" id="salvar" class="btn btn-dark d-block mx-auto px-3 py-2">
                                        <i class="fa-solid fa-floppy-disk me-2"></i>SALVAR
                                    </button>
                                    <input type="hidden" name="IDNoticia" id="IDNoticia">
                                </div>
                            </form>
                            <div class="row" style="margin: 70px 0px;">
                                <?php
                                $query = $con->prepare('CALL Proc_S_ImagemNoticia (:IDNoticia)');
                                $query->bindValue(':IDNoticia', $_GET["IDNoticia"]);
                                $query->execute();
                                $res = $query->fetchAll(PDO::FETCH_OBJ);
                                $query->closeCursor();
                                foreach ($res as $res) {
                                ?>
                                    <div class="col-12 col-md-6 form-group">
                                        <div class="div_fotonoticia">
                                            <div class="img">
                                                <img src="./assets/img/noticia/<?= $res->Imagem ?>" alt="">
                                            </div>
                                            <div class="botao">
                                                <a href="imgnoticia_edit.php?IDImagemNoticia=<?= $res->IDImagemNoticia ?>" class="btn bg-gradient-info mb-0  btn-sm" title="Editar" style="margin-right: 5px;"><i class="fa-solid fa-pen-to-square font-13"></i></a>

                                                <?php
                                                if ($res->Capa == 1) {
                                                } else { ?>
                                                    <button class="btn bg-gradient-danger mb-0  btn-sm" title="Excluir" onclick="destroy(<?= $res->IDImagemNoticia ?>)" style="margin-left: 5px;"><i class="fa-solid fa-trash font-13"></i></button>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include 'js.php'; ?>
    <script>
        $('#formCadastro').validate({
            errorClass: 'is-invalid',
            validClass: 'is-valid',
            errorPlacement: function() {
                return false; //REMOVER MENSAGENS
            },
            submitHandler: function(form) {
                $('#salvar').html('SALVANDO...').attr('disabled', '');

                var formData = new FormData($(form)[0]);
                var option = $('#IDNoticia').val() == '' ? 'insert' : 'update';

                $.ajax({
                    type: 'POST',
                    url: 'assets/ajax/noticia.php?option=' + option,
                    data: formData,
                    processData: false,
                    contentType: false
                }).done(function(response) {
                    window.location.href = 'noticia_list.php';
                });
            }
        });




        function destroy(IDImagemNoticia) {
            Swal.fire({
                title: 'Deseja DELETAR esta Foto ?',
                text: '',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sim, Deletar',
                cancelButtonText: 'Não, Cancelar',
                closeOnConfirm: true,
                closeOnCancel: true
            }).then((result) => {
                if (result.value) {
                    $.post('assets/ajax/imgnoticia.php?option=deleteimg', {
                        IDImagemNoticia: IDImagemNoticia
                    }).done(function() {
                        location.reload();
                    });
                }
            })
        }
    </script>


    <script>
        <?php if (isset($_GET['IDNoticia']) && !empty($_GET['IDNoticia'])) { ?>

            $.post('assets/ajax/noticia.php?option=select', {
                    IDNoticia: '<?= $_GET['IDNoticia'] ?>'
                })
                .done(function(response) {
                    response = JSON.parse(response);

                    $('#Titulo').val(response.Titulo);
                    $('#Manchete').val(response.Manchete);

                    const Conteudo = String(response.Conteudo);

                    const Conteudo2 = Conteudo.replace(/(<([^>]+)>)/gi, "").trim();

                    $('#Conteudo').text(Conteudo2);

                    $('#IDNoticia').val(response.IDNoticia);
                });

        <?php } ?>
    </script>


</body>

</html>