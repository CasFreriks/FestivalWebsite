<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #2F2F2F;">
    <a class="navbar-brand" href="index.php">Festival Herres</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <?php

                if (isset($_SESSION["klant_id"]) != "") {
                    echo "<a class='nav-link' href='profiel.php'>Profiel van " . $_SESSION["usr_firstname"] . " " . $_SESSION["usr_prefix"] . " " . $_SESSION["usr_lastname"] . "</a>";
                }
                ?>
            </li>

            <li class="nav-item dashboardNone">
                <?php if (isset($_SESSION["rol"]) && $_SESSION["rol"] === "admin") {
                    $dashboardMenu = "<a class='nav-link' href='dashboard/index.php'>Dashboard</a>";
                    echo $dashboardMenu;
                } else {
                    $dashboardMenu = "";
                    echo $dashboardMenu;
                }?>
            </li>

            <li class="nav-item winkelMandNone">
                <?php if (isset($_SESSION["klant_id"]) != "") {
                    $winkelwagenMenu = "<a class='nav-link' href='winkelmand.php'>Winkelmand</a>";
                    echo $winkelwagenMenu;
                } else {
                    $winkelwagenMenu = "<a class='nav-link' href='inlog.php'>Winkelmand</a>";
                    echo $winkelwagenMenu;
                }?>
            </li>

            <li class="nav-item">
                <?php if (isset($_SESSION["klant_id"]) != "") {
                    $inloggenRegristreren = "<a class='nav-link' href='prive/logout.php'>Uitloggen</a>";
                    echo $inloggenRegristreren;
                }  else {
                    $inloggenRegristreren = "<a class='nav-link' href='inlog.php'>Inloggen</a>";
                    echo $inloggenRegristreren;
                }?>

            </li>

        </ul>
    </div>

    <div class="dashboard">
        <?php if (isset($_SESSION["rol"]) && $_SESSION["rol"] === "admin") {
            $dashboardImg = "<a href='dashboard/index.php'><img src='img/dashboard.svg' draggable='false' title='dashboard'></a>";
            echo $dashboardImg;
        }  else {
            $dashboardImg = "";
            echo $dashboardImg;
        }?>
    </div>

    <div class="winkelWagen">
        <?php if (isset($_SESSION["klant_id"]) != "") {
            $winkelwagenInlog = "<a href='winkelmand.php'><img src='img/shopping-cart.svg' draggable='false' alt='shopping-cart'></a>";
            echo $winkelwagenInlog;
        } else {
            $winkelwagenInlog = "<a href='inlog.php'><img src='img/shopping-cart.svg' draggable='false' alt='shopping-cart'></a>";
            echo $winkelwagenInlog;
        }?>
    </div>

    <div class="login">
        <?php if (isset($_SESSION["klant_id"]) != "") {
            $inloggenUitloggen = "<a href='prive/logout.php'><img src='img/login.svg' draggable='false' title='uitloggen'></a>";
            echo $inloggenUitloggen;
        }  else {
            $inloggenUitloggen = "<a href='inlog.php'><img src='img/login.svg' draggable='false' title='inloggen'></a>";
            echo $inloggenUitloggen;
        }?>
    </div>


</nav>
