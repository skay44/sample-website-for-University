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
            <h2>REJESTRACJA</h2>
            <form method="post" action="rejestracjaTry">
                <label for="regNick">Nazwa: </label></br>
                <input type="text" name="regNick" title="nazwa użytkownika" id="regNick"
                <?php  
                    if(isset($_SESSION['preNick']))
                    {
                        echo 'value="'.$_SESSION['preNick'].'"';
                        unset($_SESSION['preNick']);
                    } 
                ?>>
                </br>
                <?php  
                    if(isset($_SESSION['regNameErr']))
                    {
                        echo '<span class="error_message">'.$_SESSION['regNameErr'].'</span></br>';
                        unset($_SESSION['regNameErr']);
                    } 
                ?>
                <label for="regMail">E-mail: </label></br>
                <input type="text" name="regMail" title="hasło" id="regMail" 
                <?php  
                    if(isset($_SESSION['preMail']))
                    {
                        echo 'value="'.$_SESSION['preMail'].'"';
                        unset($_SESSION['preMail']);
                    } 
                ?>>
                </br>
                <?php  
                    if(isset($_SESSION['regMailErr']))
                    {
                        echo '<span class="error_message">'.$_SESSION['regMailErr'].'</span></br>';
                        unset($_SESSION['regMailErr']);
                    } 
                ?>
                <label for="regPass1">Hasło: </label></br>
                <input type="password" name="regPass1" title="hasło" id="regPass1"></br>
                <?php  
                    if(isset($_SESSION['regPass1Err']))
                    {
                        echo '<span class="error_message">'.$_SESSION['regPass1Err'].'</span></br>';
                        unset($_SESSION['regPass1Err']);
                    } 
                ?>
                <label for="regPass2">Powtórz Hasło: </label></br>
                <input type="password" name="regPass2" title="hasło" id="regPass2"></br>
                <?php  
                    if(isset($_SESSION['regPass2Err']))
                    {
                        echo '<span class="error_message">'.$_SESSION['regPass2Err'].'</span></br>';
                        unset($_SESSION['regPass2Err']);
                    } 
                ?>
                </br>
                <input type="reset" value="resetuj" class="button_red">
                <input type="submit" value="rejestracja" class="button_green">

            </form>
            </br>
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