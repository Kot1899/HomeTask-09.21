//  первая кнопка для примера с числом

function calculator(){
    let inputElement=document.getElementById('input');// переменная для поля ввода
    let sevenElement=document.getElementById('7'); // переменная для button 7

    let sevenVal= '7';   // присвоили в переменную значение что будем вводить
    inputElement.value = inputElement.value+sevenVal;
}

//функция с аргументом (реализовал для кнопки 8)
function calculate(el){
    let inputElement=document.getElementById('input');
    el.value;
    inputElement.value = inputElement.value+el.value;
}

//метод для выполнения функции РАВНО
function equals(){
    let equalsElement=document.getElementById('=')  //обращаемся к кнопке РАВНО
    /*
   необходимо тут реализовать чтобы в кнопке input выполнился расчет и после значение попало в поле result
     */
    document.getElementById('input').value='';  //после выполнения расчета поле INPUT становится пустым
}


// кнопка сброса ввода =РАБОТАЕТ
function clearbutton(){
    let inputElement=document.getElementById('input');
    inputElement.value=''; //присвоим значение что равно пустоте
}



