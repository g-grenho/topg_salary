<header>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        
        <?php
        $admin_or_user = $_SESSION['log_type'];
        if ($admin_or_user == 0) {
            echo '<a class="nav-item nav-link active" href="?main=user">Utilizador '.$admin_or_user.'<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="?main=editar_perfil">Editar Perfil<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Ver Salários</a>
            </div>
        </div>';
        }
        else {
            echo '<a class="nav-item nav-link active" href="?main=admin">Admin<span class="sr-only">(current)</span></a>';
            
        }
        ?>
      
 
    </nav>
</div>

    <?php
    switch ($admin_or_user) {
        case '1':
            echo "Admin";
            break;
        case '0':
            echo "User";
            break;
        
        default:
            echo "nada";
            break;
    }
    ?>
    </nav>
</header>