<?php
// Incluye el encabezado
include "includes/header.php";
?>

<article class="main">
    <section class="admin-container">
        <?php
        // Comprueba si el formulario ha sido enviado y si las variables de sesión están configuradas
        if (isset($_SESSION["admin"]) && isset($_SESSION["user_role"])) {
            //  var_dump($_SESSION["admin"]);
            // var_dump($_SESSION["user_role"]);
            // Si ha iniciado sesión, muestra las opciones del administrador según el rol
            if ($_SESSION['user_role'] === 'super_admin') {
        ?>
                <div class="card card-admin">
                    <h4>Administrar Usuarios</h4>
                    <img src="public/img/resources/user-solid-240.png" alt="Usuarios">
                    <a href="admin_users.php" class="btn-admin">Acceder</a>
                </div>
            <?php
            }
            ?>
            <div class="card card-admin">
                <h4>Administrar Productos</h4>
                <img src="public/img/resources/package-solid-240.png" alt="Productos">
                <a href="admin_products.php" class="btn-admin">Acceder</a>
            </div>
        <?
        } else {
            // Si las variables de sesión no están configuradas, muestra un mensaje de acceso denegado
        ?>
            <div class="card card-admin">
                <h4>Acceso denegado</h4>
                <img src="public/img/resources/block-regular-240.png" alt="error">
            </div>
        <?
        }
        ?>

    </section>
</article>
</body>

</html>