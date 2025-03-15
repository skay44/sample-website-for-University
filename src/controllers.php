<?php
require_once 'buisness.php';


function main(&$model)
{
    $model['activesite'] = 'main';
    return 'mainView';
}


function jakzaczac(&$model)
{
    $model['activesite'] = 'jakzaczac';
    return 'jakzaczacView';
}


function daw(&$model)
{
    $model['activesite'] = 'daw';
    return 'dawView';
}


function pluginy(&$model)
{
    $model['activesite'] = 'pluginy';
    return 'pluginyView';
}


function extra(&$model)
{
    $model['activesite'] = 'extra';
    return 'extraView';
}


function galeria(&$model)
{
    $PHOTOS_ON_ONE_PAGE = 12;
    $path='imagesmini/'; 
    $prepngs = glob($path.'*.png');
    $prejpgs = glob($path.'*.jpg');
    if(isset($_SESSION['ID']))
        $user = MDB_getUsingId('users',$_SESSION['ID']);
    $pngs = [];
    $jpgs = [];

    foreach($prepngs as $png)
    {
        $len = strlen($png)-4-strlen('imagesmini/');
        $id = substr($png,strlen('imagesmini/'),$len);
        $data = MDB_getUsingId('images',$id);
        if($data['dostep'] === 'publiczne')
        {
            array_push($pngs,$png);
        }
        else if(isset($_SESSION['ID']))
        {
            if($data['rAutor'] === $user['name'])
            {
                array_push($pngs,$png);
            }
        }

    }
    foreach($prejpgs as $jpg)
    {
        $len = strlen($jpg)-4-strlen('imagesmini/');
        $id = substr($jpg,strlen('imagesmini/'),$len);
        $data = MDB_getUsingId('images',$id);
        if($data['dostep'] === 'publiczne' || $data['rAutor'] === $user['name'])
            array_push($jpgs,$jpg);
    }



    $files = array_merge($pngs,$jpgs);
    $size = sizeof($files);
    $max_size = ceil($size/$PHOTOS_ON_ONE_PAGE);
    $model['maxSize'] = $max_size;

    if(!isset($_SESSION['page']))
        $_SESSION['page'] = 1;
    else if($_SESSION['page']>$max_size)
    {
        $_SESSION['page'] = $max_size;
    }
    
    if($_SESSION['page']<1)
    {
        $_SESSION['page'] = 1;
    }


    $resultPhotos = [];
    for($i=0;$i<12;$i++)
    {
        if((($_SESSION['page']-1)*12)+$i >= $size) break;
        $to_push = $files[(($_SESSION['page']-1)*12)+$i];
        array_push($resultPhotos,$to_push);
    }
    $model['resultP'] = $resultPhotos;


    $czy_powodzenie = false;
    if(isset($_SESSION['logged']))
    {
        if($_SESSION['logged'] == true)
            $czy_powodzenie = true;
    }
    if($czy_powodzenie)
    {
        $model['activesite'] = 'galeria';
        $model['Mname'] = $user['name'];
    }
    {
        $model['activesite'] = 'galeria';
        return'galeriaView';
    }


}


function login(&$model)
{
    $czy_zalogowany = false;
    if(isset($_SESSION['logged']))
    {
        if($_SESSION['logged'] == true)
            $czy_zalogowany = true;
    }
    if(!$czy_zalogowany)
    {
        $model['activesite'] = 'login';
        return 'loginView';
    }
    else return'redirect::galeria';
}


function loginTry()
{
    $czy_zalogowany = false;
    if(isset($_SESSION['logged']))
    {
        if($_SESSION['logged'] == true)
            $czy_zalogowany = true;
    }
    if($czy_zalogowany) return'redirect::galeria';


    $try = true;
    $nick = $_POST['nick'];
    $pass = $_POST['pass'];

    if(!MDB_if_found('users','name',$nick))
    {
        if(strlen($nick)>0)
            $_SESSION['logNameErr'] = 'Taka nazwa użytownika nie istnieje';
        $try = false;
    }
    else
    {
        $user = MDB_findOne('users','name',$nick);
        if(!password_verify($pass, $user['pass']))
        {
            $_SESSION['logPassErr'] = 'Niepoprawne hasło';
            $try = false;
        }
    }
    
    if($try)
    {
        $_SESSION['logged'] = true;
        $_SESSION['ID'] = $user['_id'];
        return 'redirect::galeria';
    }
    else return 'redirect::login';
}


function logOut()
{
    session_unset();
    return 'redirect::login';
}


function rejestracja(&$model)
{
    $model['activesite'] = 'rejestracja';
    return 'rejestracjaView';
}


function rejestracjaTry()
{
    $czy_udana = true;
    $nick = $_POST['regNick'];
    $mail = $_POST['regMail'];
    $pass1 = $_POST['regPass1'];
    $pass2 = $_POST['regPass2'];

    if (ctype_alnum($nick) == false)
    {
        $czy_udana = false;
        $_SESSION['regNameErr'] = 'Nick może składać się tylko z cyfr i liter, bez polskich znaków';
    }

    if(MDB_if_found('users','name',$nick))
    {
        $czy_udana = false;
        $_SESSION['regNameErr'] = 'Ta nazwa jest już zajęta';
    }

    if(strlen($nick) < 3 || strlen($nick) > 25)
    {
        $czy_udana = false;
        $_SESSION['regNameErr'] = 'Nick powinien byc z przedzialu od 3 do 25 znakow';
    }

    $mailTransformed = filter_var($mail, FILTER_SANITIZE_EMAIL);
    if((filter_var($mailTransformed, FILTER_VALIDATE_EMAIL) == false) || ($mailTransformed != $mail))
    {
        $czy_udana = false;
        $_SESSION['regMailErr'] = 'Podano niepoprawny mail';
    }

    if($pass1 != $pass2)
    {
        $czy_udana = false;
        $_SESSION['regPass2Err'] = 'Hasła nie są identyczne';
    }

    if(strlen($pass1) < 6)
    {
        $czy_udana = false;
        $_SESSION['regPass1Err'] = 'Hasło musi mieć minimum 6 znaków';
    }
    else if(strlen($pass1) > 25)
    {
        $czy_udana = false;
        $_SESSION['regPass1Err'] = 'Makszymalny rozmiar hasła to 25 znaków';
    }

    if($czy_udana == false)
    {
        $_SESSION['preNick'] = $nick;
        $_SESSION['preMail'] = $mail;
        return 'redirect::rejestracja';
    }
    else
    {
        $passHash = password_hash($pass1, PASSWORD_DEFAULT);

        $newuser = [
            'name' => $nick,
            'pass' => $passHash,
            'mail' => $mail
        ];

        MDB_add('users',$newuser);

        $_SESSION['justRegistered'] = true;
        $_SESSION['registeredName'] = $nick;

        return 'redirect::udanaRejestracja';
    }

}

function udanaRejestracja(&$model)
{
    if(isset($_SESSION['justRegistered']))
    {
        unset($_SESSION['justRegistered']);
        return 'udanaRejestracjaView';
    }
    return 'redirect::login';

}

function upload(&$model)
{
    $czy_powodzenie = false;
    if(isset($_SESSION['logged']))
    {
        if($_SESSION['logged'] == true)
            $czy_powodzenie = true;
    }
    if($czy_powodzenie)
    {
        $model['activesite'] = 'upload';

        $user = MDB_getUsingId('users',$_SESSION['ID']);
        $model['Mname'] = $user['name'];
    }
    return 'uploadView';
}

function uploadTry()
{
    $czyUdane = true;

    $autor = $_POST['photoAuthor'];
    $img = $_FILES['photo'];
    $title = $_POST['photoTitle'];
    $znak = $_POST['znakWodny'];
    if(!isset($_POST['photoPrivate']))
    {
        $_POST['photoPrivate']='publiczne';
    }
    $dostep = $_POST['photoPrivate'];

    if (empty($_FILES['photo']))
    {
        $_SESSION['upTypeErr'] = 'Nie podano pliku';
        return 'redirect::upload';
        exit();
    }

    if (!file_exists($img['tmp_name']))
    {
        $_SESSION['upTypeErr'] = 'Nie podano pliku';
        return 'redirect::upload';
        exit();
    }


    if(isset($img))
    {     
        if(strlen($title)<1 || strlen($title)>50)
        {
            $czyUdane = false;
            $_SESSION['upTitleErr'] = 'Nazwa musi mieć od 1 do 50 znaków';
        }

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        if(isset($img['tmp_name']))
        {
            $mime_type = finfo_file($finfo, $img['tmp_name']);
            if($mime_type === 'image/jpeg')
            $type = 'jpg';
            else if($mime_type === 'image/png')
                $type = 'png';
            else
            {
                $czyUdane = false;
                $_SESSION['upTypeErr'] = 'Nieprawidłowy format pliku';
            }
        }
        else
        {
            $_SESSION['upTitleErr'] = 'Należy podać nazwe';
        }


        if($img['size'] > 1048576)
        {
            $czyUdane = false;
            $_SESSION['upTypeErr'] = 'Rozmiar pliku przekracza 1 MB';
        }


        if(strlen($znak)<1 || strlen($znak)>30)
        {
            $czyUdane = false;
            $_SESSION['upWaterErr'] = 'Znak wodny musi mieć od 1 do 30 znaków';
        }
    }


    if($czyUdane === true)
    {

        if(isset($_SESSION['ID']))
        {
            $realAutor = MDB_getUsingId('users',$_SESSION['ID']);
            $realAutorName = $realAutor['name'];
        }
        else
            $realAutorName = 'xx';

        $toadd = [
            'nazwa' => $title,
            'autor' => $autor,
            'rAutor' => $realAutorName,
            'znak' => $znak,
            'dostep' => $dostep,
            'ext' => $type
        ];
        $newID = MDB_add('images',$toadd);

        $name = $newID.".".$type;
        $path = 'oryginal/'.$name;
        $tmp_path = $img['tmp_name'];
        $image_size = getimagesize($tmp_path);
        move_uploaded_file($tmp_path, $path);

        $pathmini = 'imagesmini/'.$name;

        if($type === 'jpg')
            $toModify1 = imagecreatefromjpeg($path);
        else if($type === 'png')
            $toModify1 = imagecreatefrompng($path);

        $modified1 = imagescale($toModify1,200,125);
        imagejpeg($modified1,$pathmini);

        $pathwater = 'images/'.$name;

        if($type === 'jpg')
            $toModify2 = imagecreatefromjpeg($path);
        else if($type === 'png')
            $toModify2 = imagecreatefrompng($path);



        $textcolor = imagecolorallocatealpha($toModify2, 0, 0, 0,60);

        $font = './static/fonts/Lato-Regular.ttf';

        $target_size = ($image_size[0]/(strlen($znak)+3))*0.9;

        imagefttext($toModify2,$target_size,0,20,$target_size+20,$textcolor,$font,$znak);
        imagejpeg($toModify2,$pathwater);

        $_SESSION['upload'] = $title;
    }
    return 'redirect::upload';
}

function poprzedniaStrona()
{
    if($_SESSION['page'] > 1)
        $_SESSION['page'] = $_SESSION['page']-1;
    return 'redirect::galeria';
}

function nastepnaStrona()
{
    $_SESSION['page'] = $_SESSION['page']+1;
    return 'redirect::galeria';
}

function watch(&$model)
{
    if(isset($_SESSION['watch']))
    {
        $user = MDB_getUsingId('users',$_SESSION['ID']);
        $model['Mname'] = $user['name'];
        return 'watchView';
    }
    else
        return 'redirect::galeria';
}

function update()
{
    $pics = MDB_getAll('images');


    foreach($pics as $pic)
    {
        $id = (string) $pic['_id'];
        if(isset( $_POST[$id] ))
        {
            $_SESSION[$id] = $_POST[$id];
        }
    }
    return 'NOVIEW';
}

function zapamietane(&$model)
{
    $PHOTOS_ON_ONE_PAGE = 12;
    $path='imagesmini/'; 
    $prepngs = glob($path.'*.png');
    $prejpgs = glob($path.'*.jpg');
    if(isset($_SESSION['ID']))
        $user = MDB_getUsingId('users',$_SESSION['ID']);
    $pngs =[];
    $jpgs =[];
    foreach($prepngs as $png)
    {
        $len = strlen($png)-4-strlen('imagesmini/');
        $id = substr($png,strlen('imagesmini/'),$len);
        $data = MDB_getUsingId('images',$id);
        if(isset($_SESSION[$id]))
        {
            if($_SESSION[$id] == 'true')
            {
                if($data['dostep'] === 'publiczne')
                {
                    array_push($pngs,$png);
                }
                else if(isset($_SESSION['ID']))
                {
                    if($data['rAutor'] === $user['name'])
                    {
                        array_push($pngs,$png);
                    }
                }
            }
        }
    }
    foreach($prejpgs as $jpg)
    {
        $len = strlen($jpg)-4-strlen('imagesmini/');
        $id = substr($jpg,strlen('imagesmini/'),$len);
        $data = MDB_getUsingId('images',$id);
        if(isset($_SESSION[$id]))
        {
            if($_SESSION[$id] == 'true')
            {
                if($data['dostep'] === 'publiczne')
                {
                    array_push($jpgs,$jpg);
                }
                else if(isset($_SESSION['ID']))
                {
                    if($data['rAutor'] === $user['name'])
                    {
                        array_push($pngs,$png);
                    }
                }
            }
        }
    }

    $files = array_merge($pngs,$jpgs);
    $size = sizeof($files);
    $max_size = ceil($size/$PHOTOS_ON_ONE_PAGE);
    $model['maxSize'] = $max_size;

    if(!isset($_SESSION['page']))
        $_SESSION['page'] = 1;
    else if($_SESSION['page']>$max_size)
    {
        $_SESSION['page'] = $max_size;
    }
    
    if($_SESSION['page']<1)
    {
        $_SESSION['page'] = 1;
    }


    $resultPhotos = [];
    for($i=0;$i<12;$i++)
    {
        if((($_SESSION['page']-1)*12)+$i >= $size) break;
        $to_push = $files[(($_SESSION['page']-1)*12)+$i];
        array_push($resultPhotos,$to_push);
    }
    $model['resultP'] = $resultPhotos;


    $czy_powodzenie = false;
    if(isset($_SESSION['logged']))
    {
        if($_SESSION['logged'] == true)
            $czy_powodzenie = true;
    }
    if($czy_powodzenie)
    {
        $model['activesite'] = 'zapamietane';
        $model['Mname'] = $user['name'];
    }

    return'zapamietaneView';
}

function wyszukiwarka(&$model)
{
    $model['activesite'] = 'wyszukiwarka';
    if(isset($_SESSION['ID']))
    {
        $user = MDB_getUsingId('users',$_SESSION['ID']);
        $name = $user['name'];
        $model['Mname'] = $name;
    }
    return'wyszukiwarkaView';
}

function toSearch()
{
    if(isset($_POST['search']))
    {
        if(strlen($_POST['search']) > 0)
        {
            $search = $_POST['search'];
            $all = MDB_getAll('images');
            foreach($all as $oneimage)
            {
                $onelow = strtolower($oneimage['nazwa']);
                $searchlow = strtolower($search);
                $ID = $oneimage['_id'];
                $ext = $oneimage['ext'];
                $name = $oneimage['nazwa'];
                $autor = $oneimage['autor'];
                $udane = false;
    
                if(strpos($onelow  , $searchlow) !== false)
                {
                    if($oneimage['dostep'] === 'publiczne')
                    {
                        $udane = true;
                    }
                    else if(isset($_SESSION['ID']))
                    {
                        $user = MDB_getUsingId('users',$_SESSION['ID']);
                        if($oneimage['rAutor'] === $user['name'])
                        {
                            $udane = true;
                        }
                    }
                }
                if($udane === true)
                {
                    $data = MDB_getUsingId('images',$ID);
                    include 'views/wyszukiwarkaFetch.php';

                }
            }
        }

        $answer = [];

        unset($_POST['search']);
    }
    return 'NOVIEW';
}

?>