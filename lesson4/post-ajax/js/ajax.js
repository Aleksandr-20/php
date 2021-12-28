"use strict";

document.forms.ajax.addEventListener('submit',
    function (event){
        event.preventDefault();
        // проверки

        fetch('ajax-handler.php', {
            method: 'post',
            body: new FormData(this)
        })
            .then(response => response.text())
            .then(text => console.log(text));
    });
// ключ: значение
// name: value
let fd = new FormData();
fd.append('key', 'value');
fd.get('key');
fd.delete('key');

