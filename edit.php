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
        $id = $_GET['id'];


        include ("db.php");

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
            "note" => $note,
            "id" => $id
        );

        $update = $db->prepare("UPDATE adres SET 
          
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
        where id =:id
                
        ");

        $result = $update->execute($data);

        if($result) {
            echo 'Güncelleme işlemi başarılı! <a href="list.php"> Listeye gitmek için tıklayınız...</a>';

        }else{
            echo 'Güncelleme işlemi başarısız!';
        }



    }






?>