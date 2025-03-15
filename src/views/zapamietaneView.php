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
            <div style="text-align:right; float:left;"><a href='wyszukiwarka'>Wyszukiwarka</a> | <a href='galeria'>Wszystkie</a></div>
            <div style="text-align:right; float:right;"><?php if(isset($Mname)) {echo "Użytkownik: ".$Mname;} else echo "(gość)"?></div>
            <h2>GALERIA</h2>
            <div class="move_arrows">
                <div style="text-align: left;">
                <?php 
                    if($_SESSION['page']>1) 
                    {
                        echo '<a href="poprzedniaStrona"><-poprzednia</a>'; 
                    } 
                    else echo '&nbsp;';
                ?>
                </div>
                <div style="text-align: center;">strona <?php echo $_SESSION['page'].'/'.$maxSize ?></div>
                <div style="text-align: right;">
                <?php
                    if($_SESSION['page'] < $maxSize)
                    {
                        echo '<a href="nastepnaStrona">następna-></a>';
                    }
                    else echo '&nbsp;'
                ?>
                </div>
            </div>
            </br>
            <?php 
            foreach($resultP as $P)
            {
                $len = strlen($P)-strlen('imagesmini/')-4;
                $id =  substr($P,strlen('imagesmini/'),$len);
                $data = MDB_getUsingId('images',$id);
                $name = $data['nazwa'];
                $autor = $data['autor'];
                if($data['dostep'] == 'prywatne') 
                    $color = 'style = "color: #d41608;"';
                else
                    $color = '';
                echo 
                '
                <div class="gallery_img">
                <a href="watch>>'.$id.'"><img src="'.$P.'" width="90%">
                </img></a></br><em>';
                if(strlen($name) > 20)
                {
                    echo '"'.substr($name,0,18).'"...';
                }
                else echo '<span '.$color.'>"'.$name.'"</span>';
                echo '</em></br>';
                if(strlen($autor) > 20)
                {
                    echo substr($autor,0,18)."...";
                }
                else echo $autor;
                echo '</br>';
                echo '<input type="checkbox" value="'.$id.'" id="check_'.$id.'" class="ZapamietajCheck"';
                if(isset($_SESSION[$id]))
                {
                    if($_SESSION[$id] == 'true')
                        echo 'checked';
                }

                echo '>';
                echo '<label for="check_'.$id.'">zapamiętaj</label>';
                echo '</div>';
                ;
            }

            ?>
            <div style="clear: both;"></div>
            </br>
            <a href='upload'><span style="width: 25%;" class="przyciskOpcje przyciskUtwor">dodaj zdjęcie</span></a>
            <?php 
                if(isset($_SESSION['logged']))
                {
                    echo '<a href="logOut"><span style="width: 25%;" class="przyciskOpcje przyciskUtwor" >wyloguj się</span></a>';
                }
                else
                {
                    echo '<a href="login"><span style="width: 25%;" class="przyciskOpcje przyciskUtwor" >zaloguj się</span></a>';
                }
            ?>
            <span style="float:right; width:35%;" class="przyciskOpcje przyciskUtwor" id="zapamietajWybrane">Zapamiętaj wybrane</span>
        </article>
    </main>
    <aside>
        <?php include "viewTemplates/asideTemplate.php" ?>
    </aside>
    <footer>
        <?php include "viewTemplates/footerTemplate.php" ?>
    </footer>
    <script src="static/darkmode.js"></script>
    <script src="static/saveImgs.js"></script> <!-- AJAX CHECKBOXES SCRIPT -->
</body>

</html>