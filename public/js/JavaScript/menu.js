import { FetchData, SetItems, SetDataForItems, GetLSCartData, SetCart, SetDataForModalC, cart } from "./pedido.js";

// Variables y constantes
const tpOptions = document.querySelector('#typeOptions');

// Evento de cargado del dom, en el que obtiene parametros de la url y se envian al metodo para obtener los productos segun el tipo.
document.addEventListener('DOMContentLoaded', async () => {
    let queryString = window.location.search;
    let urlParams = new URLSearchParams(queryString);
    let type = urlParams.get('type');
    let id = urlParams.get('n');
    let filter = document.querySelector('#filterType');

    filter.value = type;
    const data = await FetchData('products');
    SetItems(data);
    SetDataForItems(id);

    if(GetLSCartData() != null){
        SetCart();
        if(Object.values(cart).length > 0)
            SetDataForModalC(0);
    }
});

// Evento del friltro, el cual obtiene el filtro seleccionado y se envian al metodo para obtener los productos segun el tipo.
tpOptions.addEventListener('click', async e =>{
    let filter = document.querySelector('#filterType');

    filter.value = e.target.textContent;
    SetDataForItems(e.target.children[0].value);
});