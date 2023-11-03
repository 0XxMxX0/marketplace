function formartInputForPrice(input){
    let valueInput = parseFloat(input.value.replace(/\D/g,'')) / 100;
    valueInput = isNaN(valueInput) ? 0 : valueInput;

    let pattern = new Intl.NumberFormat('pt-BR',{
        style: 'currency',
        currency: 'BRL'
    });

    input.value = pattern.format(valueInput);
}
