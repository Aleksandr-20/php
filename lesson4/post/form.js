"use strict";

document.getElementsByTagName('form')[0]
    .addEventListener('submit', function (event){
        event.preventDefault();
        // проверки
        this.submit(); // отправка данных формы на сервер
    });
