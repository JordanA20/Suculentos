// Menue
// const btnAdd = document.querySelector('#add');
const items = document.querySelector('.container-vaners');

// Modals
//      Modal Producto
const modalP = new bootstrap.Modal(document.getElementById('mdlProduct'), "");
const objMdlP = document.querySelector('#mdlProduct');
const mdlProductItem = document.querySelector('#mdlP-item');
const btnMinusP = document.querySelector('#mdlP-qttMinus');
const btnPlusP = document.querySelector('#mdlP-qttPlus');

let productQttP = document.querySelector('#mdlP-qttValue');

//      Modal Carrito
const modalC = new bootstrap.Modal(document.getElementById('mdlCart'), "");
const objMdlC = document.querySelector('#mdlcart');
const mdlCartItem = document.querySelector('#mdlC-item');
const btnAddToCart = document.querySelector('#addToCart');
const templateCart = document.querySelector('#templateCart').content;
const fragment = document.createDocumentFragment();

// Variables generales
let product = {};
let cart = {};
let total;


// Disminulle la cantidad del articulo a comprar.
btnMinusP.addEventListener('click', (e)=>{
    productQttP.value = parseInt(productQttP.value) - 1;
});

// Aumenta la cantidad del articulo a comprar.
btnPlusP.addEventListener('click', (e)=>{
    productQttP.value = parseInt(productQttP.value) + 1;
});


//
// const CreateBtnsQttCarrito = () =>{
//     let btnMinusC = document.querySelector('.mdlC-qttMinus');
//     let btnPlusC = document.querySelector('.mdlC-qttPlus');

//     console.log(mdlCartItem.hasChildNodes());
//     if(mdlCartItem.hasChildNodes()){
//         console.log(mdlCartItem.hasChildNodes());
//         // Disminulle la cantidad del articulo a comprar.
//         btnMinusC.addEventListener('click', (e)=>{
//             UpdateProductQuantity(btnMinusC);
//         });

//         // Aumenta la cantidad del articulo a comprar.
//         btnPlusC.addEventListener('click', (e)=>{
//             UpdateProductQuantity(btnPlusC);
//         });
//     }
// }


const UpdateProductQuantity = btn => {
    // let productQttC;
    let parent;

    if(btn.id == 'mdlP-qttPlus')
        
    else if(btn.id == 'mdlP-qttMinus')
        
    // else if(mdlCartItem.hasChildNodes()){
    //     if(btn.id == 'mdlC-qttPlus'){
    //         parent = btn.parentElement;
    //         console.log(parent.querySelector("#mdlC-id"));
    //         
    //     }
    //     else if(btn.id == 'mdlC-qttMinus'){
    //         parent = btn.parentElement;
    //         productQttC = parent.querySelector("#mdlC-qttValue");
    //         productQttC.value = parseInt(productQttC.value) - 1;
    //     }
    // }
    ValidateQuantity();
}

//Valida que la cantidad no sea menor a 1 y mayor a 999.
const ValidateQuantity = () => { 
    if(productQttP.value <= 0)
        productQttP.value = 1;
    else if(productQttP.value > 999)
        productQttP.value = 999;
    // else if(mdlCartItem.hasChildNodes()){
    //     if(pQttC.value <= 0)
    //         pQttC.value = 1;
    //     else if(pQttC.value > 999)
    //         pQttC.value = 999;
    // }
}

// Evento de selección de Productos.
items.addEventListener('click', (e)=>{
    getProductData(e.target.parentElement);
});

// Obtiene los elementos del producto.
const getProductData = data => {
    product = {
        id: data.querySelector('.__vnr-id').value,
        img: data.querySelector('.__vnr-img').getAttribute("src"),
        title: data.querySelector('.__vnr-title').textContent,
        price: data.querySelector('.__vnr-price').textContent,
        description: data.querySelector('.__vnr-description').value,
        quantity: 1
    }
    //console.log(product);
    setDataForModalP();
}

// Añade la información del producto seleccionado al modal de Producto.
const setDataForModalP = () => {
    mdlProductItem.querySelector('#mdlP-img').setAttribute('src', product.img);
    mdlProductItem.querySelector('#mdlP-title').textContent = product.title;
    mdlProductItem.querySelector('#mdlP-description').textContent = product.description
    mdlProductItem.querySelector('#mdlP-price').textContent = '$' + product.price
    // // templateModal.querySelector('#mdl-id').textContent =
}

// Evento para añadir productos al carrito.
btnAddToCart.addEventListener('click', e => {
    setDataForModalC();

    modalP.hide();
    modalC.toggle();
    CreateBtnsQttCarrito();
});

mdlProductItem.addEventListener('click', e => {
    if(e.target.classList.contains('mdlP-qttPlus')){
        asdlkjsdl();
    }
});

// Evento de selección de Productos del articulo.
mdlCartItem.addEventListener('click', e => {
    let parent = e.target.parentElement;
    let productQttC;

    if(e.target.classList.contains('mdlC-qttPlus')){
        productQttC = parent.querySelector("#mdlC-qttValue");
        productQttC.value = parseInt(productQttC.value) + 1;
    }
    else if(e.target.classList.contains('bi-plus-lg')){
        productQttC = parent.parentElement.querySelector("#mdlC-qttValue");
        productQttC.value = parseInt(productQttC.value) + 1;
    }
    else if(e.target.classList.contains('mdlC-qttMinus')){
        productQttC = parent.querySelector("#mdlC-qttValue");
        productQttC.value = parseInt(productQttC.value) - 1;
    }
    else if(e.target.classList.contains('bi-dash-lg')){
        productQttC = parent.parentElement.querySelector("#mdlC-qttValue");
        productQttC.value = parseInt(productQttC.value) - 1;
    }
});

// Añade la información del producto seleccionado al modal de carrito.
const setDataForModalC = () => {
    mdlCartItem.innerHTML = '';
    total = 0;
    getCartData();

    Object.values(cart).forEach(product => {
        templateCart.querySelector('#mdlC-img').setAttribute("src", product.img);
        templateCart.querySelector('#mdlC-title').textContent = product.title;
        templateCart.querySelector('#mdlC-price').textContent = '$' + product.price
        templateCart.querySelector('#mdlC-qttValue').value = product.quantity
        templateCart.querySelector('#mdlC-id').value = product.id;

        total += product.price * product.quantity;

        const clone = templateCart.cloneNode(true);
        fragment.appendChild(clone);
    });

    mdlCartItem.appendChild(fragment);
    setTotalPrice();
}

// Obtiene los elementos del producto a añadir al carrito.
const getCartData = () => {
    if(cart.hasOwnProperty(product.id))
        product.quantity = cart[product.id].quantity + parseInt(productQttP.value);
    else
        product.quantity = parseInt(productQttP.value);

    cart[product.id] = {...product}
    // console.log(cart);
}

// Actualiza el precio tatal a pagar en el carrito.
const setTotalPrice = () =>{
    let totalPrice = document.querySelector('#totalPrice');

    totalPrice.textContent = '$' + total.toFixed(2);
    // console.log(total);
}

// Reinicia la cantidad en el modal de Producto.
objMdlP.addEventListener('hidden.bs.modal', (e) =>{
    productQttP.value = 1;
});