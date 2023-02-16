<div class="container my-5">
    <div class="d-flex flex-column justify-content-center">
        <h1>Lista de Espécies</h1>
        <form action="">
            <button class="button btn btn-lg btn-warning mt-2" type="button" id="btnCadastrar" onclick="adm.novo('especie')">
                Nova Espécie
            </button>
        </form>
        <div id="table" class="d-flex">
            <table class="table table-dark table-striped table-hover mt-5">
                <thead>
                    <tr>
                    <th class="col p-3">Código</th>
                    <th class="col p-3">Nome</th>
                    <th class="col p-3">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $list = $objEspecie->list();
                        foreach ($list as $value) {
                    ?>
                    <tr>
                    <th scope="row" class="col p-3"><?= $value['cod'] ?></th>
                    <td class="col p-3"><?= $value['nome'] ?></td>
                    <td class="col p-3">
                            <a href="javascript:void(0)" onclick="especie.update(<?= $value['cod'] ?>)">Atualizar</a>
                            <a href="javascript:void(0)" onclick="especie.delete(<?= $value['cod'] ?>)">Deletar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once('especieJs.php'); ?>