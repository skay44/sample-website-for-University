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
        <article class="przesylanie">
            <h2>Wysyłanie zdjęcia</h2>
            <?php
                if(isset($_SESSION['upload']))
                {
                    echo 
                        '<p class="good_message" >Udało się pomyślnie wysłać zdjęcie: "'.$_SESSION['upload'].'"</p>';
                    ;
                    unset($_SESSION['upload']);
                }
            ?>
            <p>Rozmiar zdjęcia nie może przekraczać 1 MB. Dzowolone formaty to PNG lub JPG.</p>
            <form action="uploadTry" method="post" enctype="multipart/form-data">
                <h3>Informacje o zdjęciu</h3>
                <label for="labPhotoAuthor">Autor zdjęcia:</label></br>
                <input type="text" name="photoAuthor" id="labPhotoAuthor" <?php if(isset($Mname)) {echo "value=".$Mname;} ?>></br>
                <label for="labPhotoTitle">Nazwa zdjęcia:</label></br>
                <input type="text" name="photoTitle" id="labPhotoTitle"></br>
                <?php 
                if(isset($_SESSION['upTitleErr'])) 
                {
                    echo '<span class="error_message">'.$_SESSION['upTitleErr'].'</span></br>';
                    unset($_SESSION['upTitleErr']);
                } 
                ?>
                <label for="labZnakWodny">Znak wodny:</label></br>
                <input type="text" name="znakWodny" id="labZnakWodny"></br>
                <?php 
                if(isset($_SESSION['upWaterErr'])) 
                {
                    echo '<span class="error_message">'.$_SESSION['upWaterErr'].'</span></br>';
                    unset($_SESSION['upWaterErr']);
                } 
                ?>
                </br>
                <label for="labPhoto">Plik:</label></br>
                <div style="border: solid black 2px; background-color: #555555; padding:10px;">
                <input type="file" name="photo" accept=".png,.jpg" id="labPhoto"></br>
                </div>
                </br>
                Dostępność zdjęcia:</br>
                <?php
                    if(isset($_SESSION['logged']))
                    {
                        echo '
                            <div style="text-align:left margin-left:95px;">
                            <input type="radio" name="photoPrivate" id="labPhotoPrivate" value="prywatne" checked>
                            <label for="labPhotoPrivate">Prywatne</label></br>
                            <input type="radio" name="photoPrivate" id="labPhotoPublic" value="publiczne">
                            <label for="labPhotoPublic">Publiczne</label></br>
                            </div>
                        ';
                    }
                ?>
                <?php 
                if(isset($_SESSION['upTypeErr'])) 
                {
                    echo '<span class="error_message">'.$_SESSION['upTypeErr'].'</span></br>';
                    unset($_SESSION['upTypeErr']);
                } 
                if(isset($_SESSION['upSizeErr'])) 
                {
                    echo '<span class="error_message">'.$_SESSION['upSizeErr'].'</span></br>';
                    unset($_SESSION['upSizeErr']);
                } 
                ?>
                </br>
                <input type="reset" value="resetuj" class="button_red">
                <input type="submit" value="wyślij" class="button_green">
            </form>
            </br>
            <a href="galeria">Powrót do Galerii</a>
            |
            <?php 
                if(isset($_SESSION['logged']))
                {
                    echo "<a href='logOut'>wyloguj się</a>";
                }
                else
                {
                    echo "<a href='login'>zaloguj się</a>";
                }
            ?>
        </article>
    </main>
    <aside>
        <?php include "viewTemplates/asideTemplate.php" ?>
    </aside>
    <footer>
        <?php include "viewTemplates/footerTemplate.php" ?>
    </footer>
    <script src="static/darkmode.js"></script>
</body>

</html>