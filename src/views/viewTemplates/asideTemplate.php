<?php 
    if(!isset($activesite))
    {
        $activesite = 'else';
    }
 ?>

<div id="asidecontent">
            <h3>Menu:</h3>
            <ul class="asideeffects">
                <li>
                    Nawigacja:
                    <ul>
                        <li>
                            <a href="main">
                            <?php
                                if($activesite == 'main')
                                    echo '<span class="checked">Strona główna</span>';
                                else
                                    echo 'Strona główna';
                            ?>

                            </a>
                        </li>
                        <li>
                            <a href="jakzaczac">
                            <?php
                                if($activesite == 'jakzaczac')
                                    echo '<span class="checked">Jak zacząć</span>';
                                else
                                    echo 'Jak zacząć';
                            ?> 
                            </a>
                        </li>
                        <li>
                            <a href="extra">
                            <?php
                                if($activesite == 'extra')
                                    echo '<span class="checked">Extra</span>';
                                else
                                    echo 'Extra';
                            ?> 
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php
                        if($activesite == 'daw')
                            echo '<span class="checked">DAW:</span>';
                        else
                            echo 'DAW:';
                    ?> 
                    <ul>
                        <li>
                            <a href="daw">Ogólnie o DAW</a>
                        </li>
                        <li>
                            <a href="daw">FL Studio</a>  <!--#GOTO_FL-->
                        </li>
                        <li>
                            <a href="daw">Ableton</a>  <!--#GOTO_ABLETON-->
                        </li>

                    </ul>
                </li>
                <li>
                    <?php
                        if($activesite == 'pluginy')
                            echo '<span class="checked">Pluginy:</span>';
                        else
                            echo 'Pluginy:';
                    ?> 
                    <ul>
                        <li>
                            <a href="pluginy">Ogólnie o Pluginach</a>
                        </li>
                        <li>
                            <a href="pluginy">Generujące</a> <!--#GOTO_GEN-->
                        </li>
                        <li>
                            <a href="pluginy">Efekty</a> <!--#GOTO_EF-->
                        </li>
                    </ul>
                </li>
            </ul>
            <h3>Zobacz też:</h3>
            <ul class="asideeffects">
                <li>
                    Więcej o DAW:
                    <ul>
                        <li><a href="https://flstudio.pl/?gclid=CjwKCAjwzY2bBhB6EiwAPpUpZlGv7m9iS_e_b2D13rjcjmYRp8kk9H8L5sXxMpjvgMKZZmjc8S-BthoCzo8QAvD_BwE" target="_blank">Fl Studio</a></li>
                    </ul>
                    <ul>
                        <li><a href="https://www.soundtrap.com/?gclid=CjwKCAjwzY2bBhB6EiwAPpUpZnB-JhAM2yU1svnDWsyB0-0I_gBnIBZpCEn1dHIRMWpN6AcN46EsthoCu_sQAvD_BwE" target="_blank">Garage Band</a></li>
                    </ul>
                    <ul>
                        <li><a href="https://www.apple.com/logic-pro/" target="_blank">Logic Pro</a></li>
                    </ul>
                    <ul>
                        <li><a href="https://www.steinberg.net/cubase/" target="_blank">Cubase</a></li>
                    </ul>
                    <ul>
                        <li><a href="https://www.ableton.com/" target="_blank">Ableton</a></li>
                    </ul>
                </li>
                <li>
                    Teoria muzyki:
                    <ul>
                        <li>
                            <a href="https://pl.wikibooks.org/wiki/Podstawy_teorii_muzyki" target="_blank">Polski podręcznik na Wikibooks</a>
                        </li>
                        <li>
                            <a href="https://wwnorton.com/books/9780393442403" target="_blank">Książka <em>"The Musician’s Guide to Theory and Analysis"</em> autorstwa Elizabeth West Marvin i Jane Piper Clendinning</a>
                        </li>
                        <li>
                            <a href="https://www.alfred.com/alfreds-essentials-of-music-theory-complete/p/00-17234/" target="_blank">Książka <em>"Alfred's Essentials of Music Theory: Complete"</em> autorstwa  Andrew Surmani, Karen Farnum Surmani, Morton Manus</a>
                        </li>
                        <li>
                            <a href="https://youtu.be/rgaTLrZGlk0" target="_blank">Krótki wprowadzający filmik na YouTube, tłumaczący podstawy</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>