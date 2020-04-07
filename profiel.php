<?php session_start();?>
<?php include_once ("prive/functions.php"); ?>
<?php include_once ("prive/db/dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="">
    <meta name="theme-color" content="#2F2F2F">
    <link rel="icon" href="img/flaticon.jpg">
    <title>Festival Herres | profiel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="css/profile.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php include "public/shared/nav.php"; ?>

<div class="container-fluid"> <!--container fluid voor full with-->
    <div class="row">
        <div class="col-md-12">
            <nav class="profileNav">
                <ul>
                    <li><a href="profiel.php">Persoonlijke gegevens</a></li>
                    <li class="line"> | </li>
                    <li><a href="bestellingen.php">Bestellingen</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="profileContent">
                <div class="card rounded-10">
                    <?php
                    $profileResult = profileResult();
                    foreach($profileResult as $profileResults) {  ?>
                    <div class="card-body">
                        <form class="form" role="form" id="formLogin" method="POST" action="prive/action/updateProfielGegevens.php">
                            <div class="form-group">
                                <label for="uname1">Voornaam*</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="voornaam" id="uname1" placeholder="<?php echo $profileResults[1]; ?>" >

                            </div>
                            <div class="form-group">
                                <label for="uname1">Tussenvoegsel</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="tussenvoegsel" placeholder="<?php echo $profileResults[2]; ?>" id="uname1">

                            </div>
                            <div class="form-group">
                                <label for="uname1">Achternaam*</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="achternaam" placeholder="<?php echo $profileResults[3]; ?>" id="uname1" >

                            </div>
                            <div class="form-group">
                                <label>E-mail*</label>
                                <input type="email" class="form-control form-control-lg rounded-0" name="email" placeholder="<?php echo $profileResults[4]; ?>" id="pwd1" >

                            </div>

                            <div class="form-group">
                                <label>Telefoonnummer*</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="tel" placeholder="<?php echo $profileResults[5]; ?>" id="pwd1" >

                            </div>

                            <div class="form-group">
                                <label>Straatnaam*</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="straatnaam" placeholder="<?php echo $profileResults[6]; ?>" id="pwd1" >

                            </div>

                            <div class="form-group">
                                <label>Huisnummer*</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="huisnummer" id="pwd1" placeholder="<?php echo $profileResults[7]; ?>" >

                            </div>

                            <div class="form-group">
                                <label>Postcode*</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="postcode" placeholder="<?php echo $profileResults[8]; ?>" id="pwd1" >

                            </div>

                            <div class="form-group">
                                <label>Woonplaats*</label>
                                <input type="text" class="form-control form-control-lg rounded-0" name="woonplaats" placeholder="<?php echo $profileResults[9]; ?>" id="pwd1" >

                            </div>

                            <?php } ?>

                        <div class="form-group">
                            <label>Wachtwoord*</label>
                            <input type="password" class="form-control form-control-lg rounded-0" name="wachtwoord" id="pwd1" >

                        </div>
                        <div>

                        <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Aanpassen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






</body>
</html>
