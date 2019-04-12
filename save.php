<?php


    if($_GET) {
        $name = $_GET['name'];
        $lastname = $_GET['lastname'];
        $birthday = $_GET['birthday'];
        $phone = $_GET['phone'];
        $web = $_GET['web'];
        $email = $_GET['email'];
        $facebook= $_GET['facebook'];
        $twitter = $_GET['twitter'];
        $googlePlus = $_GET['googlePlus'];
        $location = $_GET['location'];
        $note = $_GET['note'];


        require_once ("db.php");


        $data = array(
            "name" => $name,
            "lastname" => $lastname,
            "birthday" => $birthday,
            "phone" => $phone,
            "web" =>$web,
            "email" => $email,
            "facebook"=>$facebook,
            "twitter"=>$twitter,
            "googlePlus"=>$googlePlus,
            "location" =>$location,
            "note" => $note
        );

        $insert = $db->prepare("insert into adres set 
          
        name=:name,
        lastname=:lastname,
        birthday=:birthday,
        phone=:phone,
        web=:web,
        email=:email,
        facebook=:facebook,
        twitter=:twitter,
        googlePlus=:googlePlus,
        location=:location,
        note=:note
                
        ");

        $result = $insert->execute($data);

        if($result) {
            echo 'Kayit işlemi başarılı! <a href="list.php"> Listeye gitmek için tıklayınız...</a>';

        }else{
            echo 'Kayit işlemi başarısız!<a href="kisiekle.html">tekrar denemek için tıklayınız...</a>';
        }



    }






?>