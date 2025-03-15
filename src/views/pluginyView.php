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
        <article>
            <h2>Pluginy</h2>
            <p>Pluginy, pluginy VST (ang. Virtual Studio Technology), czyli podprogramy otwierane w środowisku zapewnianym przez DAW, których celem jest tworzenie lub modyfikowanie dźwięku a nawet więcej. Pluginy rozróżniamy przede wszystkim na generujące i nakładające efekty, zazwyczaj DAW wyróżnia osobne miejsca do załączena dla obu typów.</p>
            <table>
                <tr>
                    <th>
                        Typ Pluginu
                    </th>
                    <th>
                        Rodzaje
                    </th>
                </tr>
                <tr>
                    <td>
                        Generujące
                    </td>
                    <td>
                        Syntezatory AM/AF, Syntezatory Granulowe, Samplety, Oscylatory, Syntezatory tablicowe
                    </td>
                </tr>
                <tr>
                    <td>
                        Efektowe
                    </td>
                    <td>
                        Nasycające, Limirujące, Kompresory, Korektory, Filtrowanie Pogłos i echo
                    </td>
                </tr>
            </table>
            <h2 id="GOTO_GEN">Pluginy generujące</h2>
            <p>Pluginy generujące dzielimy na samplery, syntezatry czy też drumpady. Z kolei syntezatory dzielą się na syntezatory na bazie oscylatorów, sampli, syntezatory granularne albo takie oparte na różnych syntezach typu FM albo AM. Pluginy generujące są tym co zapewni 100% dźwięków, jeżeli nie zamierza się wykorzystać realnych dźwięków, czy też instrumentów. Kontroler midi podłączony do komputera korzysta właśnie z pluginów generujących. Pluginy generujące źródłem dźwięków w muzyce elektronicznej i sercem danego utworu. Wielu alrtystów i muzyków zajmuje sie głównie dostosowywaniem parametrów pluginów, tak aby wydobyć z nich jak najlepsze brzmienie. A nie jest to zajęcie proste, gdyż czasami złożoność takich VST może być naprawde duża. Mimo że wymieniłem typy pluginów generujących w rzeczywistości większość pluginów wykorzystuje hybrydowe metody wytwarzania dźwięku. Przykładem może być tutaj Serum od Xfer, który prócz syntezy AM i FM oraz oscylatorów korzysta z takzwanych "wavetable" a także może odtwarzać sample. Przykładów takich jak Xfer Serum jest wiele, na przykład Harmor czyli natywny plugin FL Studio produkowany przez Image-Line w ramach droższych pakietów tego DAW. A take darmowa alternatywa do Serum, czyli Vital. Poniżej opisze kilka przykładowych pluginów z których sam korzystam:</p>
            <table>
                <tr>
                    <th colspan="3">
                        Syntezatory i inne pluginy generujące:
                    </th>
                </tr>
                <tr>
                    <th>
                        Nazwa
                    </th>
                    <th>
                        Najważniejsze działanie
                    </th>
                    <th>
                        Wydawca
                    </th>
                </tr>
                <tr>
                    <td>
                        3x OSC
                    </td>
                    <td>
                        Oscylator + synteza AM
                    </td>
                    <td>
                        Image Line
                    </td>
                </tr>
                <tr>
                    <td>
                        Serum
                    </td>
                    <td>
                        Oscylator, synteza AM/FM, synteza tablicowa, prosty sampler
                    </td>
                    <td>
                        Xfer
                    </td>
                </tr>
                <tr>
                    <td>
                        Ample Guitar
                    </td>
                    <td>
                        Sampler
                    </td>
                    <td>
                        Ample Sound
                    </td>
                </tr>
                <tr>
                    <td>
                        BBC Symphony Orchestra
                    </td>
                    <td>
                        Sampler
                    </td>
                    <td>
                        Spitfire Audio
                    </td>
                </tr>
                <tr>
                    <td>
                        KICK 2
                    </td>
                    <td>
                        Oscylator, Sampler
                    </td>
                    <td>
                        Sonic Academy
                    </td>
                </tr>
            </table>
            <h2 id="GOTO_EF">Efekty</h2>
            <p>Pluginy efektowe w odróżnieniu od generujących, rzadko kiedy wytwarzają dźwięki same z siebie, natomiast służą do modyfikowania dźwięków nagranych lub wytworzonych przez pluginy generujące, np syntezatory. Przykładowymi efektami mogą być nasycenie, tzw. "saturation" albo zniekształcenie, czyli nasycenie fali tak aby epiej wykorzystywała swoją przestrzeń akustyczną (dźwięk wydaje się głośniejszy).Inny często wykorzystywany efekt, nakładany zwłaszcza na realne dźwięki, to kompresor. Kompresor zmniejsza amplitudy pomiędzy głośnymi i cichymi fragmentami ścieżkim, zmniejszając jej dynamikę ale za to zwiększając głośność i pełnie dźwięku. Inne efekty to pogłos albo echo, które służą do sprawienia aby sztucznie wygenerowane dźwięki wydawały się realne i "większe".</p>
            <table>
                <tr>
                    <th colspan="3">
                        Efekty:
                    </th>
                </tr>
                <tr>
                    <th>
                        Nazwa
                    </th>
                    <th>
                        Najważniejsze działanie
                    </th>
                    <th>
                        Wydawca
                    </th>
                </tr>
                <tr>
                    <td>
                        Fruity Parametric EQ 2
                    </td>
                    <td>
                        Korektor
                    </td>
                    <td>
                        Image Line
                    </td>
                </tr>
                <tr>
                    <td>
                        Fruity Delay 3
                    </td>
                    <td>
                        Pogłos
                    </td>
                    <td>
                        Image Line
                    </td>
                </tr>
                <tr>
                    <td>
                        Fruity Reeverb 2
                    </td>
                    <td>
                        Echo
                    </td>
                    <td>
                        Image Line
                    </td>
                </tr>
                <tr>
                    <td>
                        Guitar Rig 6
                    </td>
                    <td>
                        Nasycanie, Kompresja, Korekcja, Filtrowanie, Pogłos
                    </td>
                    <td>
                        Native Instruments
                    </td>
                </tr>
                <tr>
                    <td>
                        iZotope Vinyl
                    </td>
                    <td>
                        Filtrowanie (Efekt postarzenia)
                    </td>
                    <td>
                        iZotope
                    </td>
                </tr>
            </table>
            <h2>Wygląd wymienionych pluginów:</h2>
            <div id="fullImgBox" class="backgr">
                <img id="fullImg" src="static/graphics/fimg(1).png" alt="placeholder" />
                <svg onclick="closeImg()" id="svg_f">
                    <line class="svg_line" x1="10" y1="10" x2="60" y2="60" />
                    <line class="svg_line" x1="10" y1="60" x2="60" y2="10" />
                </svg>
            </div>

            <noscript>
                <div class="gallery">
                    <div class="gallery_div">
                        <a href="static/graphics/fimg(1).png" target="_blank">
                            <img src="static/graphics/gimg(1).png" alt="zdjęcie pluginu" />
                        </a>
                        1. 3x OSC
                    </div>
                    <div class="gallery_div">
                        <a href="static/graphics/fimg(2).png" target="_blank">
                            <img src="static/graphics/gimg(2).png" alt="zdjęcie pluginu" />
                        </a>
                        2. Xfer Serum
                    </div>
                    <div class="gallery_div">
                        <a href="static/graphics/fimg(3).png" target="_blank">
                            <img src="static/graphics/gimg(3).png" alt="zdjęcie pluginu" />
                        </a>
                        3. Ample Guitar
                    </div>
                    <div class="gallery_div">
                        <a href="static/graphics/fimg(4).png" target="_blank">
                            <img src="static/graphics/gimg(4).png" alt="zdjęcie pluginu" />
                        </a>
                        4. BBC Symphony Orchestra
                    </div>
                    <div class="gallery_div">
                        <a href="static/graphics/fimg(5).png" target="_blank">
                            <img src="static/graphics/gimg(5).png" alt="zdjęcie pluginu" />
                        </a>
                        5. Sonic Academy KICK 2
                    </div>
                    <div class="gallery_div">
                        <a href="static/graphics/fimg(6).png" target="_blank">
                            <img src="static/graphics/gimg(6).png" alt="zdjęcie pluginu" title="Fruity Parametric EQ" />
                        </a>
                        6. Fruity Parametric EQ 2
                    </div>
                    <div class="gallery_div">
                        <a href="static/graphics/fimg(7).png" target="_blank">
                            <img src="static/graphics/gimg(7).png" alt="zdjęcie pluginu" />
                        </a>
                        7. Fruity Delay 3
                    </div>
                    <div class="gallery_div">
                        <a href="static/graphics/fimg(8).png" target="_blank">
                            <img src="static/graphics/gimg(8).png" alt="placeholder" />
                        </a>
                        8. Fruity Reeverb 2
                    </div>
                    <div class="gallery_div">
                        <a href="static/graphics/fimg(9).png" target="_blank">
                            <img src="static/graphics/gimg(9).png" alt="placeholder" />
                        </a>
                        9. Guitar Rig 6
                    </div>
                    <div class="gallery_div">
                        <a href="static/graphics/fimg(10).png" target="_blank">
                            <img src="static/graphics/gimg(10).png" alt="placeholder" />
                        </a>
                        10. iZotope Vinyl
                    </div>
                </div>
            </noscript>

            <div id="with_script"></div>
        </article>
    </main>
    <aside>
        <?php include "viewTemplates/asideTemplate.php" ?>
    </aside>
    <footer>
        <?php include "viewTemplates/footerTemplate.php" ?>
    </footer>

    <script src="static/jquery.js"></script>

    <script>
        var insertscript = document.getElementById('with_script');
        var nazwy_pluginow = new Array(10);
        nazwy_pluginow[0] = "3x OSC";
        nazwy_pluginow[1] = "Xfer Serum";
        nazwy_pluginow[2] = "Ample Guitar";
        nazwy_pluginow[3] = "BBC Symphony Orchestra";
        nazwy_pluginow[4] = "Sonic Academy KICK 2";
        nazwy_pluginow[5] = "Fruity Parametric EQ 2";
        nazwy_pluginow[6] = "Fruity Delay 3";
        nazwy_pluginow[7] = "Fruity Reeverb 2";
        nazwy_pluginow[8] = "Guitar Rig 6";
        nazwy_pluginow[9] = "iZotope Vinyl";

        var toput = '<div class="gallery">';
        for (let i = 1; i <= 10; i++) {
            toput = toput + '<div class="gallery_div"> <img src="static/graphics/gimg(' + i + ').png" alt="zdjęcie pluginu" onclick="openImg(\'fimg(' + i + ').png\')" /> ' + i + '. ' + nazwy_pluginow[i - 1] + '</div>';
        }
        toput = toput + '</div>';
        insertscript.innerHTML = toput;


        var fullImgBox = document.getElementById("fullImgBox");
        var source;
        var desc_text;

        function openImg(source) {
            fullImgBox.style.cssText ='display: flex;';
            document.getElementById("fullImg").src = 'static/graphics/' + source;
        }

        function closeImg() {
            fullImgBox.style.cssText = 'display: none;';
        }

    </script>

    <script src="static/darkmode.js"></script>

</body>

</html>