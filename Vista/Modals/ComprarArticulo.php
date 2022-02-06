<!-- Modal Producto -->

<div id="mdlProduct" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" id="mdlBtnClose" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="mdlP-item">
                    <div class="__vaners_vnr d-flex flex-row align-items-center">
                        <img id="mdlP-img" src="/Suculentos/Vista/IMG/imgCaract.svg" alt="category">
                        <div class="container-xxl">
                            <h4 id="mdlP-title"></h4>
                            <p id="mdlP-description"></p>
                            <div class="d-flex flex-row-reverse ">
                                <h5 id="mdlP-price"></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div id="mdlP-quantity" class="d-flex">
                    <button class="qtt" id="mdlP-qttMinus"><i class="bi bi-dash-lg"></i></button>
                    <input type="text" class="qtt" id="mdlP-qttValue" name="quantityProduct" value="1" pattern="[0-9]{100}" readonly>
                    <button class="qtt" id="mdlP-qttPlus"><i class="bi bi-plus-lg"></i></button>
                </div>
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>-->
                <button type="button" class="btn btn-primary" id="addToCart">ADD TO CART</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Carrito -->
<div id="mdlCart" class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div id="mdlContainer" class="modal-dialog modal-fullscreen-lg-down modal-dialog-scrollable d-flex justify-content-end">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">YOUR CART</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center overflow-auto">
                <div id="mdlC-item"></div>
            </div>
            <div class="modal-footer mdlFooter flex-column justify-content-around">
                <div id="totalContainer" class="mdlFooter-cont d-flex flex-row">
                    <h5>TOTAL PRICE</h5>
                    <div class="mdlFooter-subCont d-flex justify-content-end">
                        <h5 id="totalPrice"></h5>
                    </div>
                </div>
                <div class="mdlFooter-cont d-grid gap-2">
                    <button id="btnCheckout" class="btn btn-secondary" type="button" >CHECKOUT</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Template of carrito  -->
<template id="templateCart">
    <div id="mdlC-content">
        <div class="d-flex flex-row align-items-center">
            <img id="mdlC-img" src="/Suculentos/Vista/IMG/imgCaract.svg" alt="category">
            <div class="container-sm">
                <h4 id="mdlC-title"></h4>
                <h5 id="mdlC-price"></h5>
                <div id="mdlC-quantity" class="d-flex justify-content-end">
                    <input id="mdlC-id" type="hidden" name="idProduct">
                    <button class="qtt mdlC-qttMinus" id=""><i class="bi bi-dash-lg"></i></button>
                    <input type="text" class="qtt" id="mdlC-qttValue" name="quantityArticle" value="1" pattern="[0-9]{100}" readonly>
                    <button class="qtt mdlC-qttPlus" id=""><i class="bi bi-plus-lg"></i></button>
                </div>
            </div>
            <div id="mdlC-btnClose" class="d-flex align-items-start">
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
        </div>
    </div>
</template>