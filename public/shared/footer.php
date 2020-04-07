<!-- Footer -->
<footer class="page-footer font-small indigo bg-light">

    <!-- Footer Links -->
    <div class="container">

        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5 mb-3">

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a class="text-dark" href="index.php">Home</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <?php if (isset($_SESSION["klant_id"]) != "") {
                        echo "<a class='text-dark' href='profiel.php'>Profiel van " .$_SESSION["usr_firstname"] . " " . $_SESSION["usr_prefix"]. " " . $_SESSION["usr_lastname"]. "</a>";
                    } else {
                        echo "<a class='text-dark' href='inlog.php'>Profiel inloggen</a>";
                    }?>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <?php if (isset($_SESSION["klant_id"]) != "") {
                        $inloggenRegristreren = "<a class='text-dark' href='prive/logout.php'>Uitloggen</a>";
                        echo $inloggenRegristreren;
                    }  else {
                        $inloggenRegristreren = "<a class='text-dark' href='inlog.php'>Inloggen</a>";
                        echo $inloggenRegristreren;
                    }?>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <?php if (isset($_SESSION["klant_id"]) != "") {
                        $inloggenRegristreren = "<a class='text-dark' href='winkelmand.php'>Winkelwagen</a>";
                        echo $inloggenRegristreren;
                    }  else {
                        $inloggenRegristreren = "<a class='text-dark' href='inlog.php'>Winkelwagen</a>";
                        echo $inloggenRegristreren;
                    }?>
                </h6>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->
        <hr class="rgba-white-light" style="margin: 0 15%;">

        <!-- Grid row-->
        <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

            <!-- Grid column -->
            <div class="col-md-8 col-12 mt-5">
                <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium, totam rem
                    aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo.
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->
        <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© <?php echo date("Y"); ?> Copyright:
        <a href="#"> FestivalHerres b.v.</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->