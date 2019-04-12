<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adres Listesi</title>



    <script src="js/jquery-3.4.0.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


</head>
<body>

<?php

    require_once ("db.php");
    $rows = $db->query("select * from adres",PDO::FETCH_ASSOC);




?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
                <h3>Kişi Listesi <a href="kisiekle.html"> <span style="font-size: 18px" class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a></h3>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <th>Kayıt No</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Doğum Tarihi</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Web</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>Google+</th>
                <th>Adres</th>
                <th>İşlemler</th>
                </thead>
                <tbody>
                    <?php foreach($rows as $row) {?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["lastname"]; ?></td>
                        <td><?php echo $row["birthday"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["web"]; ?></td>
                        <td><?php echo $row["facebook"]; ?></td>
                        <td><?php echo $row["twitter"]; ?></td>
                        <td><?php echo $row["googlePlus"]; ?></td>
                        <td><?php echo $row["location"]; ?></td>
                        <td>

                            <a style="margin-bottom: 5px;" class="btn btn-primary"href="kisiduzenle.php?id=<?php echo $row["id"]; ?>">Düzenle</a>

                            <a style="width: 78px" class="btn btn-danger" href="sil.php?id=<?php echo $row["id"]; ?>">Sil</a>

                        </td>


                    </tr>
                <?php } ?>
                </tbody>


            </table>
        </div>
    </div>

</div>



</body>
</html>