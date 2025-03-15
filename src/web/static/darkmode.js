if (localStorage.hasOwnProperty('czy_ciemny')) {
    if (localStorage.getItem('czy_ciemny') == 'tak') zamien_na_ciemne();
    if (localStorage.getItem('czy_ciemny') == 'nie') zamien_na_jasne();
}
else {
    localStorage.setItem('czy_ciemny', 'tak');
}

function zamien_na_ciemne() {
    let dozamienienia = document.querySelectorAll('article, #asidecontent, #footercontent, section, form');
    let dozamienieniaText = document.querySelectorAll('body, a, h1, h2, h3');
    let dozamienieniaBackground = document.body;

    for (zamiana of dozamienienia) {
        zamiana.classList.remove("light_mode");
    }

    for (zamiana of dozamienieniaText) {
        zamiana.classList.remove("light_text_mode");
    }

    dozamienieniaBackground.style.backgroundImage = 'url("static/graphics/pattern4.png")';
}

function zamien_na_jasne() {
    let dozamienienia = document.querySelectorAll('article, #asidecontent, #footercontent, section, form');
    let dozamienieniaText = document.querySelectorAll('body, a, h1, h2, h3');
    let dozamienieniaBackground = document.body;

    for (zamiana of dozamienienia) {
        zamiana.classList.add("light_mode");
    }

    for (zamiana of dozamienieniaText) {
        zamiana.classList.add("light_text_mode");
    }

    dozamienieniaBackground.style.backgroundImage = 'url("static/graphics/pattern5.png")';
}