            <div class="contHeader">
                
                <nav class="nav py-1"> 
                    <div class="navD d-flex align-items-center">
                        <img id="logoSucu" src="/Proyectos/Suculentos/Vista/IMG/logoSuculento.svg">
                        
                        <!-- Menu de Escritorio -->
                        <div class="navDesktop"><div class="contNavP d-flex justify-content-start">
                                <ul class="nav nav-ul d-flex justify-content-start">
                                    <li class="nav-item">
                                        <a class="nav-link link-light" href="/Proyectos/Suculentos/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item dropdown d-flex align-items-center">
                                        <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" role="button" href="/Proyectos/Suculentos/Vista/menu.php?type=ALL&n=0"></span>
                                        <a id="linkMenu" class="nav-link link-light" href="/Proyectos/Suculentos/Vista/menu.php?type=ALL&n=0">MENU</a>
                                        <ul class="dropdown-menu dropdown-menu-dark dropdown-ul bg-gradient">
                                            <li><a class="dropdown-item" href="/Proyectos/Suculentos/Vista/menu.php?type=DISHES&n=1">DISHES</a></li>
                                            <li><a class="dropdown-item" href="/Proyectos/Suculentos/Vista/menu.php?type=ACCOMPANIMENTS&n=2">ACCOMPANIMENTS</a></li>
                                            <li><a class="dropdown-item" href="/Proyectos/Suculentos/Vista/menu.php?type=BREDS&n=3">BREDS</a></li>
                                            <li><a class="dropdown-item" href="/Proyectos/Suculentos/Vista/menu.php?type=DESSERT&n=4">DESSERT</a></li>
                                        </ul>
                                    </li>
                                    <li id="navEvents" class="nav-item">
                                        <a class="nav-link link-light" href="/Proyectos/Suculentos/Vista/events.php">EVENTS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-light" href="">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                            
                            <!--Redes Sociales-->
                            <div class="contNavRC d-flex">
                                <ul class="nav nav-redes d-flex align-items-center justify-content-end">
                                    <li class="nav-item">
                                        <a class="nav-link" href="">
                                            <img class="logoRS" src="http://localhost/Proyectos/Suculentos/Vista/IMG/igSucu.jfif" alt="Instagram">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">
                                            <img class="logoRS" id="logoTk" src="http://localhost/Proyectos/Suculentos/Vista/IMG/tkSucu.jfif" alt="Tiktok">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>  
                                
                        <!--Carrito de compras-->
                        <div class="navCart d-flex">
                            <div class="pointer d-flex align-items-center mx-3 px-2 text-white" data-bs-toggle="modal" data-bs-target="#mdlCart">
                                <button type="button" class="btn btn-dark position-relative rounded-circle">
                                    <span class="btn-shop"><i class="bi bi-cart3"></i></span>
                                    <span class="totalItems position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        1
                                    </span>
                                </button>
                                <div class="mx-3">
                                    <p class="totalPrice m-0"></p> 
                                </div>
                            </div>
                        </div>

                        <!-- Menu mobil -->
                        <div class="navMovil">

                            <!-- Boton del Menu -->
                            <div class="nav_movil-button navbar-dark d-flex align-items-center justify-content-left">
                                <button class="navbar-toggler nav_movil-button-btn d-flex align-items-center" id="nav-btn" type="button">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
    
                            <!-- Navegacion del menu -->
                            <div class="oculto" id="navM">
                                <ul id="navM-ul">
                                    <li class="nav-item">
                                        <a class="nav-link link-light" href="/Proyectos/Suculentos/index.php">HOME</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <div class="d-flex align-items-center">
                                            <a class="nav-link link-light" id="linkMenuM" href="/Proyectos/Suculentos/Vista/menu.php?type=ALL&n=0">MENU</a>
                                            <span class="dropdown-toggle pointer" id="dropDMenuM" data-bs-toggle="collapse" data-bs-target="#navDropdown" aria-controls="navDropdown" aria-expanded="false" aria-label="Toggle navigation"></span>
                                        </div>
                                        <ul class="collapse navbar-collapse" id="navDropdown">
                                            <li class="nav-item"><a class="nav-link link-light" href="/Proyectos/Suculentos/Vista/menu.php?type=DISHES&n=1">DISHES</a></li>
                                            <li class="nav-item"><a class="nav-link link-light" href="/Proyectos/Suculentos/Vista/menu.php?type=ACCOMPANIMENTS&n=2">ACCOMPANIMENTS</a></li>
                                            <li class="nav-item"><a class="nav-link link-light" href="/Proyectos/Suculentos/Vista/menu.php?type=BREDS&n=3">BREDS</a></li>
                                            <li class="nav-item"><a class="nav-link link-light" href="/Proyectos/Suculentos/Vista/menu.php?type=DESSERT&n=4">DESSERT</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-light" href="/Proyectos/Suculentos/Vista/events.php">EVENTS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-light" href="">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
        </div>
