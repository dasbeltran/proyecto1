<div class="contenedor col-6 py-2">

<div class="form-group">
<label for="username" style="color: black"><h6>Nombre Usuario</h6></label>
<input <?=!$created ? "readonly" : " "?> class="form-control" type="text" id="username" name="username" value="<?= old('titulo', $user->username) ?>">
</div>

<div class="form-group">
<label for="email" style="color: black"><h6>Email</h6></label>
<input <?=!$created ? "readonly" : " "?> class="form-control" type="text" id="email" name="email" value="<?= old('titulo', $user->email) ?>">
</div>

<div class="form-group">
<label for="password" style="color: black"><h6>Password</h6></label>
<input class="form-control" type="password" id="password" name="password" value="">
</div>



<input type="submit" class="btn btn-primary btn-block" name="submit" value="<?=$textButton?>" />
</div>