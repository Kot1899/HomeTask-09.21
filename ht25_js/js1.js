//  первая кнопка для примера с числом

function calculator(){
    let inputElement=document.getElementById('input');// переменная для поля ввода

    let sevenElement=document.getElementById('7'); // переменная для button 7
    let sevenVal= 7;   // присвоили в переменную значение что будем вводить
    inputElement.innerText=inputElement+sevenVal;   // в кнопку переименовуем на значения из инпута
}

// кнопка сброса ввода =РАБОТАЕТ
function clearbutton(){
    let inputElement=document.getElementById('input');
    inputElement.value=''; //присвоим значение что равно пустоте
}