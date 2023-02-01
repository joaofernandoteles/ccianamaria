<?php $pagina = 'Transparencia'; ?>

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
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6 class="float-start">Cadastro de Arquivos</h6>
                            <p class="text-end m-0">
                                <a href="transparencia_list.php" class="btn bg-gradient-danger btn-xs py-2 px-3 m-0 icon-btn" title="Adicionar">
                                    <i class="fa fa-arrow-left me-1"></i> voltar
                                </a>
                            </p>
                        </div>
                        <div class="card-body pb-2">
                            <form id="formCadastro">
                                <div class="row">
                                    <div class="col-12 col-md-6 form-group">
                                        <label for="Nome">Nome</label>
                                        <input type="text" name="Nome" id="Nome" class="form-control" maxlength="255" required>
                                    </div>


                                    <div class="col-12 col-md-6 form-group">
                                        <label for="IDCategoria">Categoria</label>
                                        <select class="form-control" id="IDCategoria" name="IDCategoria" required>
                                            <option value="" style="display: none;">Selecione</option>
                                            <?php
                                            $query = $con->prepare('CALL Proc_S_Categoria');
                                            $query->execute();
                                            $res = $query->fetchAll(PDO::FETCH_OBJ);
                                            $query->closeCursor();
                                            foreach ($res as $res) {
                                            ?>
                                                <option value="<?= $res->IDCategoria ?>"><?= $res->Nome ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-1s2 form-group">
                                        <label for="Arquivo">Arquivo</label>
                                        <input type="file" class="form-control" id="Arquivo" name="Arquivo" maxlength="255" <?= isset($_GET['IDTransparencia']) ? '' : 'required' ?>>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" id="salvar" class="btn btn-dark d-block mx-auto px-3 py-2">
                                        <i class="fa-solid fa-floppy-disk me-2"></i>SALVAR
                                    </button>
                                    <input type="hidden" name="IDTransparencia" id="IDTransparencia">
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
                var option = $('#IDTransparencia').val() == '' ? 'insert' : 'update';

                $.ajax({
                    type: 'POST',
                    url: 'assets/ajax/transparencia.php?option=' + option,
                    data: formData,
                    processData: false,
                    contentType: false
                }).done(function(response) {
                    window.location.href = 'transparencia_list.php';
                });
            }
        });

        <?php if (isset($_GET['IDTransparencia']) && !empty($_GET['IDTransparencia'])) { ?>

            $.post('assets/ajax/transparencia.php?option=select', {
                    IDTransparencia: '<?= $_GET['IDTransparencia'] ?>'
                })
                .done(function(response) {
                    response = JSON.parse(response);

                    $('#Nome').val(response.Nome);
                    $('#IDCategoria').val(response.Categoria);
                    $('#IDTransparencia').val(response.IDTransparencia);
                });

        <?php } ?>
    </script>
</body>

</html>