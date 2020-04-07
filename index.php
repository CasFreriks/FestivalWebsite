<?php session_start();?>
<?php require_once ("prive/functions.php");?>
<?php require_once ("prive/db/dbconfig.php");?>

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
    <link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php include "public/shared/nav.php"; ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welkom!</h5>
                    <p>Koop nu tickets voor het beste festival van Doetinchem!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Veel verschillende artiesten</h5>
                    <p>Op dit festival zijn wel 30 verschillende artiesten te vinden voor jong en oud</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>drie verschillende tickets</h5>
                    <p>Er zijn voor dit festival 3 verschillende tickets beschikbaar</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<div class="container">
    <div class="row">
        <?php
            $tickets = ticketResult();
            foreach($tickets as $ticket) {  ?>

                <div class="col-md-4">
                    <div id="ticket">
                        <div class="ticketImg">
                            <img src="img/ticket.svg" draggable="false" alt="ticketImg">
                        </div>

                        <h4><?php echo $ticket[1]?></h4>

                        <p><?php echo "&euro;". $ticket[3]; ?></p>

                        <p><?php echo $ticket[2];?></p>

                        <form action="prive/action/ticketKopen.php" method="post">
                            <div class="button-flex">
                                <input class="form-control" type="number" value="1" min="1" id="example-number-input" name="ticket_aantal" required>
                                <input type="hidden" value="<?php echo $ticket[0];?>" name="ticket_id" required>
                                <input type="hidden" value="<?php echo $ticket[3];?>" name="ticket_prijs" required>
                                <input type="hidden" value="<?php echo $_SESSION["klant_id"]?>" name="klant_id" required>
                                <?php if (isset($_SESSION["klant_id"]) != "") {
                                    echo "<button type='submit' class='btn btn-success'>Kopen</button>";
                                } else {
                                    echo "<button type='button' class='btn btn-success'><a href='inlog.php' class='text-white' style='text-decoration: none'>Inloggen</a></button>";
                                }

                                ?>
                            </div>
                        </form>
                    </div>
                </div>

         <?php  } ?>
    </div>
</div>
<?php include_once ("public/shared/footer.php"); ?>

</body>
</html>