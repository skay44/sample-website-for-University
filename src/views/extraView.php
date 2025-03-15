<!DOCTYPE HTML>
<html lang="pl">

<head>
    <?php require_once "viewTemplates/headerTemplate.php" ?>


</head>

<body>
    <header>
        <?php include "viewTemplates/titleTemplate.php" ?>
    </header>

    <nav>
        <?php include "viewTemplates/navTemplate.php" ?>
    </nav>

    <main>
        <article id="dodatkoweOpcje" class="todark">
            <h2>Galeria zdjęć:</h2>
            <a href="galeria"><span class="przyciskOpcje przyciskUtwor">Galeria</span></a>
            <h2>Moje przykładowe dema utworów:</h2>
            <p id="przykładowe_utwory"></p>
            <div id="miejsceNaUtwor"></div>
            <noscript class="nojs">Funkcjonalnoś jest niedostępna bez JavaScript</noscript>
            <h2>Dodatkowe opcje:</h2>
            <noscript class="nojs">Funkcjonalnoś jest niedostępna bez JavaScript</noscript>
        </article>

    </main>


    <aside>
        <?php include "viewTemplates/asideTemplate.php" ?>
    </aside>
    <footer>
        <?php include "viewTemplates/footerTemplate.php" ?>
    </footer>





    <script>
        let audio_link = "";
        let przycisk_utwor = document.createElement("span");
        przycisk_utwor.classList.add("przyciskOpcje");
        przycisk_utwor.classList.add("przyciskUtwor");
        let przycisk_text_utwor = document.createTextNode("Podaj przykładowy utwór");
        przycisk_utwor.appendChild(przycisk_text_utwor);
        przycisk_utwor.addEventListener('click', losuj_utwor);
        document.getElementById("przykładowe_utwory").appendChild(przycisk_utwor);

        if (sessionStorage.hasOwnProperty('wylosowany')) {
            dodaj(sessionStorage.getItem('wylosowany'));
        }


        function dodaj(a) {
            document.querySelector('#miejsceNaUtwor').innerHTML = 'demo nr. ' + a + '<br/> <br/>'+'<audio controls><source src="static/audio/' + a + '.mp3" type="audio/mpeg">Your browser does not support the audio element.</audio>';
        }

        function losuj_utwor() {
            let liczba_losowa;
            let czy_koniec = false;
            while (czy_koniec == false) {
                liczba_losowa = Math.floor(Math.random() * 5 + 1);
                if (sessionStorage.hasOwnProperty('wylosowany')) {
                    if (sessionStorage.getItem('wylosowany') != liczba_losowa) {
                        czy_koniec = true;
                    }
                }
                else {
                    czy_koniec = true;
                }
            }
            dodaj(liczba_losowa);
            sessionStorage.setItem('wylosowany', liczba_losowa);
        }



        let przycisk = document.createElement("div");
        przycisk.classList.add("przyciskOpcje");
        przycisk.classList.add("przyciskOpcjeActive");
        let przycisk_text = document.createTextNode("Tryb ciemny włączony");
        przycisk.appendChild(przycisk_text);
        przycisk.addEventListener('click', zamien);


        if (localStorage.hasOwnProperty('czy_ciemny')) {
            if (localStorage.getItem('czy_ciemny') == 'tak') zamien_na_ciemne();
            if (localStorage.getItem('czy_ciemny') == 'nie') zamien_na_jasne();
        }
        else {
            localStorage.setItem('czy_ciemny', 'nie');
        }

        //let miejsce = document.querySelector('.nojs');
        document.querySelector('article').appendChild(przycisk);

        function zamien_na_jasne() {

            let dozamienienia = document.querySelectorAll('article, #asidecontent, #footercontent');
            let dozamienieniaText = document.querySelectorAll('body, a, h1, h2, h3');
            let dozamienieniaBackground = document.body;

            for (zamiana of dozamienienia) {
                zamiana.classList.add("light_mode");
            }

            for (zamiana of dozamienieniaText) {
                zamiana.classList.add("light_text_mode");
            }

            dozamienieniaBackground.style.backgroundImage = 'url("static/graphics/pattern5.png")';


            przycisk.classList.add("przyciskOpcjeUnactive");
            przycisk.classList.remove("przyciskOpcjeActive");
            przycisk.innerText = "Tryb ciemny wyłączony";


        }

        function zamien_na_ciemne() {

            let dozamienienia = document.querySelectorAll('article, #asidecontent, #footercontent');
            let dozamienieniaText = document.querySelectorAll('body, a, h1, h2, h3');
            let dozamienieniaBackground = document.body;

            for (zamiana of dozamienienia) {
                zamiana.classList.remove("light_mode");
            }

            for (zamiana of dozamienieniaText) {
                zamiana.classList.remove("light_text_mode");
            }

            dozamienieniaBackground.style.backgroundImage = 'url("static/graphics/pattern4.png")';

            przycisk.classList.remove("przyciskOpcjeUnactive");
            przycisk.classList.add("przyciskOpcjeActive");
            przycisk.innerText = "Tryb ciemny włączony";


        }

        function zamien() {


            if (localStorage.getItem('czy_ciemny') == 'tak') {
                zamien_na_jasne()

                localStorage.setItem('czy_ciemny', 'nie');
            }
            else {
                zamien_na_ciemne()


                localStorage.setItem('czy_ciemny', 'tak');
            }
        }


    </script>

</body>

</html>