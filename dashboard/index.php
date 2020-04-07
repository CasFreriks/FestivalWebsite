<?php session_start();?>
<?php require_once ("../prive/functions.php");?>
<?php require_once ("../prive/db/dbconfig.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="">
    <meta name="theme-color" content="#2F2F2F">
    <link rel="icon" href="img/flaticon.jpg">
    <title>Festival Herres | Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
  <div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><a href="../index.php">Festival Herres </div>
      <div class="list-group list-group-flush">
          <a href="index.php" class="list-group-item list-group-item-action bg-light">Home</a>
          <a href="overzichtGebruikers.php" class="list-group-item list-group-item-action bg-light">Overzicht Gebruikers</a>
          <a href="overzichtKlanten.php" class="list-group-item list-group-item-action bg-light">Overzicht Klanten </a>
          <a href="overzichtBestellingen.php" class="list-group-item list-group-item-action bg-light">Overzicht bestellingen</a>
          <a href="../prive/logout.php" class="list-group-item list-group-item-action bg-light">Uitloggen</a>
      </div>
    </div>

    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item">
                  <div class="dropdown-menu-right">Welkom <?php echo $_SESSION["usr_firstname"]. " " . $_SESSION["usr_prefix"]. " " .$_SESSION["usr_lastname"];?></div>
              </li>
          </ul>

      </nav>


      <div class="container-fluid">
        <h1 class="mt-4">Dashboard Festival Herres</h1>
          <p>In deze dashboard is het mogelijk om de gebruikers,klanten en bestellingen te beheren, verwijderen en in te zien.</p>
          <p>&copy; Cas Freriks</p>


      </div>
    </div>

  </div>







  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>


</body>
</html>
