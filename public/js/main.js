function formartInputForPrice(input){
    let valueInput = parseFloat(input.value.replace(/\D/g,'')) / 100;
    valueInput = isNaN(valueInput) ? 0 : valueInput;

    let pattern = new Intl.NumberFormat('pt-BR',{
        style: 'currency',
        currency: 'BRL'
    });

    input.value = pattern.format(valueInput);
}
let price = [];
function getTotalPrice(element){

    elementValue = element.value;
    price.push(elementValue)
}
console.log(price)




    // let idPriceTotal = document.querySelector('#priceTotal');
    // let option = element.selectedIndex;
    // let optionPrice = element.options[option];
    // let attOption = optionPrice.getAttribute('price');
    //
    // price.push(attOption);
    //
    // console.log(price);
    // idPriceTotal.innerHTML =+ attOption;




