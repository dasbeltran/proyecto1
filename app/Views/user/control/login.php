<?= view('user/control/_session') ?>

<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="d-flex justify-content-center">
                <div class="logo_container">
                    <img src="img/faviconw.png" class="logo img-fluid">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <!-- Formulario -->
                <form class="form-signin" action="<?=route_to("user_login_post")?>" method="POST">
                    <!-- input usuario -->
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input  name="email" type="text" id="inputEmail" class="form-control input_user" placeholder="Email|nameuser" required autofocus>
                    </div>

                    <!-- input contraseña -->
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input name="password" type="password" id="inputPassword" class="form-control input_pass" placeholder="Password" required>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Recordarme</label>
                        </div>
                    </div>

                    <!-- boton -->
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button class="btn login_btn" type="submit"> Login </button>
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    No tienes una cuenta? <a href="/user/new" class="ml-2">Registrarse</a>
                </div>
                <div class="d-flex justify-content-center links">
                    <a href="#">Olvidaste la contraseña?</a>
                </div>
            </div>
        </div>
    </div>
</div>