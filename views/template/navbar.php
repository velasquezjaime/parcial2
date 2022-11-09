<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Catálogo
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                       <?php if (isset($_SESSION["usuario"])){?> <li><a class="dropdown-item" href="<?php echo "#" ?>">Nuestro Catálogo</a></li> <?php } ?>                        
                    </ul>
                </li>
            </ul>
            <form action="<?php echo "index.php?c=".seg::codificar("productos")."&m=".seg::codificar("validar") ?>" class="d-flex" method="post">
            <?php if (isset($_SESSION["usuario"])){?> <input class="form-control me-2" type="search" name="id" placeholder="Ingrese una id " aria-label="Search"> <?php } ?> 
            <?php if (isset($_SESSION["usuario"])){?>  <button class="btn btn-outline-success" type="submit">Buscar</button> <?php } ?> 
            <input type="hidden" value="<?php echo seg::getToken() ?>" name="token">
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if(isset($_SESSION["usuario"])){ ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION["nombre"]?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Editar perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("cerrar_sesion")."" ?>">Cerrar Sesión</a></li>
                    </ul>
                </li>
                <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("login")."" ?>" tabindex="-1">Login</a>
                </li>
                    <?php } ?>

            </ul>
        </div>
    </div>
</nav>