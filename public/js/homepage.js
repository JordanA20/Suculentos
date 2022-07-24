import { FetchData, SetItems, SetDataForItems, GetLSCartData, SetCart, SetDataForModalC, cart } from './pedido.js';

document.addEventListener('DOMContentLoaded', async () => {
    const data = await FetchData('bSProducts');
    SetItems(data);
    SetDataForItems(0);
    
    if(GetLSCartData() != null){
        SetCart();
        if(Object.values(cart).length > 0)
            SetDataForModalC(0);
    }
});