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
        <article class="logowanie">
            <h2>LOGOWANIE </h2>
            <form method="post" action="loginTry">
                <label for="logowanieNick">Nazwa: </label></br>
                <input type="text" name="nick" title="nazwa użytkownika" id="logowanieNick"></br>
                <?php  
                    if(isset($_SESSION['logNameErr']))
                    {
                        echo '<span class="error_message">'.$_SESSION['logNameErr'].'</span></br>';
                        unset($_SESSION['logNameErr']);
                    } 
                ?>
                <label for="logowaniePass">Hasło: </label></br>
                <input type="password" name="pass" title="hasło" id="logowaniePass"></br>
                <?php  
                    if(isset($_SESSION['logPassErr']))
                    {
                        echo '<span class="error_message">'.$_SESSION['logPassErr'].'</span></br>';
                        unset($_SESSION['logPassErr']);
                    } 
                ?>
                </br>
                <input type="reset" value="resetuj" class="button_red">
                <input type="submit" value="zaloguj" class="button_green">

            </form>
            </br>
            Nie masz konta? - <a href="rejestracja">Zarejestruj sie</a>
            |
            <a href="galeria">Wejdź jako gość </a>
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