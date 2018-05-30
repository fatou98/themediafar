<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<style>
body {
    font-family: Times New Roman;
}

.nav-wrapper ul li a {
    font-size: 20px;
    text-decoration: none;
}

a {
    text-decoration: none;
}

#index-banner {
    background-image: url(./images/back1-sombre.png);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: auto;
    padding-bottom: 50px;
    padding-top: 100px;
    -webkit-animation-name: example;
    /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s;
    /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 10s;
    animation-iteration-count: infinite;
}

@-webkit-keyframes example {
    0% {
        background-image: url(./images/bini.jpg);
    }
    50% {
        background-image: url(./images/back1-sombre.png);
    }
}


/* Standard syntax */

@keyframes example {
    0% {
        background-image: url(./images/bini.jpg);
    }
    50% {
        background-image: url(./images/back1-sombre.png);
    }
}

#recherche {
    text-align: center;
}

.selectser {
    margin-right: -30px;
}

label {
    font-size: 18px;
    color: orange;
    font-weight: bold;
}

.divdiv {
    margin-top: 50px;
}

.service {
    text-align: center;
    display: flex;
    flex-wrap: wrap;
}

.iconess {
    border-radius: 50%;
    color: white;
    background-color: #29b6f6;
    width: 100px;
    height: 100px;
    font-size: 30pt;
    line-height: 45px;
    padding: 25px;
}

.iicon {
    font-size: 50px;
}


/*039be5*/</style>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">HELLO DOCTEUR</a>
      <ul class="right hide-on-med-and-down">
      <li><a href="#">Accueil</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#">A propos</a></li>
      <li><a href="./contact.php">Contact</a></li>
      <li><a href="./profil.php"><i class="material-icons">account_circle</i></a></li>

      </ul>

      <ul id="nav-mobile" class="sidenav">
      <li><a href="#">Accueil</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#">A propos</a></li>
      <li><a href="./contact.php">Contact</a></li>
      <li><a href="./profil.php"><i class="material-icons">account_circle</i>Mon profil</a></li>

            </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container divdiv">
      <br><br>
      <h1 class="header center orange-text">HELLO DOCTEUR</h1>
      <div class="row center">

      </div>
      <div class="row center" id="recherche">
      <div class="col-lg-2 col-xs-6 selectser"> 
      <label for="sel1">Ville:</label>
      <select class="form-control" id="sel1" name="sellist1" style=" border-radius:0px;height:70px;border:0px;outline:0px;">
      <option>Choisissez une ville</option>
      <option>Guediawaye</option>
        <option>Liberte 1</option>
        <option>Bambilor</option>
        <option>Mammelles</option>
      </select></div> <div class="col-lg-3 col-xs-6 selectser"> 
      <label for="sel1">Hopital:</label>
      <select class="form-control" id="sel1" name="sellist1" style="border-radius:0px; height:70px;border:0px;outline:0px;">
      <option>Choisissez la structure</option>
      <option>Abbass Ndao</option>
        <option>Dentec</option>
        <option>Les madeleines</option>
        <option>Bopp</option>
      </select></div> <div class="col-lg-2 col-xs-6 selectser"> 
      <label for="sel1">Specialité:</label>
      <select class="form-control" id="sel1" name="sellist1" style="border-radius:0px; height:70px;border:0px;outline:0px;">
      <option>Choisissez la specialté</option>
      <option>Neurologie</option>
        <option>Pediatrie</option>
        <option>syrurgie</option>
        <option>Dentaire</option>
        <option>Ophtalmologie</option>
      </select></div> <div class="col-lg-3 col-xs-6 selectser" style="height:70px;padding-top:-30px;"> 
      <label for="usr">Name:</label>

      <div class="form-group" style="background-color:white;height:70px;padding:5px;">
  <input type="text" class="form-control" id="usr" placeholder="Entrez le nom du docteur">
</div></div>
      <button class="col-lg-2 col-xs-6 btn waves-effect waves-light orange" style="border-radius:0px;height:70px;margin-top:34px; margin-left:15px;" type="submit" name="action">Rechercher
    <i class="material-icons right">search</i>
  </button>

      </div>
    </div>
  </div>


  <div class="container-fluid" id="services" style="text-align:center;padding:30px;background-color:white;">
  <div class="rowe" >
  <h2 >Les avantages de HELLO DOCTEUR</h2>
  </div>
  <br><br>
  <div class="row">
  <div class="col-lg-4 col-xs-6">
  <span class="iconess"><i class="material-icons iicon">date_range</i></span><br><br>
  <h3>Prise de rendez-vous</h3>
</div>
  <div class="col-lg-4 col-xs-6"><span class="iconess"><i class="material-icons iicon">date_range</i></span><br><br>
  <h3>Prise de rendez-vous</h3></div>
  <div class="col-lg-4 col-xs-6"><span class="iconess"><i class="material-icons iicon">date_range</i></span><br><br>
  <h3>Prise de rendez-vous</h3></div>
  </div>
  </div>

  <div class="container-fluid" style="text-align:center;padding:30px;background-color:orange;">
  <div class="rowe" >
  <h2 >Les avantages de HELLO DOCTEUR</h2>
  </div>
  <br><br>
  <div class="row">
  <div class="col-lg-4 col-xs-6">
  <span class="iconess"><i class="material-icons iicon">date_range</i></span><br><br>
  <h3>Prise de rendez-vous</h3>
</div>
  <div class="col-lg-4 col-xs-6"><span class="iconess"><i class="material-icons iicon">date_range</i></span><br><br>
  <h3>Prise de rendez-vous</h3></div>
  <div class="col-lg-4 col-xs-6"><span class="iconess"><i class="material-icons iicon">date_range</i></span><br><br>
  <h3>Prise de rendez-vous</h3></div>
  </div>
  </div>

  <footer class="page-footer light-blue lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
