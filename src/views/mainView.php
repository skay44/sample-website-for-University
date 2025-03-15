<!DOCTYPE HTML>
<html lang="pl">

<head>
    <?php require_once "viewTemplates/headerTemplate.php" ?>

    <script src="static/jquery.js"></script>

    <script src="static/jqueryUI/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="static/jqueryUI/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="static/jqueryUI/jquery-ui.structure.min.css" type="text/css" />
    <link rel="stylesheet" href="static/jqueryUI/jquery-ui.theme.min.css" type="text/css" />

    <script src="static/popup.js"></script>

</head>

<body>
    <header>
        <?php include "viewTemplates/titleTemplate.php" ?>
    </header>

    <nav>
        <?php include "viewTemplates/navTemplate.php" ?>
    </nav>

    <main>
        <article>
            <h2>Produkcja Muzyki</h2>
            <p>Moim hobby, już od wielu lat jest produkcja muzyki. Zazwyczaj komponuje szeroko pojętą muzykę elektroniczną. Nie skupiając się na jednym konkretnym gatunku, czy stylu. Jest to zajęcie bardzo relaksujące i satysfakcjonujące, a także spełniające twórczo. Robie muzykę czysto hobbistycznie, do tej pory nie wydawałem publicznie moich utworów, ale planuje to zmienić. Np poprzez wykorzystanie własnych utworach w swoich grach komputerowych, animacjach itd, a może nawet wydając je jako niezależne utwory. Mimo wszystko, jest to głównie forma relaksu, a nie czegoś profesjonalnego. W muzyce tzw. "profesjonalne brzmienie" często sprowadza się do podąrzania pewnymi utartymi ścieżkami i sposobami produkcji. A taki proces jest mniej twórczy, a wymagający więcej czasu, doświadzenia i pracy.</p>
            <p>Niestety komponowanie muzyki nie jest zajęciem jakie pierwsze przyszłoby do głowo osobie, która ma ochote zrobić coś twórczego. Na pierwszy ogień poszłoby rysowanie, malowanie farbkami czy też rzeźba. Dzieje się tak z powodu rzekomego wysokiego progu wejścia, a także sposobu nauki muzyki w szkołach muzycznych skupiającego się na nauce gry na instrumencie i odtwarzania innych utworów. Oczywiście, są to bardzo przydatne umiejętności które warto wiedzieć, zwłaszcza gdy zamierza się zajmować produkcją muzyki, ale mam wrażenie że w świadomości społecznej jest pogląd o muzyce jako o bardziej teoretycznej formie sztuki, gdzie tylko najlepsi są w stanie skomponować utwór, a reszta jedynie uczy się go grać. W rzeczuwistości nie wszystko w muzyce musi być zgodne z zasadami (chodziaż ich znajomość pomaga), natomiast można potraktować ją luźniej jako formę prostej ekspresji.</p>
            <img class="imgclassl" src="static/graphics/speaker.png" alt="głośnik1" style="width: 50%;" />
            <img class="imgclassr" src="static/graphics/speaker2.png" alt="głośnik2" style="width: 50%;" />
            <h2>Jak wygląda proces produkcji?</h2>
            <p>Podstawowym narzędziem z jakiego należy skorzystać jest tzw. <a href="daw">DAW</a> ang. digital audio interface, czyli po polsku: "cyfrowa stacja robocza". Jest to program który umożliwia zapisywanie ścieżek dźwiękowych, modyfikowanie ich, nagrywanie instrumentów itd. DAW to podstawowe narzędzie, z którego korzysta się podczas produkcji muzyki. Do najbardziej popularnych DAW zalicza się: <a href="daw">Ableton</a>, <a href="daw">FL-Studio</a>, Logic Pro, Garage Band czy Cubase. Osobiście używam FL-Studio. Kolejną rzeczą która może się przydać będzie kontroler MIDI, jest to keyboard, albo drum-pad który samemu nie wydaje dźwięków ale ich sygnał jest przesyłany do komputera i przetwarzany w cyfrowej stacji roboczej. Poniżej przykładowe kontrolery midi: </p>
            <img class="imgclassl" src="static/graphics/midi.png" alt="keyboard midi" style="width: 50%;" />
            <img class="imgclassr" src="static/graphics/midi2.png" alt="drumpad midi" style="width: 50%;" />
            <p>
                Kolejnymi ważnymi elementami produkcji muzyki są <a href="pluginy">wtyczki</a> potocznie nazywane z języka angielskiego "Pluginami". Są głównymi narzędziami jakimi operuje się na dźwięku. Pluginy możemy podzielić na 2 kategorie: <a href="pluginy">generujące</a> i <a href="pluginy">efekty</a>. Te pierwsze odpowiadają za generowanie lub odtwarzanie dźwięku, mogą to być syntezatory wytwarzające dźwięk od zera, albo tak zwane samplery, odtwarzające zmodyfikowane fragmenty wgranych dźwięków. Pluginy nakładające efekty zazwyczaj nie generują dźwięku i nie są używane jako instrument ale nakładane na ścieżki. Służą do modyfikowania wygenerowanego wcześniej dźwięku np. nakładają filtr wysokich lub niskich częstotliwości dodają pogłos lub echo albo usuwają niechciane szumy.
            </p>
            <h2>Podstawowe zagadnienia teoretyczne</h2>
            <p>Mimo, że według mnie posiadanie wiedzy z zakresu teorii muzyki nie jest konieczne do rozpoczęcia produkcji muzyki, wiedza książkowa okazuje się bardzo przydatna. Przyspiesza prace i ułatwia osiągnięcie oczekiwanych rzultatów. A także może użyta kreatywnie. Np celowe odejście od reguł i zasad tworzenia akordów durowych czy molowych na rzecz bardziej zaskakującego, dysonansowego akordu. Na szczęście istnieje wiele książek i kursów dobrze objaśniających temat. W dodatku na platformie YouTube można znaleźć darmowe filmiki objaśniające podstawowe aspekty teorii muzyki. Po proawej stronie zamieszczone są linki do przykładowych źródeł wiedzy, od książek aż po darmowy 30 minutowy filmik objaśniający podstawy. Do najważniejszych zagadnień z którymi warto się zapoznać zaliczyłbym: skale durowe i molowe, tempo, wartości nut(ich długości), tworzenie akordów durowych i molowych, powiększanie akordów, transpozycja i tworzenie progresji akordów.</p>
            <div id="popup" style="display: none;" title="Więcej informacji?">
                <p>W sekcji <em>"Zobacz też"</em> znajduja się linki do stron z dokładniejszymi informacjami o niektórych poruszanych zagadnieniach.</p>
            </div>
        </article>
    </main>
    <aside>
        <?php include "viewTemplates/asideTemplate.php" ?>
    </aside>
    <footer>
        <?php include "viewTemplates/footerTemplate.php" ?>
    </footer>

    <script >
        if (localStorage.hasOwnProperty('czy_ciemny')) {
            if (localStorage.getItem('czy_ciemny') == 'tak') {
                document.getElementById("popup").style.cssText = "font - size: 20px; display: none; background-color: #333333; color: #ffffff;";
            }
            else {
                document.getElementById("popup").style.cssText = "font - size: 20px; display: none; background-color: #cccccc; color: black;";
            }
        }
        else {
            document.getElementById("popup").style.cssText = "font - size: 20px; display: none; background-color: #333333; color: #ffffff;";
        }


    </script>

    <script src="static/darkmode.js"></script>


</body>

</html>