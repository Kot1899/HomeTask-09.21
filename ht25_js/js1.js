// кнопка сброса ввода =РАБОТАЕТ
function clearbutton(){
    let inputElement=document.getElementById('input');
    inputElement.value=''; //присвоим значение что равно пустоте
}

var numberCal;
var symbolCal;
var inputValue;
var resultCal;

//  первая кнопка для примера с числом
// function calculator(){
//     let inputElement=document.getElementById('input');// переменная для поля ввода
//     let sevenElement=document.getElementById('7'); // переменная для button 7
//     let sevenVal= '7';   // присвоили в переменную значение что будем вводить
//     inputElement.value = inputElement.value+sevenVal;
// }


//функция с аргументом (реализовал для кнопки 0-9)
function calculateNumber(el){

    // обнуляем сначала поле результата
    let resultElement=document.getElementById('result');
    document.getElementById('result').value='';
    let inputElement=document.getElementById('input');
    inputElement.value = inputElement.value+el.innerHTML;
    numberCal = inputElement.value;  //переменная Б, просто числа

}

// метод для символов
function calculateSymbol(elem){

    inputValue=document.getElementById('input').value; //inputValue - это перменная А с числом которую запоминаем

    document.getElementById('input').value=''; //обнуляем поле сначала

    symbolCal= elem.innerHTML; // - это переменная ЗНАК МАТ-ОПЕРАЦИИ

    document.getElementById('input').value='';  //после выполнения расчета поле INPUT становится пустым

}


//метод для выполнения функции РАВНО
function equals(){

     let resultElement=document.getElementById('result');   // обратились к нопке РЕЗАЛТ

    switch (symbolCal){
        case '+':
            resultCal=parseInt(inputValue)+parseInt(numberCal);
            break;
        case '-':
            resultCal=parseInt(inputValue)-parseInt(numberCal);
            break
        case '*':
            resultCal=parseInt(inputValue)*parseInt(numberCal);
            break;
        case '/':
            resultCal=parseInt(inputValue)/parseInt(numberCal);
            break;
        default:
            resultCal='error';
    }
    resultElement.value= resultCal;  //  в поле РЕЗУЛЬТАТА калькулятора выведется значение итоговое
     document.getElementById('input').value='';  //после выполнения расчета поле INPUT становится пустым
}





