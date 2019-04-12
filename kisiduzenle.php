
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kişi Ekleme</title>
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


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Kişi Düzenleme</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">

            <?php
                include("db.php");

                $id = $_GET["id"];

                $select = $db-> prepare("SELECT * FROM adres WHERE id =:id");
                $select ->bindParam(":id",$id,PDO::PARAM_INT);
                $select->execute();
                $row = $select->fetch(PDO::FETCH_ASSOC);

            ?>

            <form method="get" action="edit.php">
                <div class="form-group">
                    <label>Adınız</label>
                    <input type="text" class="form-control" name="name" placeholder="adınızı giriniz" value="<?php echo $row["name"];?>">
                </div>

                <div class="form-group">
                    <label>Soyadınız</label>
                    <input type="text" class="form-control" name="lastname" placeholder="soyadınızı giriniz" value="<?php echo $row["lastname"];?>">
                </div>

                <div class="form-group">
                    <label>Doğum Tarihi</label>
                    <input type="date" class="form-control" name="birthday" placeholder="Doğum Tarihinizi giriniz" value="<?php echo $row["birthday"];?>">
                </div>

                <div class="form-group">
                    <label>Telefon</label>
                    <input type="text" class="form-control" name="phone" placeholder="telefon numaranızı giriniz" value="<?php echo $row["phone"];?>">
                </div>

                <div class="form-group">
                    <label>Web Adresi</label>
                    <input type="text" class="form-control" name="web" placeholder="web adresinizi giriniz" value="<?php echo $row["web"];?>">
                </div>

                <div class="form-group">
                    <label>Email Adresi</label>
                    <input type="text" class="form-control" name="email" placeholder="email adresinizi giriniz" value="<?php echo $row["email"];?>">
                </div>

                <div class="form-group">
                    <label>Facebook Adresi</label>
                    <input type="text" class="form-control" name="facebook" placeholder="facebook adresinizi giriniz"value="<?php echo $row["facebook"];?>">
                </div>

                <div class="form-group">
                    <label>Twitter Adresi</label>
                    <input type="text" class="form-control" name="twitter" placeholder="twitter adresinizi giriniz"value="<?php echo $row["twitter"];?>">
                </div>

                <div class="form-group">
                    <label>Google+ Adresi</label>
                    <input type="text" class="form-control" name="googlePlus" placeholder="Google+ adresinizi giriniz"value="<?php echo $row["googlePlus"];?>">
                </div>

                <div class="form-group">
                    <label>Adres</label>
                    <textarea class="form-control" name="location" placeholder="adresinizi giriniz"><?php echo $row["location"];?></textarea>
                </div>

                <div class="form-group">
                    <label>Önemli Not</label>
                    <textarea class="form-control" name="note" placeholder="Not giriniz"><?php echo $row["note"];?></textarea>
                </div>


                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">

                <button type="submit" class="btn btn-primary pull-right">Güncelle</button>
                <a href="list.php" class="btn btn-default pull-left" >Geri</a>
            </form>

        </div>
    </div>
    <br><br>
    <br>

</div>



</body>
</html>