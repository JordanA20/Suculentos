            <div class="contHeader">
                
                <nav class="p-2 bg-gradient">
                    <img id="logoSucu" src="/Suculentos/Vista/IMG/logoSuculento.svg">
                    <ul class="nav nav-ul d-flex">
                        <li class="nav-item">
                            <a class="nav-link active" href="/Suculentos/index.php">HOME</a>
                        </li>
                        <li class="nav-item dropdown d-flex align-items-center">
                            <a class="nav-link" href="/Suculentos/Vista/menu.php">MENUE</a>
                            <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" role="button"></span>
                            <ul class="dropdown-menu dropdown-ul">
                                <li><a class="dropdown-item" href="#">DISHES</a></li>
                                <li><a class="dropdown-item" href="#">ACCOMPANIMENTS</a></li>
                                <li><a class="dropdown-item" href="#">BREDS</a></li>
                                <li><a class="dropdown-item" href="#">DESSERT</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Suculentos/Vista/events.php">EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">CONTACT</a>
                        </li>
                    </ul>

                    <!--Redes Sociales-->
                    <ul class="nav nav-redes d-flex align-items-center justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <img class="logoRS" src="IMG/igSucu.jfif" alt="Instagram">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <img class="logoRS" id="logoTk" src="IMG/tkSucu.jfif" alt="Tiktok">
                            </a>
                        </li>
                    </ul>

                    <!--Carrito de compras-->
                    <div class="pointer d-flex align-items-center mx-3 px-2 text-white" data-bs-toggle="modal" data-bs-target="#mdlCart">
                        <button class="btn-warning btn-shop"><i class="bi bi-cart-fill"></i></button>
                        <div class="mx-3">
                                <h5 class="my-0">My Cart</h5>
                                <p class="m-0" id="infoCompra">Items (0) - $0.00</p> 
                        </div>
                    </div>
                </nav>
