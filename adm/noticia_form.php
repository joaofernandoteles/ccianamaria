<?php $pagina = 'Noticia'; ?>

<!DOCTYPE html>
<html lang="en">

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
                            <form id="formCadastro">
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
                                <div class="row">
                                    <div class="col-12 col-md-12 form-group">
                                        <label for="Imagem">Imagens</label>
                                        <input type="file" class="form-control" id="Imagem" <?= isset($_GET['IDNoticia']) ? $nome = 'Imagem' : $nome = 'Imagem[]' ?> name="<?= $nome ?>" accept="image/*" multiple <?= isset($_GET['IDNoticia']) ? '' : 'required' ?>>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" id="salvar" class="btn btn-dark d-block mx-auto px-3 py-2">
                                        <i class="fa-solid fa-floppy-disk me-2"></i>SALVAR
                                    </button>
                                    <input type="hidden" name="IDNoticia" id="IDNoticia">
                                </div>
                            </form>
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

        <?php if (isset($_GET['IDNoticia']) && !empty($_GET['IDNoticia'])) { ?>

            $.post('assets/ajax/noticia.php?option=select', {
                    IDNoticia: '<?= $_GET['IDNoticia'] ?>'
                })
                .done(function(response) {
                    response = JSON.parse(response);

                    $('#IDNoticia').val(response.IDNoticia);
                });

        <?php } ?>
    </script>

</body>

</html>