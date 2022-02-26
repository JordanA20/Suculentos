const templateItem = document.querySelector('.templateItem').content;
const item = document.querySelector('#items');

document.addEventListener('DOMContentLoaded', async () => {
    items = await FetchData('BSP', false, '');
    SetDataForItems();
    
    if(GetCartData() != null){
        cart = GetCartData();
        if(Object.values(cart).length > 0)
            setDataForModalC(0);
    }
});