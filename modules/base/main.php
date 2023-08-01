<main>
    <?php
    @$main = $_REQUEST['main'];

    switch ($main) {
        case 'admin':
            include "modules/pages/painel_admin.php";
            break;
        case 'utilizador':
            include "modules/pages/painel_utilizador.php";
            break;
        default:
            include 'modules/pages/login.php';
            break;
    }

    ?>
</main>