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
            <h2>UDAŁO SIE ZAREJESTROWAĆ!</h2>
            Witamy na naszym serwisie 
            <?php 
            if(isset($_SESSION['registeredName']))
            {
                echo $_SESSION['registeredName']; 
                unset($_SESSION['registeredName']);
            }
            else
                echo $_SESSION['użytkowniku'];

            ?>.
            </br></br>
            <a href="login">Powrót do logowania</a>
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