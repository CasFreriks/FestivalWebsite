<?php
session_start();

$errormsg = "";

//als iemand nog een sessie heeft met een account wordt hij geredirect naar profiel.php
if (isset($_SESSION["klant_id"]) != "") {
    header("Location: profiel.php");
}

include_once "prive/db/dbconfig.php";

if(isset($_POST["emailInlog"])) {
    $email = $_POST["emailInlog"];
    $password = $_POST["wachtwoordInlog"];

    $email = strip_tags(mysqli_real_escape_string($con, trim($email)));
    $password = strip_tags(mysqli_real_escape_string($con, trim($password)));

    $sql = "SELECT * FROM gebruiker WHERE email='".$email."'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        $password_hash = $row["wachtwoord"];

        if(password_verify($password, $password_hash)) {
                header("Location: profiel.php");

            $_SESSION['klant_id'] = $row['klant_id'];
            $_SESSION['usr_firstname'] = $row['voornaam'];
            $_SESSION['usr_prefix'] = $row['tussenvoegsel'];
            $_SESSION['usr_lastname'] = $row['achternaam'];
            $_SESSION['usr_email'] = $row['email'];
            $_SESSION["rol"] = $row["rol"];
        } else {
            $errormsg = "Verkeerd E-mail en/ of vekeerd wachtwoord.";
        }

    } else {
        $errormsg = "Verkeerd E-mail en/ of vekeerd wachtwoord.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="">
    <meta name="theme-color" content="#2F2F2F">
    <link rel="icon" href="img/flaticon.jpg">
    <title>Festival Herres | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/jquery_login.js"></script>
    <link href="css/inlog.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php include "public/shared/nav.php"; ?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- form card login -->
                    <div class="card rounded-10" id="login-form">
                        <div class="card-header">
                            <h3 class="mb-0">Inloggen</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formLogin"  method="POST">
                                <div class="form-group">
                                    <label for="uname1">E-mail</label>
                                    <input type="email" class="form-control form-control-lg rounded-0" name="emailInlog" id="uname1" required>

                                </div>
                                <div class="form-group">
                                    <label>Wachtwoord</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="wachtwoordInlog" id="pwd1" required>

                                </div>

                                <input type="checkbox" style="margin-left: 23px; margin-bottom: 16px;" id="showPwd"> Wachtwoord tonen

                                <div>
                                    <label class="custom-control custom-checkbox">
                                        <a href="javascript:void('register-form-link');" class="register-form-link">Registreren</a>
                                    </label>
                                </div>

                                <span class="warningsMessage"><?php echo $errormsg; ?></span>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                            </form>
                        </div>
                    </div>
                    <!-- /form card login end-->

                    <!-- form card register -->
                    <div class="card rounded-10" id="register-form">
                        <div class="card-header">
                            <h3 class="mb-0">Registreren</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" id="formLogin" method="POST" action="prive/action/register.php">
                                <div class="form-group">
                                    <label for="uname1">Voornaam*</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="voornaam" id="uname1" required>

                                </div>
                                <div class="form-group">
                                    <label for="uname1">Tussenvoegsel</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="tussenvoegsel" id="uname1">

                                </div>
                                <div class="form-group">
                                    <label for="uname1">Achternaam*</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="achternaam" id="uname1" required>

                                </div>
                                <div class="form-group">
                                    <label>E-mail*</label>
                                    <input type="email" class="form-control form-control-lg rounded-0" name="email" id="pwd1" required>

                                </div>

                                <div class="form-group">
                                    <label>Telefoonnummer*</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="tel" id="pwd1" required>

                                </div>

                                <div class="form-group">
                                    <label>Straatnaam*</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="straatnaam" id="pwd1" required>

                                </div>

                                <div class="form-group">
                                    <label>Huisnummer*</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="huisnummer" id="pwd1" required>

                                </div>

                                <div class="form-group">
                                    <label>Postcode*</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="postcode" id="pwd1" required>

                                </div>

                                <div class="form-group">
                                    <label>Woonplaats*</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="woonplaats" id="pwd1" required>

                                </div>

                                <div class="form-group">
                                    <label>Wachtwoord*</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="wachtwoord" id="pwd1" required>

                                </div>
                                <div>
                                    <label class="custom-control">
                                        Invoervelden met een * zijn verplicht.
                                    </label>

                                    <label class="custom-control custom-checkbox">
                                        Al eerder ingelogd. <a href="javascript:void('register-form-load');" class="login-form-link">Login.</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/showPassword.js"></script>



</body>
</html>