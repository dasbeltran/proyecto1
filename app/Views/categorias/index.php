<table class ="table">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Descripcion</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach ($listados as $l):?>
                <td><?=$l->id_categoria?></td>
                <td><?=$l->descripcion?></td>
                <th>
                    <form action="/categorias/delete/<?=$l->id_categoria?>" method="POST">
                        <input type="submit" name="submit" value="Eliminar" class="btn btn-outline-danger ">
                    </form>

                    <a href="/categorias/<?=$l->id_categoria?>/edit" class="btn btn-outline-warning mt-1">Editar</a>
                </th>
           
        </tr>
        <?php endforeach?>
    </tbody>
</table>
<a href="/categorias/new" class="float-right btn btn-outline-primary">Nuevo</a>
<?= $pager->links() ?>