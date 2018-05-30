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
.pagecourrante{
  background-image:url(./images/Doctoclic-back.png);
  background-position:center;
  height:300px;
    text-align:center;
    padding:150px;
    padding-left:500px;

}
hr{
  width:200px;
  float:left;
}
.contacts{
  padding-left:50px;
}
</style>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">HELLO DOCTEUR</a>
      <ul class="right hide-on-med-and-down">
      <li><a href="./index.php">Accueil</a></li>
      <li><a href="./index.php#services">Services</a></li>
      <li><a href="#">A propos</a></li>
      <li><a href="./contact.php">Contact</a></li>
      <li><a href="./profil.php"><i class="material-icons">account_circle</i></a></li>

      </ul>

      <ul id="nav-mobile" class="sidenav">
      <li><a href="./index.php">Accueil</a></li>
      <li><a href="./index.php#services">Services</a></li>
      <li><a href="#">A propos</a></li>
      <li><a href="./contact.php">Contact</a></li>
      <li><a href="./profil.php"><i class="material-icons">account_circle</i>Mon profil</a></li>

            </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <section class="row"> <div class="row">
  <ul id="tabs-swipe-demo" class="tabs">
    <li class="tab col s3"><a href="#test-swipe-1">Test 1</a></li>
    <li class="tab col s3"><a class="active" href="#test-swipe-2">Test 2</a></li>
    <li class="tab col s3"><a href="#test-swipe-3">Test 3</a></li>
  </ul>
  <div id="test-swipe-1" class="col s12 blue">Test 1</div>
  <div id="test-swipe-2" class="col s12 red">Test 2</div>
  <div id="test-swipe-3" class="col s12 green">Test 3</div>
        </section>
  </body>
  </html>