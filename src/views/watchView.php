<?php $image = MDB_getUsingId('images',$_SESSION['watch']) ?>


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
            <div style="text-align:right; float:right;"><?php if(isset($Mname)) {echo "Użytkownik: ".$Mname;} else echo "(niezalogowany)"?></div>
            <h2><?php echo $image['nazwa'] ?></h2>
            <div class="big_img_border">
                <div class="big_img_opis">
                <h3>Informacje o zdjęciu:</h3>
                <p>
                    Nazwa zdjęcia: <em>"<?php echo $image['nazwa'] ?>"</em></br>
                    Autor zdjęcia: <?php echo $image['autor'] ?></br>
                    Dostępność: <?php echo $image['dostep'] ?></br>
                    <?php
                        if($image['rAutor'] === 'xx')
                            echo '(Zdjęcie zostało dodane przez gościa)';
                        else
                            echo 'Dodał użytkownik: '.$image['rAutor'];
                    ?>
                </p>
                </div style="width:100% float:left;">
                <a href= <?php echo '"images/'.$image['_id'].'.'.$image['ext'].'"' ?>><img class="big_img" src=<?php echo '"images/'.$image['_id'].'.'.$image['ext'].'"' ?>></img></a>
                </div>
                <a href="galeria">Powrót do galerii</a>
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