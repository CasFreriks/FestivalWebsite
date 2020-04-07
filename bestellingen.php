<?php session_start();?>
<?php require_once ("prive/functions.php");?>
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
                    <div class="card-body">

                        <?php
                        $sql = "SELECT * FROM bestellingen JOIN tickets ON bestellingen.ticket_id = tickets.ticket_id WHERE betaald=1 AND bestellingen.klant_id =". $_SESSION["klant_id"];
                        $query = mysqli_query($con, $sql);
                        $result = mysqli_num_rows($query);
                        if($result >= 1) {
                           while($result = mysqli_fetch_assoc($query))  {
                            ?>
                                <div class="card">
                                    <div class="card-content">

                                        <img class="cardImg" src="img/ticket.svg" alt="cardImg">

                                        <h5 class="cardH5"><?php echo $result["naam"];?></h5>

                                        <h5 class="cardH5"><?php echo $result["aantal"];?></h5>

                                        <h5 class="cardH5"><?php echo "&euro;". $result["totaalprijs"];?></h5>

                                    </div>
                                </div>
                            <?php
                           }
                        }else {
                            echo "<p style='text-align: center'>Je hebt nog geen bestellingen.</p>";
                        }
                    ?>


                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
