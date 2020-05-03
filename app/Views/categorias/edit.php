
<?php echo view('dashboard/partials/errores')?>
<form action="/categorias/update/<?=$categorias->id_categoria?>" method="POST">
    <?php echo view('/dashboard/categorias/formulario',['boton'=>'Actualizar'])?>
</form>