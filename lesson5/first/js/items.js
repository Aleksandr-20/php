"use strict";
document.forms.items.addEventListener('submit', function (event){
    event.preventDefault();
    let title = this.elements.title.value;
    let count = this.elements.count.value;
    // проверки
    let url = 'lesson-tasks.php?title=' + title + '&count=' + count;
    fetch(url)
        .then(response => response.text())
        .then(answer => {
            let out = document.getElementById('info');
            if (answer == 1) out.innerText = 'Товар есть в наличии';
            else if (answer == 0) out.innerText = 'Товара нет в наличии';
        });
});

