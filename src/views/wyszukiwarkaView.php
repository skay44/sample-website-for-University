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
            <div style="text-align:right; float:left;"><a href='galeria'>Powrót do galerii</a> | <a href='zapamietane'>Zapamiętane</a></div>
            <div style="text-align:right; float:right;"><?php if(isset($Mname)) {echo "Użytkownik: ".$Mname;} else echo "(gość)"?></div>
            <h2>WYSZUKIWARKA</h2>
            <div class="search_form">
                <label for="labSearch">Nazwa obrazu:</label></br>
                <input id="search_data" type="text" name="search" id="labSearch" ></br>
            </div></br>
            <div id="result"></div>
            <div style="clear:both;"></div>
        </article>
    </main>
    <aside>
        <?php include "viewTemplates/asideTemplate.php" ?>
    </aside>
    <footer>
        <?php include "viewTemplates/footerTemplate.php" ?>
    </footer>
    <script src="static/darkmode.js"></script>
    <script src="static/search.js"></script>-->
</body>

</html>