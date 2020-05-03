<?= view("desarrollador/partials/_form-error");?>

<form action="create" method="POST" enctype="multipart/form-data" class="my-4 mx-4 row justify-content-md-center">

<?= view("desarrollador/user/_form", ['textButton' => 'Guardar','created'=>true]); ?>

</form>