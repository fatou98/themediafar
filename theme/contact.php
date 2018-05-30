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
  <section class="row pagecourrante">
<h1>Hello Docteur | Contact </h1>
  </section>

<section class="row">
<div class="col-lg-4 col-xs-12 contacts">
<h2>Nos contacts</h2><hr><br><br>
<ul>

<li><h3><i class="material-icons">location_on</i>  Sacre coeur</h3></li><br>
<li><h3><i class="material-icons">local_post_office</i>  yenijhg@uytgfr</h3>  </li><br>
<li><h3><i class="material-icons">phone</i>   78 52587412696</h3></li><br>
<li><h3><i class="material-icons">location_on</i>Sacre coeur</h3></li><br>
</ul>
</div>
<div class="col-lg-8 col-xs-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.8362804444732!2d-17.4636033!3d14.7218465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172b165a48f5b%3A0x6d284c5bedcf8344!2sJVC!5e0!3m2!1sfr!2ssn!4v1527646763465"   frameborder="0" style="border:0;width:600px;height:400px;" allowfullscreen></iframe></div>
</section>
</body>
</html>