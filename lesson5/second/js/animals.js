"use strict";

document.forms.animals.addEventListener('submit', function (event){
    event.preventDefault();
    let fd = new FormData(this);
    if (!this.elements.age.value){
        fd.set('age', '0');
    }
    // fd.set('key', 'value');
    fetch('lesson-tasks.php', {
        method: 'post',
        body: fd
    })
        .then(response => response.json())
        .then(answer => {
            console.log(answer);
        });
})