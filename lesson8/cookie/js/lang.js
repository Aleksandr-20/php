"use strict";

// получить
console.log(document.cookie); // 'name=value; name2=value;'

// установить
document.cookie = 'name=value';
document.cookie = 'name=value; path: /;';

document.cookie =
    encodeURIComponent('выбранный цвет') + '=value';



document.forms.translation.addEventListener('submit',
    function (e){
    e.preventDefault();


     fetch('lang-handler.php', {
         method: 'post',
         body: new FormData(this)
     })
         .then(response => response.json()) // {lang:'ru'}
         .then(data =>
             document.getElementById('user-lang')
                 .innerText = data.lang
         )



});


