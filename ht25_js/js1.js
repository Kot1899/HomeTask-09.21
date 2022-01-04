// кнопка сброса ввода =РАБОТАЕТ
function clearbutton(){
    let inputElement=document.getElementById('input');
    inputElement.value=''; //присвоим значение что равно пустоте
}


//  первая кнопка для примера с числом
function calculator(){
    let inputElement=document.getElementById('input');// переменная для поля ввода
    let sevenElement=document.getElementById('7'); // переменная для button 7
    let sevenVal= '7';   // присвоили в переменную значение что будем вводить
    inputElement.value = inputElement.value+sevenVal;
}


//функция с аргументом (реализовал для кнопки 0-9)
function calculateNumber(el){
    let inputElement=document.getElementById('input');
    el.value;
    inputElement.value = inputElement.value+el.value;
    let number = inputElement.value;  //переменная Б, просто числа
    return number;
}


//метод для символов
function calculateSymbol(elem){
    let inputValue=document.getElementById('input').value; //inputValue - это перменная А с числом которую запоминаем
    let symbol= elem.value; //el.value - это переменная ЗНАК МАТ-ОПЕРАЦИИ
    let inputElement=document.getElementById('input');
    document.getElementById('input').value='';  //после выполнения расчета поле INPUT становится пустым
    return inputValue;
    return symbol;
}


//метод для выполнения функции РАВНО
function equals(){
    let equalsElement=document.getElementById('=')  //обращаемся к кнопке РАВНО
    let resultElement=document.getElementById('result');   // обратились к нопке РЕЗАЛТ
    let result; // некая перменная которая примет в себя результат логического вычесления

    switch (symbol){
        case '+':
            result=inputValue"+"number;
            break;
        case '-':
            result=inputValue"-"number;
            break;
        case '*':
            result=inputValue"*"number;
            break;
        case '/':
            result=inputValue"/"number;
            break;
        default:
            result='error';
    }
    resultElement.value= result;  //  в поле РЕЗУЛЬТАТА калькулятора выведется значение итоговое
    document.getElementById('input').value='';  //после выполнения расчета поле INPUT становится пустым
}





