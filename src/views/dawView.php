<!DOCTYPE HTML>
<html lang="pl">

<head>
    <?php require_once "viewTemplates/headerTemplate.php" ?>

    <script src="static/jquery.js"></script>
    <script src="static/jCarousel/jquery.jcarousel.js"></script>
    <script src="static/jCarousel/jcarousel.responsive.js"></script>

    <link rel="stylesheet" href="static/jCarousel/jcarousel.responsive.css" type="text/css" />


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
            <h2>DAW's</h2>
            <p>Daw, ang. digital audio interface, po polsku cyfrowa stacja robocza jest to program komputerowy przeznaczony do pracy z dźwiękiem, bardzo często wykorzystywany przy współczenej produkcji muzyki. Ich celem jest zastąpienie pełnowymiarowych konsol znajdujących się w studiach nagraniowych, tak aby większość obróbki dźwięku następowała na komputerze. Jest to rozwiązanie znacznie tańsze i wygodniejsze, a przede wszystkim bardziej dostępne dla ludzi pragnących zając się produkcją muzyki w sposób hobbistyczny. Poniżej porzedstawione są 2 przykładowe DAW: FL-Studio i ABLETON.</p>
            <h2 id="GOTO_FL">Fl Studio</h2>
            <p>A dokładnie, Fruity Loop Studio. DAW pozwalające na stworzenie kompletnego utworu, wraz ze wszystkimi jego komponentami. Jak kompozycja czy miks. Charakteryzuje się przyjazną dla użytkownika oprawą graficzną i szeroką gamą domyślnych pluginów, (zwłaszcza syntezatorów), które posiadają unikalne brzmienie i mają wiele gotowych zaprogtamowanych dźwięków.</p>
            <img src="static/graphics/FL_Screen.png" alt="FL Studio zrzut ekranu" style="width: 100%">
            <h2 id="GOTO_ABLETON">Ableton</h2>
            <p>Funkcjonalnością bardzo podobny do Fl Studio, różni się jednak tym że domyślnie jest mniej zaawansowanych pluginów syntezatorowych, za to jest więcej efektów, które można nałożyć na dźwięki. Często jest wykorzystywany przez profesjonalnych producentów muzyki elektronicznej, podczas gdy Fl-Studio najczęściej wybierają twórcy bitów hip-hopowych.</p>
            <img src="static/graphics/A_Screen.png" alt="Ableton zrzut ekranu" style="width: 100%">
            <h2>Inne DAW:</h2>
            <noscript>Pełna funkcjonalność niedostępna bez JavaScript</noscript>
            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li><img src="static/graphics/C1.png" alt="Garage Band" style="width: 100%"><div style="text-align: center;">Garage Band</div></li>
                        <li><img src="static/graphics/C2.png" alt="Logic Pro" style="width: 100%"><div style="text-align: center;">Logic Pro</div></li>
                        <li><img src="static/graphics/C3.png" alt="Cubase" style="width: 100%"><div style="text-align: center;">Cubase</div></li>
                        <li><img src="static/graphics/C4.png" alt="FL Studio" style="width: 100%"><div style="text-align: center;">FL Studio</div></li>
                        <li><img src="static/graphics/C5.png" alt="Ableton" style="width: 100%"><div style="text-align: center;">Ableton</div></li>
                    </ul>
                </div>

                <div id="Div_controls" class="nodisp">
                    <a href="#" class="jcarousel-control-prev" style="text-decoration: none; color: white !important;">&lsaquo;</a>
                    <a href="#" class="jcarousel-control-next" style="text-decoration: none; color: white !important; ">&rsaquo;</a>
                </div>

                <p class="jcarousel-pagination"></p>
            </div>
        </article>
    </main>
    <aside>
        <?php include "viewTemplates/asideTemplate.php" ?>
    </aside>
    <footer>
        <?php include "viewTemplates/footerTemplate.php" ?>
    </footer>

    <script>
        document.getElementById("Div_controls").classList.remove("nodisp");
    </script>

    <script src="static/darkmode.js"></script>

</body>

</html>