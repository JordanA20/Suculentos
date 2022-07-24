// General
const item = document.querySelector('#items');
const templateItem = document.querySelector('.templateItem').content;

// Modals
//      Modal Producto
const modalP = new bootstrap.Modal(document.querySelector('#mdlProduct'), "");
const objMdlP = document.querySelector('#mdlProduct');
const mdlProductItem = document.querySelector('#mdlP-item');
const btnAddToCart = document.querySelector('#addToCart');

//      Modal Carrito.
const modalC = new bootstrap.Modal(document.querySelector('#mdlCart'), "");
const objMdlC = document.querySelector('#mdlCart');
const mdlCartItem = document.querySelector('#mdlC-item');
const templateCart = document.querySelector('.templateCart').content;
const fragment = document.createDocumentFragment();

// Variables generales.
let items = {};
export let cart = {};
let total;

// Llamado al api.
export const FetchData = async (op) => {
    let urlPrms = op;

    try {
        const res = await fetch(`https://app-suculentos.herokuapp.com/${urlPrms}`,{
            headers: {
                Host: 'app-suculentos.herokuapp.com'
            }
        });
        const datos = await res.json();
        return await datos;
    } catch (error) {
        alert(error);
    }
}

// Añadir articulos
export const SetItems = (data) => { items = data; }

export const SetCart = () => { cart = GetLSCartData(); }

// Cargar los productos en los items.
export const SetDataForItems = (type) => {
    item.innerHTML = '';
    
    Object.values(items).forEach(product => {
        if(type == 0 || type == product.tipo){
            templateItem.querySelector('.__item-id').value = product.id_producto;
            templateItem.querySelector('.__item-img').setAttribute('src', `img/${product.foto}`);
            templateItem.querySelector('.__item-title').textContent = product.nombre;
            templateItem.querySelector('.__item-price').textContent = `$${product.costo.toFixed(2)}`;
            
            const clone = templateItem.cloneNode(true);
            fragment.appendChild(clone);
        }
    });

    item.appendChild(fragment);
}

// Evento de selección de Productos.
item.addEventListener('click', e => {
    SetDataForModalP((e.target.parentElement.children[3].value)-1);
});

// Añade la información del producto seleccionado al modal de Producto.
const SetDataForModalP = x => {
    mdlProductItem.querySelector('#mdlP-img').setAttribute('src', `img/${items[x].foto}`);
    mdlProductItem.querySelector('#mdlP-title').textContent = items[x].nombre;
    mdlProductItem.querySelector('#mdlP-description').textContent = items[x].descripcion
    mdlProductItem.querySelector('#mdlP-price').textContent = '$' + items[x].costo.toFixed(2)
    mdlProductItem.querySelector('#mdlP-id').value = x;
}

// Evento para añadir productos al carrito.
btnAddToCart.addEventListener('click', () => {
    SetDataForModalC(1);

    modalP.hide();
    modalC.toggle();
});

// Evento de click del modal "detales del producto".
objMdlP.addEventListener('click', e => {
    if(e.target.classList.contains('qttPlus') || e.target.classList.contains('bi-plus-lg') 
    || e.target.classList.contains('qttMinus') || e.target.classList.contains('bi-dash-lg'))
        UpdateProductQuantity(e.target, 1);
});

// Evento de click del carrito.
mdlCartItem.addEventListener('click', e => {
    let x = e.target.classList;

    if(x.contains('bi-plus-lg') || x.contains('bi-dash-lg'))
        UpdateProductQuantity(e.target, 2);
    else if(x.contains('mdlC-img') || x.contains('mdlC-title'))
        ProductDetails(e.target);
    else if(x.contains('btn-close'))
        DeleteProductOfCart(e.target);
});

// Muestra el modal "detalles del producto" seleccionado desde el carrito.
const ProductDetails = (object) => {
    parent = object.parentElement

    if(object.classList.contains('mdlC-img')){
        product = {...cart[parent.children[1].children[2].value]}
        SetDataForModalP();
    }        
    else if(object.classList.contains('mdlC-title')){
        product = {...cart[parent.children[2].value]}
        SetDataForModalP();
    }
    modalC.hide();
    modalP.toggle();
}

// Actualiza el valor de la cantidad de un producto en el modal de datalles del producto o del carrido.
const UpdateProductQuantity = (object, op) =>{
    let parent = object.parentElement.parentElement;
    let productQtt, id;

    if(object.classList.contains('qttPlus')){
        productQtt = parent.children[0].children[1];
        productQtt.value = parseInt(productQtt.value) + 1;
    }
    else if(object.classList.contains('bi-plus-lg')){
        productQtt = parent.children[1];
        productQtt.value = parseInt(productQtt.value) + 1;
        ValidateQuantity(productQtt);

        if(op == 2){
            id = parent.parentElement.children[2].value;
            cart[id].quantity = parseInt(productQtt.value);
            SetDataForModalC(0);
        }
    }
    else if(object.classList.contains('qttMinus')){
        productQtt = parent.children[0].children[1];
        productQtt.value = parseInt(productQtt.value) - 1;
        ValidateQuantity(productQtt);
    }
    else if(object.classList.contains('bi-dash-lg')){
        productQtt = parent.children[1];
        productQtt.value = parseInt(productQtt.value) - 1;
        ValidateQuantity(productQtt);

        if(op == 2){
            id = parent.parentElement.children[2].value;
            cart[id].quantity = parseInt(productQtt.value);
            SetDataForModalC(0);
        }
    }
}

// Añade la información del producto seleccionado al modal de carrito.
export const SetDataForModalC = (op) => {
    mdlCartItem.innerHTML = '';
    total = 0;

    if(op == 1)
        GetCartData();

    Object.values(cart).forEach(product => {
        templateCart.querySelector('.mdlC-img').setAttribute("src", `img/${product.foto}`);
        templateCart.querySelector('.mdlC-title').textContent = product.nombre;
        templateCart.querySelector('.mdlC-price').textContent = '$' + product.costo.toFixed(2);
        templateCart.querySelector('.mdlC-id').value = product.id_producto;

        ValidateQuantity(product.quantity);
        templateCart.querySelector('.qttValue').value = product.quantity;
        total += product.costo * product.quantity;
        
        const clone = templateCart.cloneNode(true);
        fragment.appendChild(clone);
    });

    mdlCartItem.appendChild(fragment);
    SetCartData();
    SetTotalPriceAndQuantityItems();
}

// Valida que la cantidad no sea menor a 1 y mayor a 999.
const ValidateQuantity = (qtt) => {
    if(qtt.value <= 0)
        qtt.value = 1;
    else if(qtt.value > 999)
        qtt.value = 999;
}

// Obtiene los elementos del producto a añadir al carrito.
const GetCartData = () => {
    let productQttP = document.querySelector('.qttValue');
    let x = mdlProductItem.querySelector('#mdlP-id').value;

    if(cart.hasOwnProperty(items[x].id_producto))
        cart[items[x].id_producto] = {...items[x], quantity: parseInt(cart[items[x].id_producto].quantity) + parseInt(productQttP.value)};
    else
        cart[items[x].id_producto] = {...items[x], quantity: parseInt(productQttP.value)};
}

// Actualiza el precio total a pagar y la cantidad de articulos.
const SetTotalPriceAndQuantityItems = () =>{
    let ttlPrice = document.querySelectorAll('.totalPrice');
    let ttlItems = document.querySelector('.totalItems');

    ttlPrice.forEach(element =>{
        element.textContent = '$' + total.toFixed(2);
    });
    ttlItems.textContent = Object.keys(cart).length;
}

// Elimina un producto del carrito.
const DeleteProductOfCart = (object) => {
    let id = object.parentElement.parentElement.children[1].children[2].value;
    delete cart[id];
    SetDataForModalC(0);
}

// Reinicia la cantidad en el modal de detalles de producto.
objMdlP.addEventListener('hidden.bs.modal', (e) =>{
    let productQttP = document.querySelector('.qttValue');
    productQttP.value = 1;
});

// Añadir los datos del carrito en la varriable permanente "cart".
const SetCartData = () => {
    localStorage.setItem("cart", JSON.stringify(cart));
}

// Obtener y enviar los datos del carrito del localStorage.
export const GetLSCartData = () => {
    let data = JSON.parse(localStorage.getItem("cart"));
    return data;
}