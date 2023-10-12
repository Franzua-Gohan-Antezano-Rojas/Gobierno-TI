<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="../assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="../assets/images/faces/face15.jpg" alt="">
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
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Panel de navegación</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="./">
                <span class="menu-icon">
                    <i class="mdi mdi-format-list-bulleted"></i>
                </span>
                <span class="menu-title">Lista de pedidos</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-productos" aria-expanded="false" aria-controls="menu-productos">
                <span class="menu-icon">
                    <i class="mdi mdi-store"></i>
                </span>
                <span class="menu-title">Productos</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-productos">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/productos">Lista de productos</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/marcas">Lista de marcas</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/categorias">Lista de categorías</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-usuarios" aria-expanded="false" aria-controls="menu-usuarios">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
                <span class="menu-title">Usuarios</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-usuarios">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/usuarios">Lista de usuarios</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/roles">Lista de roles</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/permisos">Lista de permisos</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-icon">
                    <i class="mdi mdi-settings"></i>
                </span>
                <span class="menu-title">Configuración</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-icon">
                    <i class="mdi mdi-logout"></i>
                </span>
                <span class="menu-title">Cerrar sesión</span>
            </a>
        </li>
    </ul>
</nav>