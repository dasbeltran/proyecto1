<header>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Desarrollador</a>
        <a class="btn btn-danger" href="<?= base_url() ?>/logout"><i class="fas fa-sign-out-alt"></i> Salir </a>
    </nav>
</header>

<div class="pagina">
    <div class="contenedormenu">
        <div class="contenedorimagen">
            <img src='<?= base_url() ?>/img/admin2.png' class='imgRedonda' />
        </div>

        <div class="contenedoropcionesmenu">
            <ul>
                <li><a class="btn  btn-dark btn-block fas fa-users" href="/user" target="formularios"> USUARIOS </a></li>
            </ul>

<!--            <ul>
                <li><a class="btn  btn-dark btn-block" href="/user" target="formularios"> USUARIOS </a></li>
            </ul>
-->
            <ul>
                <li><a class="btn  btn-dark btn-block fas fa-donate" href="/prestamo" target="formularios"> PRESTAMOS </a></li>
            </ul>

            <ul>
                <li><a class="btn  btn-dark btn-block fas fa-file-invoice-dollar" href="/pago" target="formularios"> PAGOS </a></li>
            </ul>
        </div>

    </div>

    <div class="contenido">
        <br />
        <iframe style="width: 90%; height: 90%" name="formularios"></iframe>
    </div>

    

</div>