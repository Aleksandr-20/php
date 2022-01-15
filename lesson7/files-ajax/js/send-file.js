"use strict";

/*
document.forms['send-file'].addEventListener('submit',
    function (e){
        e.preventDefault();

        fetch('/handler.php',  {
            method: 'post',
            body: new FormData(this)
        })
            .then(response => response.text())
            .then(text => console.log(text));
    });
*/

document.forms['send-file'].addEventListener('submit', function (e){
    e.preventDefault();

    let file = this.elements.picture.files[0]; // File
    console.log(file.name); // имя файла на компьютере пользователя
    console.log(file.size); // размер файла
    console.log(file.type); // тип файла
    console.log(file.lastModified); // последнее изменение файла

    // проверки на тип и размер, потом отправка

    // this.submit(); - отправка с перезагрузкой

    // отправка без перезагрузки (аякс)
    let fd = new FormData();
    fd.set('picture', file);

    fetch('/handler.php', {
        method: 'post',
        body: fd
    })
        .then(response => response.text())
        .then(text => console.log(text));

});

