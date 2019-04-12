<?php

     $id = $_GET["id"];
    include "db.php";

    $delete = $db->prepare("DELETE FROM adres WHERE id =:id");
    $delete->bindParam(":id",$id,PDO::PARAM_INT);
    $result = $delete -> execute();

    if($result) {
        echo 'Silme işlemi başarılı! <a href="list.php"> Listeye gitmek için tıklayınız...</a>';

    }else{
        echo 'Silme işlemi başarısız!<a href="list.php"> Listeye gitmek için tıklayınız...</a>';
    }



?>