<?= view("desarrollador/partials/_form-error");?>

<form action="/user/update/<?= $user->id ?>" method="POST" enctype="multipart/form-data" class="my-4 mx-4 row justify-content-md-center">

    <?= view("desarrollador/user/_form", ['textButton' => 'Actualizar','created'=>false]); ?>

</form>