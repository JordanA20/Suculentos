// Menue
// const tpOptions = document.querySelector('#typeOptions');
// const item = document.querySelector('#items');
// const categories = document.querySelector('#filterCategories');
// const templateItem = document.querySelector('.templateItem').content;

// Modals
//      Modal Producto
const modalP = new bootstrap.Modal(document.getElementById('mdlProduct'), "");
const objMdlP = document.querySelector('#mdlProduct');
const mdlProductItem = document.querySelector('#mdlP-item');
const btnAddToCart = document.querySelector('#addToCart');

//      Modal Carrito
const modalC = new bootstrap.Modal(document.querySelector('#mdlCart'), "");
const objMdlC = document.querySelector('#mdlCart');
const mdlCartItem = document.querySelector('#mdlC-item');
const templateCart = document.querySelector('.templateCart').content;
const fragment = document.createDocumentFragment();

// Variables generales
let items = {};
let product = {};
let cart = {};
let total;


// Evento del select de typo de producto, optiene los datos y los envia al evento para mostrarlos.
// categories.addEventListener('change', async () => {
//     items = await FetchData('Products', categories.value);
//     SetDataForItems();
// })

// Llamado al api.
const FetchData = async (op, sd, dt) => {
    let data = new FormData();
    data.append('p', op);

    if(sd)
        data.append('category', dt);

    try {
        const res = await fetch('/Suculentos/Api/suculentos.php', {
            method: 'POST',
            body: data
        })
        const datos = await res.json();
        // console.log(datos);
        return await datos;
    } catch (error) {
        alert(error);
    }
}

// Cargar los productos en los items.
const SetDataForItems = e => {
    item.innerHTML = '';
    
    Object.values(items).forEach(product => {
        templateItem.querySelector('.__item-id').value = product.id_producto;
        templateItem.querySelector('.__item-img').setAttribute('src', `/Suculentos/Vista/IMG/${product.foto}`);
        templateItem.querySelector('.__item-title').textContent = product.nombre;
        templateItem.querySelector('.__item-price').textContent = `$${product.costo}`;
        
        const clone = templateItem.cloneNode(true);
        fragment.appendChild(clone);
    });

    item.appendChild(fragment);
}

// Evento de selección de Productos.
item.addEventListener('click', e => {
    setDataForModalP(e.target.parentElement.children[3].value);
});

// Añade la información del producto seleccionado al modal de Producto.
const setDataForModalP = x => {
    mdlProductItem.querySelector('#mdlP-img').setAttribute('src', `/Suculentos/Vista/IMG/${items[x].foto}`);
    mdlProductItem.querySelector('#mdlP-title').textContent = items[x].nombre;
    mdlProductItem.querySelector('#mdlP-description').textContent = items[x].descripcion
    mdlProductItem.querySelector('#mdlP-price').textContent = '$' + items[x].costo
    mdlProductItem.querySelector('#mdlP-id').value = x;
}

// Evento para añadir productos al carrito.
btnAddToCart.addEventListener('click', () => {
    setDataForModalC(1);

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
        setDataForModalP();
    }        
    else if(object.classList.contains('mdlC-title')){
        product = {...cart[parent.children[2].value]}
        setDataForModalP();
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
            setDataForModalC(0);
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
            console.log(id);
            cart[id].quantity = parseInt(productQtt.value);
            setDataForModalC(0);
        }
    }
}

// Añade la información del producto seleccionado al modal de carrito.
const setDataForModalC = (op) => {
    mdlCartItem.innerHTML = '';
    total = 0;

    if(op == 1)
        getCartData();

    Object.values(cart).forEach(product => {
        templateCart.querySelector('.mdlC-img').setAttribute("src", `/Suculentos/Vista/IMG/${product.foto}`);
        templateCart.querySelector('.mdlC-title').textContent = product.nombre;
        templateCart.querySelector('.mdlC-price').textContent = '$' + product.costo;
        templateCart.querySelector('.mdlC-id').value = product.id_producto;

        ValidateQuantity(product.quantity);
        templateCart.querySelector('.qttValue').value = product.quantity;
        // console.log(product.quantity);
        total += product.costo * product.quantity;
        
        const clone = templateCart.cloneNode(true);
        fragment.appendChild(clone);
    });

    mdlCartItem.appendChild(fragment);
    SetCartData();
    setTotalPriceAndQuantityItems();
}

//Valida que la cantidad no sea menor a 1 y mayor a 999.
const ValidateQuantity = (qtt) => {
    if(qtt.value <= 0)
        qtt.value = 1;
    else if(qtt.value > 999)
        qtt.value = 999;
}

// Obtiene los elementos del producto a añadir al carrito.
const getCartData = () => {
    let productQttP = document.querySelector('.qttValue');
    let x = mdlProductItem.querySelector('#mdlP-id').value;

    // cart[items[x].id] = {}

    if(cart.hasOwnProperty(items[x].id_producto))
        cart[items[x].id_producto] = {...items[x], quantity: parseInt(cart[items[x].id_producto].quantity) + parseInt(productQttP.value)};
    else
        cart[items[x].id_producto] = {...items[x], quantity: parseInt(productQttP.value)};
}

// Actualiza el precio total a pagar en el carrito.
const setTotalPriceAndQuantityItems = () =>{
    let totalPrice = document.querySelector('#totalPrice');
    let cartDatail = document.querySelector('#cartDetail');
    totalPrice.textContent = '$' + total.toFixed(2);
    cartDatail.textContent = `Items (${Object.keys(cart).length}) - $${total.toFixed(2)}`
}

// Elimina un producto del carrito.
const DeleteProductOfCart = (object) => {
    let id = object.parentElement.parentElement.children[1].children[2].value;
    delete cart[id];
    setDataForModalC(0);
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

// Obtener y enviar los datos del carrito de la variable permanente.
const GetCartData = () => {
    let data = JSON.parse(localStorage.getItem("cart"));
    return data;
}