// Variables y constantes
const tpOptions = document.querySelector('#typeOptions');
const item = document.querySelector('#items');
const templateItem = document.querySelector('.templateItem').content;
// const categories = document.querySelector('#filterCategories');


// Evento de cargado del dom, en el que obtiene parametros de la url y se envian al metodo para obtener los productos segun el tipo.
document.addEventListener('DOMContentLoaded', async () => {
    let queryString = window.location.search;
    let urlParams = new URLSearchParams(queryString);
    let type = urlParams.get('type');
    let id = urlParams.get('n');
    let filter = document.querySelector('#filterType');

    filter.value = type;
    items = await FetchData('Products', true, id);
    SetDataForItems();

    if(GetCartData() != null){
        cart = GetCartData();
        if(Object.values(cart).length > 0)
            setDataForModalC(0);
    }
});

// Evento del friltro, el cual obtiene el filtro seleccionado y se envian al metodo para obtener los productos segun el tipo.
tpOptions.addEventListener('click', async e =>{
    let filter = document.querySelector('#filterType');

    filter.value = e.target.textContent;
    items = await FetchData('Products', true, e.target.children[0].value);
    SetDataForItems();
});