            <div class="contHeader">
                
                <nav class="p-2 bg-gradient">
                    <img id="logoSucu" src="/Suculentos/Vista/IMG/logoSuculento.svg">
                    <ul class="nav nav-ul d-flex">
                        <li class="nav-item">
                            <a class="nav-link link-light" href="/Suculentos/index.php">HOME</a>
                        </li>
                        <li class="nav-item dropdown d-flex align-items-center">
                            <a class="nav-link link-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" role="button" href="/Suculentos/Vista/menu.php?type=ALL&n=0">
                                MENU
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-ul bg-gradient">
                                <li><a class="dropdown-item " href="/Suculentos/Vista/menu.php?type=DISHES&n=1">DISHES</a></li>
                                <li><a class="dropdown-item" href="/Suculentos/Vista/menu.php?type=ACCOMPANIMENTS&n=2">ACCOMPANIMENTS</a></li>
                                <li><a class="dropdown-item" href="/Suculentos/Vista/menu.php?type=BREDS&n=3">BREDS</a></li>
                                <li><a class="dropdown-item" href="/Suculentos/Vista/menu.php?type=DESSERT&n=4">DESSERT</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" href="/Suculentos/Vista/events.php">EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" href="">CONTACT</a>
                        </li>
                    </ul>

                    <!--Redes Sociales-->
                    <ul class="nav nav-redes d-flex align-items-center justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <img class="logoRS" src="http://localhost/Suculentos/Vista/IMG/igSucu.jfif" alt="Instagram">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <img class="logoRS" id="logoTk" src="http://localhost/Suculentos/Vista/IMG/tkSucu.jfif" alt="Tiktok">
                            </a>
                        </li>
                    </ul>

                    <!--Carrito de compras-->
                    <div class="pointer d-flex align-items-center mx-3 px-2 text-white" data-bs-toggle="modal" data-bs-target="#mdlCart">
                        <button class="btn-warning btn-shop"><i class="bi bi-cart-fill"></i></button>
                        <div class="mx-3">
                                <h5 class="my-0">My Cart</h5>
                                <p class="m-0" id="cartDetail">Items (0) - $0.00</p> 
                        </div>
                    </div>
                </nav>
