'use strict'
let dataUrl = 'https://nosarevavs.ru/php/data.php'

async function sendForm(form) {
    let response = await fetch(dataUrl, {
        method: 'POST',
        body: new FormData(form)
    });
    if (response.ok) {
        let result = await response.text();
    }
}