
<table class="table">
    <thead>
        <tr>
            <th scope="row">Id</th>
            <th scope="row">Nombre Usuario</th>
            <th scope="row">Correo</th>
            <th scope="row">Opciones </th>
        </tr>
    </thead>
    <tbody class="table">

        <?php
        foreach ($users as $key => $u) {
        ?>
            <tr>
                <td><?= $u->id ?></td>
                <td><?= $u->username ?></td>
                <td><?= $u->email ?></td>
                <td>
                    <? if ($session == "administrador") : ?>
                        <form action="/user/delete/<?= $u->id ?>" method="POST">
                            <button data-toggle="tooltip" data-placement="left" title="ELIMINAR" class="float-right ml-2 btn btn-outline-danger btn-sm" type="submit" name="submit">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        <a data-toggle="tooltip" data-placement="left" title="EDITAR" href="/user/<?= $u->id ?>/edit" class="float-right ml-2 btn btn-outline-success btn-sm"><i class="fas fa-pen"></i></a>
                    <? endif ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<br>
<div class="enlaces row justify-content-center">
    <?= $pager->Links() ?>
</div>