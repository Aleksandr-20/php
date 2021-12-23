"use strict";

// /animals-ajax.php - строка запроса
fetch('/animals-ajax.php')
    .then(response => response.json())
    .then(data => {
        console.log(data);
        let animals = data.animals;
        animals.forEach(animal => {
            let div = document.createElement('div');
            div.innerHTML = `
                <h3> ${animal.name} </h3>
                <img height="300" src="/images/${animal.images}">
            `;
            document.getElementById('animals').append(div);
        });
    });