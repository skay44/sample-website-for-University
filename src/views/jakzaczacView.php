<!DOCTYPE HTML>
<html lang="pl">

<head>
    <?php require_once "viewTemplates/headerTemplate.php" ?>


    <script src="static/jquery.js"></script>

    <script src="static/jqueryUI/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="static/jqueryUI/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="static/jqueryUI/jquery-ui.structure.min.css" type="text/css" />
    <link rel="stylesheet" href="static/jqueryUI/jquery-ui.theme.min.css" type="text/css" />


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
            <h2>Jak zacząć produkcje muzyki?</h2>
            <p>Z początku przytłaczającym może okazać się wymaga ilość sprzętu muzycznego jaki warto nabyć: DAW, kontroler midi, pluginy i monitory studyjne (czyli takie głośniki, które mają przekazywać jak najdokładniej i dźwięk, bez żadnych przekłamań). Te rozróżniamy na pasywne i aktywne. Pasywne będą potrzebowały w odróżnieniu od aktywnych dodatkowego wzmacniacza. W rzeczywistości nie wysztko jest potrzebne od razu. Nie ma potrzeby kupowania drogich monitorów studyjnych dopuki nie będzie się w stanie dokładnie analizować dźwięk, tak samo nie ma powodu by kupować drogie pluginy podczas gdy nie ma się jeszcze wiedzy o podstawach syntezy dźwięku. Oczywiście można od razu zainwestować w taki sprzęt, natomiast wtedy należałoby być pewnym tego, że będzie się z niego korzystać. Dla tego lepszą opcją, według mnie, będzie skorzystanie z demonstracyjnej wersji jakiegoś DAW, albo pobranie darmowego i korzystanie tylko z podstawowych pluginów. Zwykłe słuchawki nauszne za około. 300 zł też powinny wystarczyć. Jest to dobry zestaw startowy, na którym można rozpocząć naukę.</p>
            <p>Bardzo dobrym sposobem na naukę jest odtwarzanie w DAW utworów które się lubi, tak aby brzmiały jak najbardziej wiernie do oryginału. Dzięki temu za jednym razem można nauczyć się syntezy dźwięku, efektów, aranżacji utworu a także słuchu muzycznego, bo będziemy starać się odtworzyć te same akordy i melodie zagrane w interesującym nas utworze. Oczywiście, na początku będzie to bardzo trudne, wręcz niemożliwe. Wtedy można sięgnąć po przygotowane nuty danego utworu. Oprócz tego najlepszym sposobem na naukę, będzie zabawa: tworzenie muzyki jaką się lubi, eksperymentowanie i analizowanie co działa a co nie. W taki sposób, jeżeli poświęci się jeszcze czas na nauke gry na pianinie/klawiszach aby obsłużyć kontroler midi i pozna podstawy teorii muzyki, szybko okaże się posiada się duży zakres umiejętności i można swobodnie tworzyć to czego tylko będzie się chciało.</p>
            <h2>Style muzyczne</h2>
            <p>Poniżej przedstawione są gatunki muzyczne, które dzięki swoim cechą są łatwe bądź możliwe do produkcji za pomocą tylko DAW, bez dodatkowych instrumentów nagrywanych na żywo, a co za tym idzie łatwo dostępne dla początkującego producenta.</p>
            <div id="gatunki_tabs">
                <ul>
                    <li><a href="#Mstyle1">House</a></li>
                    <li><a href="#Mstyle2">Hip-hop/rap</a></li>
                    <li><a href="#Mstyle3">DnB/DB/Glitch Hop</a></li>
                    <li><a href="#Mstyle4">Trap</a></li>
                    <li><a href="#Mstyle5">Pop</a></li>
                    <li><a href="#Mstyle6">Elektro/Techno</a></li>
                </ul>
                <div id="Mstyle1">
                    <h3>House</h3>
                    <p>Jeden z najpopularniejszych gatunków muzyki, rywalizujący swoją poularnością z rockem, hip-hopem a takż szeroko pojętym popem. Charakteryzuje się rytmem "4 on the floor" w którym każdy beat jest akcentowany bębnem basowym/bębnem wielkim. Dodatkowo w co drugi beat wpleciony jest werbel, a pmiędzy uderzeniami bębna wybrzmiewają otwarte talerze. Nadaje to utworowi dynamiki i taneczności. Mimo to przez przez powtarzalność perkusji można nałożyć na nią spokojniejsze instrumenty i osiągnąć bardziej spokojne doznanie np. w deep house czy też fragmentach progresywnego houseu. W takiej sytuacji często używa się także elementów muzyki "soul". Jest też druga strona Housea ze swoimi bardziej dynamicznymi odmianami takimi jak Electro House, French House, Bounce House. Istnieje także big room house którego celem jest po prostu brzmieć jak najgłośniej i wydawać się jak największy. Nie jest to najlepszy wybór do tańczenia ale może okazać się dobrym wyborem np. na duże festiwale. Natomiast większość pozostałych odmian houseu jest wręcz idealna na parkiet.</p>
                </div>
                <div id="Mstyle2">
                    <h3>Hip-hop/rap</h3>
                    <p>Muzyka hip-hopowa wydaje się wciąż bardzo przyszłościowym wyborem mimo swojego już stosunkowo długiego czasu popularności. Zainteresowanie hip-hopem nie wydaje się spatać, zwłaszcza wśród młodzieży i młodszych dorosłych, dla których jest to najbardziej znana forma muzyczna. Charakteryzuje się naciskiem na klimat i przesłanie. Nie znajdziemy tutaj niezwykłego sound designu ani progresji akordów, za to dużo częściej spotkamy się z zapętlonymi fragmentami innych utworów z nałożonmi efektami, który nadaje charakter utworowi. Natomiast do przodu pchany jest dzięki dynamicznej perkusji, obfitującej w zamknięte talerze a także charakterystycznego basu 808. Hip-hop wymaga tekstu żeby być uznanym za godny uwagi, przez większość ludzi. Oczywiście z wyjątkami takimi jak lo-fi. Dla żeby zająć się tym gatunkiem muzyki będziemy musieli albo sprzedawać swoje bity inym raperom, albo znaleźć znajomego który potrafi wymyśleć dobry tekst, albo samemu umieć rapować. Większość producentów wybiera te pierwszą opcje skupiając się całkowicie na muzyce. Można powiedzieć że to najbardziej popularna ścieżka wśród początkujących muzyków.</p>
                </div>
                <div id="Mstyle3">
                    <h3>DnB/DB/Glitch Hop</h3>
                    <p>DnB - skrót od drum and bass, DB - skrót od dubstep. Aby dobrze zrozumieć czym jest Glitch - Hop czy Drum and Bass najpierw zajmijmy się Dubstepem. Co prawda Drum and Bass pierwotnie nie pochodzi od dubstepu, współczesny DnB posiada wiele jego cech. A więc od początku. Dubstep to gatunek muzyki pochodzący z Wielkiej Brytanii początkowo zupełnie inaczej brzmiący niż obecnie ale mający te same załżenie - duży nacisk na linie basową, która zarazem może być częścią rytmiczną a także melodyjną utworu. Dawniejsza forma dubstepu cechowała się bardzo dużą ilością basu proporcjonalnie do innych częstotliwości, a także ponurym klimatem i melanholią. Z czasem Dubstep zaczął się przeobrażać, w głośniejszy z większą ilością wyższych częstotliwości. Była to naturalna progresja ze względu że utwory głośniejsze, na pierwszy rzut oka ciekawsze budziły większe zainteresowanie. Zaczęła się era współczesnego dubstepu gdzie bass nadal stanowi główną część utworu, ale jest z dużo większą ilością harmonicznych, wypełniając spektrum dźwięków średnimi i wysokimi tonami. Dodatkowo większy nacisk spadł na perkusje. Taka forma dubstepu, to ta którą znamy dziś. Dodatkowo niektórzy producenci współczesnego DB zaczęli tworzyć utwory z dużym naciskiem na melodie prowadzące, odsówając bass w tło. Ten gatunek nazywamy melodycznym dubstepem. Jak widać nie ma prawie nic wspólnego z pierwowzroem poza mocną perkusją i mimo wszystko nadal bardzo skompikowanym, modulowanym basem. DnB wywodzi się z zupełni innych korzeni. Chodzi w nim o dużą prędkość utworu i charakterystyczny synkopowany rytm. Z czasem przyjął wiele elementów zwykłego współczesne i melodycznego dubstepu. Jest także glitch hop czyli coś w rodzaju melodycznego dubstepu ale z naciskiem na rwący się rytm, a także z mniejszym skomplikowaniem basu względem syntezatorów akordów i leadu. Zazwyczaj jest także wolniejszy niż dubstep. Mimo że z opisanej historii można wywnioskować że te style muzyczne są bardzo różne, to w praktyce wymagają podobnych zdolności od twórcy. Zaawansowana wiedza o sound designie, umiejętność zrobienia mocnej i rytmicznej perkusji i duża swoboda w dodawaniu efektów dźwiękowych.</p>
                </div>
                <div id="Mstyle4">
                    <h3>Trap</h3>
                    <p>W swojej naturze podobny do hip-hopu, także może występować rapowany wokal. Ale w tym przypadku nie jest to obowiązek, gdzyż trap wykorzystując klasyczne techniki hip-hopu jak charakterystyczna perkusja, duża ilość zamkniętych talerzy a także bas 808 dodaje dodatkowo nacisk na melodie i akordy. Rzadziej wykorzystuje się gotowe sample a 808 jest często bardziej sprzesterowane. Jest to dobra opcja dla producentów muzycznych lubiących tworzyć hip-hop ale nie posiadających zdolności rapowania, mimo tego chcących tworzyć własne kompletne utwory.</p>
                </div>
                <div id="Mstyle5">
                    <h3>Pop</h3>
                    <p>Pop, czyli najtrudniejszy do zdefiniowania z wymienionych gatunków muzyki. Nie ma jednego sposobu w jaki pop może brzmieć. Zazwyczaj pop to ten gatunek muzyki który zmienia się z czasem, dostosowuje do trendów tak aby miał jak największą pule odbiorców. Można jednak wyróżnić kilka często przwijajćych się stylów w muzyce pop. Najbardziej rzucającym się w oczy będzie prostota sound-designu, minimalizm w użytych akordach efektach i dźwiękach. Ta prostota występuje po to aby dać miejsce dla mocnego dominującego wokalu. To że coś jest proste i minimalistyczne nie oznacza oczywiście że jest łatwe do stworzenia. Powiem więcej uważam że wymaga sporo doświadczenia i samodyscypliny, aby nie dodawać kolejnych efektów które nam się podobają. Ostatnio dominuje odłam popu zwany k-popem który łączy w sobie cechy klasycznego popu z muzyką w stylu melodic future bass z powiększonymi akordami. Future bass to muzyka która skupia się w refrenach głównie na akordach, do których dodatkiem jest wokal czy melodia, natomiast zwrotki mogą być bardzo dowolne. Future bass i K-pop są bardzo odrębnymi tworami względem popu ale wymgają podobnych umiejętności i dyscypliny producenta.</p>
                </div>
                <div id="Mstyle6">
                    <h3>Electro/Techno</h3>
                    <p>Techno było stylem dobrze znanym na na końcu ubiegłego wieku, mimo że teraz jego popularność znacznie zmalała, nadal ma swoją niszę odbiorców. Z kolei electro zawsze było dość niszowym gatunkiem, jednak bardzo ciekawym i charakterystycznym. Podobnie do DB. DnB i Glitch hopu kładzie duży nacisk na sound design ale charakterystyka i styl tego sound designu jest inna. Zarówno elektro jak i techno są dobrymi wyborami na start gdyż prawie nie wymagają dodatkowych pluginów, a charakterystyczne dla tych styli zimne ostre brzmienie można łatwo uzyskać podstawowymi syntezatorami.</p>
                </div>
            </div>
        </article>
        <section>
            <h2>Sprawdź ile potrafisz?</h2>
            <p>Nie wiesz od czego zacząć? Możesz rozwiązać ten test, który pomoże Ci określić Twoją wiedze muzyczną!</p>
            <form action="action.php" method="get">
                <h3>Dane użytkownika:</h3>
                <p>
                    <label for="nick">1.Nazwa użytkownika</label>
                    <input id="nick" title="Nazwa użytkownika" name="Nazwa_uzytkownika" type="text">
                </p>
                <p>
                    2.Czy miałaś/eś wcześniej zajęcia w szkole muzycznej/prywatną naukę gry na instrymencie?
                    <br />
                    <label for="r_tak">Tak</label>
                    <input id="r_tak" title="tak" name="czy_wczesniej" value="tak" type="radio" checked>
                    <label for="r_nie">Nie</label>
                    <input id="r_nie" title="nie" name="czy_wczesniej" value="nie" type="radio">
                </p>
                <h3>Pytania:</h3>
                <p>
                    3. Które z tych instrumentów zaliczamy do perkusyjnych?
                    <br />
                    <input id="ch1" name="Ksylofon" type="checkbox" />
                    <label for="ch1"> Ksylofon</label>
                    <br />
                    <input id="ch2" name="Tamburyna" type="checkbox" />
                    <label for="ch2"> Tamburyna</label>
                    <br />
                    <input id="ch3" name="Koto" type="checkbox" />
                    <label for="ch3"> Koto</label>
                    <br />
                    <input id="ch4" name="Steel pan" type="checkbox" />
                    <label for="ch4"> Steel pan</label>
                </p>
                <p>
                    4.Ile nut jest w jednej oktawie w skali durowej?
                    <br />
                    <select name="nuty" title="nuty">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </p>
                <p>
                    5. Jak współbrzmienie co najmniej 3 dźwięków?
                    <br />
                    <input id="5_1" name="3 dzwieki" value="5_1" type="radio">
                    <label for="5_1">Akord</label>
                    <br />
                    <input id="5_2" name="3 dzwieki" value="5_2" type="radio">
                    <label for="5_2">Trójton</label>
                    <br />
                    <input id="5_3" name="3 dzwieki" value="5_3" type="radio">
                    <label for="5_3">Interwał</label>
                    <br />
                    <input id="5_4" name="3 dzwieki" value="5_4" type="radio">
                    <label for="5_4">Nie ma takiej nazwy</label>
                </p>
                <p>
                    6. Czym różnią się pluginy dodające pogłos od tych dodających echo?
                    <br />
                    <input id="6_1" name="poglos/echo" value="6_1" type="radio">
                    <label for="6_1">Niczym, to synonimy.</label>
                    <br />
                    <input id="6_2" name="poglos/echo" value="6_2" type="radio">
                    <label for="6_2">Pogłos to wielokrotnie szybszy efekt echa</label>
                    <br />
                    <input id="6_3" name="poglos/echo" value="6_3" type="radio">
                    <label for="6_3">Echo to wielokrotnie szybszy efekt pogłosu</label>
                    <br />
                    <input id="6_4" name="poglos/echo" value="6_4" type="radio">
                    <label for="6_4">Echo powtarza dźwięk kilka razy, za każdym razem ciszej, a pogłos przesówa dźwięk w fazie</label>
                </p>
                <p>
                    7. Co to DAW?
                    <br />
                    <input id="7_1" name="co_to_daw" value="7_1" type="radio">
                    <label for="7_1">Cyfrowy mikser ścieżek</label>
                    <br />
                    <input id="7_2" name="co_to_daw" value="7_2" type="radio">
                    <label for="7_2">"Digital audio interferometer"</label>
                    <br />
                    <input id="7_3" name="co_to_daw" value="7_3" type="radio">
                    <label for="7_3">Cyfrowa stacja robocza</label>
                    <br />
                    <input id="7_4" name="co_to_daw" value="7_4" type="radio">
                    <label for="7_4">Sklep z pluginami do produkcji muzyki</label>
                </p>
                <h3>Pytanie dodatkowe:</h3>
                <p>
                    <label for="8_opinia">8. jaka jest Twoja opinia na temat testu?</label>
                    <br />
                    <textarea id="8_opinia" rows="6" name="opinia">Prześlij swoją opinie o teście</textarea>
                </p>
                <p>
                    <input type="submit" />
                    <input type="reset" />
                </p>
            </form>
        </section>
    </main>
    <aside>
        <?php include "viewTemplates/asideTemplate.php" ?>
    </aside>
    <footer>
        <?php include "viewTemplates/footerTemplate.php" ?>
    </footer>
    <script>

        $("#gatunki_tabs").tabs({

        });

        if (localStorage.getItem('czy_ciemny') == 'tak') {
            $('#gatunki_tabs').css("background-color", "#333333");
            $('#Mstyle1 p ').css('color', 'white');
            $('#Mstyle2 p ').css('color', 'white');
            $('#Mstyle3 p ').css('color', 'white');
            $('#Mstyle4 p ').css('color', 'white');
            $('#Mstyle5 p ').css('color', 'white');
            $('#Mstyle6 p ').css('color', 'white');
        }

    </script>
    <script src="static/darkmode.js"></script>

</body>

</html>