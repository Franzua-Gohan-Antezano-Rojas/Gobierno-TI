<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="./"><img src="assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="./"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <?php
    if ($sessionExists) {
    ?>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">
                                <?php
                                echo $_SESSION['usuario']['persona']['nombres'];
                                ?>
                            </h5>
                            <span>
                                <?php
                                echo $_SESSION['usuario']['rol']['rol'];
                                ?>
                            </span>
                        </div>
                    </div>
                    
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Panel de navegación</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="./">
                    <span class="menu-icon">
                        <i class="mdi mdi-cart-outline"></i>
                    </span>
                    <span class="menu-title">Carrito actual</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-icon">
                        <i class="mdi mdi-view-list"></i>
                    </span>
                    <span class="menu-title">Pedidos</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="">Lista de pedidos</a></li>
                        <li class="nav-item"> <a class="nav-link" href="">Lista de reclamaciones</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="">
                    <span class="menu-icon">
                        <i class="mdi mdi-settings"></i>
                    </span>
                    <span class="menu-title">Configuración</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="login/?logout=true">
                    <span class="menu-icon">
                        <i class="mdi mdi-logout"></i>
                    </span>
                    <span class="menu-title">Cerrar sesión</span>
                </a>
            </li>
        </ul>
    <?php
    }
    ?>
</nav>