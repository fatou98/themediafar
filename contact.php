<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>
<style>
#container {
} 

#nav, #nav ul {
   padding: 0;
   margin: 0;
   list-style: none; 
} 

#nav a {
   display: block;
   width: 10em; 
} 

#nav li {
   float: left;
   width: 10em;
}

#nav li ul {
   position: absolute;
   width: 10em;
   left: -999em; 
} 

#nav li:hover ul {
   left: auto; 
}

#nav li:hover ul, #nav li.sfhover ul {
   left: auto; 
}

</style>
<div id="container">
   <ul id="nav">
      <li><a href="#">Menu 1</a>
         <ul>
            <li><a href="#nogo">Sous-menu 1.1</a></li>
            <li><a href="#nogo">Sous-menu 1.2</a></li>
            <li><a href="#nogo">Sous-menu 1.3</a></li>
            <li><a href="#nogo">Sous-menu 1.4</a></li>
         </ul>
      </li>
      <li><a href="#">Menu 2</a>
         <ul>
            <li><a href="#nogo">Sous-menu 2.1</a></li>

            <li><a href="#nogo">Sous-menu 2.2</a></li>
            <li><a href="#nogo">Sous-menu 2.3</a></li>
            <li><a href="#nogo">Sous-menu 2.4</a></li>
         </ul>
      </li>
      <li><a href="#">Menu 3</a>
         <ul>
            <li><a href="#nogo">Sous-menu 3.1</a></li>
            <li><a href="#nogo">Sous-menu 3.2</a></li>
            <li><a href="#nogo">Sous-menu 3.3</a></li>
            <li><a href="#nogo">Sous-menu 3.4</a></li>
         </ul>
      </li>
   </ul>
</div>
</body>
</html>
