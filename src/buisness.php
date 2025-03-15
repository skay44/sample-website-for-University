<?php

function MDB_get($name)
{
    $mongo = new MongoDB\Client("mongodb://localhost:27017/wai",
        ['username' => 'wai_web','password' => 'w@i_w3b',]);
    return $mongo->$name;
}

function MDB_if_found($name,$what,$word)
{
    $db = MDB_get('wai');
    $results = $db->$name->find();
    $exist = 0;
    foreach ($results as $result) {
        if($result[$what] == $word)
        {
            $exist = 1;
            break;
        }
    }
    if($exist == 0) return 0;
    else return 1;

}

function MDB_findOne($name,$what,$word)
{
    $db = MDB_get('wai');
    $result = $db->$name->findOne([$what => $word]);
    return $result;
}

function MDB_add($name,$toadd)
{
    $db = MDB_get('wai');
    $insertResult = $db->$name->insertOne($toadd);
    $id = $insertResult->getInsertedId();
    return $id;
}

function MDB_create($db,$NAME)
{
    $data = $db->listCollections([
        'filter' => [
            'name' => $NAME]
        ]);

    $exist = 0;
    foreach ($data as $collectionInfo) {
        $exist = 1;
    }

    if($exist == 0)
    {
        $db->createCollection($NAME);
        return true;
    }
    else
    {
        return false;
    }
}

function MDB_getAll($NAME)
{
    $db = MDB_get('wai');
    $sth = $db->$NAME->find();
    return $sth;
}

function MDB_wypisz($NAME)
{
    $db = MDB_get('wai');
    $sth = $db->$NAME->find();
    
    $licz = 1;
    foreach($sth as $th)
    {
        echo $licz.".&nbsp;";
        print_r($th);
        echo "</br>";
        $licz ++;
    }
}

function MDB_getUsingId($NAME,$ID)
{
    $db = MDB_get('wai');
    $sth = $db->$NAME->find();
    $sukces = false;
    foreach($sth as $th)
    {
        if($th['_id'] == $ID)
        {
            $sukces = true;
            return $th;
        }
    }
    if($sukces == false)
        return false;
}

?>