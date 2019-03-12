"use strict";

// let login = prompt('Введите логин');
// let password;
// if (login === null)
// {
//     alert('Вход отменён');
// }
// else if (login !== 'Admin')
// {
//     alert ('Я вас не знаю')
// }
// else
// {
//     password = prompt('Введите пароль');
//
//     if (password==='Чёрный властелин') {
//         alert ('welcome!');
//     }
//     else if (password !==null)
//     {
//         alert ('password wrong ;(');
//     }
//     else {
//         alert('Вход отменён');
//     }
//
// }

let login = prompt('Введите логин');
let password;
switch (login) {
    case 'Admin':
        password = prompt('Введите пароль');

        switch (password) {
            case 'Чёрный властелин':
                alert('Добро пожаловать');
                break;
            case null:
                alert('Вход отменён');
                break;
            default:
                alert('Пароль не верный');
        }

        break;

    case null:
        alert('Вход отменён');
        break;
    default:
        alert('Я вас не знаю');
}
