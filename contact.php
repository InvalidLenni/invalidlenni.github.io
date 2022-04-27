<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Import CSS and Assets -->
  <link rel="stylesheet" href="../css/icons.css"> 
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="icon" href="assets/favicon.png">
  <link rel="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
  <!-- Import Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css" integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/solid.min.css" integrity="sha512-6/gTF62BJ06BajySRzTm7i8N2ZZ6StspU9uVWDdoBiuuNu5rs1a8VwiJ7skCz2BcvhpipLKfFerXkuzs+npeKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/brands.min.css" integrity="sha512-bSncow0ApIhONbz+pNI52n0trz5fMWbgteHsonaPk42JbunIeM9ee+zTYAUP1eLPky5wP0XZ7MSLAPxKkwnlzw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <!-- Import manifest.json -->
  <link rel="manifest" href="manifest.json">
  <!-- Make twitter:... embed -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@invalidlenni" />
  <meta name="twitter:title" content="InvalidLenni" />
  <meta name="twitter:description" content="On the website can you find my projects, about me and more." />
  <meta name="twitter:image" content="https://invalidlenni.de/assets/favicon.png" />
  <!-- Make og:... embed -->
  <meta content="InvalidLenni.de" property="og:title" />
  <meta content="On the website can you find my projects, about me and more!" property="og:description" />
  <meta content="https://invalidlenni.de/" property="og:url" />
  <meta content="assets/favicon.png" property="og:image" />
  <meta content="#43B581" data-react-helmet="true" name="theme-color" />  
  <title>InvalidLenni</title> 
</head>

<body>
  <noscript>
    You need to enable JavaScript to run this app.
  </noscript>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid container">
      <a class="navbar-brand" href="https://invalidlenni.de/">
        <img src="../assets/avatar.png" alt="" width="50" height="50" class="rounded-circle"> &nbsp; <span>InvalidLenni</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
            <!-- <span class="fa fa-home"></span>-->            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/partners.html"><i class="fa fa-handshake-o"></i> Partners</a>
          </li>
          <br>
          <li class="nav-item">
            <a class="nav-link" href="https://invalidlenni.de/pages/links.html"><i class="fa fa-link"></i> My linkpage</a>
            <!-- <span class="fa fa-link"></span>-->            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://invalidlenni.de/pages/birthday.html"><i class="fa-solid fa-cake-candles"></i> Birthday Timer</a>
            <!-- <span class="fa fa-link"></span>-->            
          </li>
          <br>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="linksdrop" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="fa fa-link"></i> Links
            </a>
            <ul class="dropdown-menu bgn" aria-labelledby="linksdrop">
              <li><a class="dropdown-item text-muted font-weight-bold" href="./links.html" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> Linksite</a>
              </li>
              <li><a class="dropdown-item text-muted font-weight-bold" href="https://blog.invalidlenni.de/" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> My blog</a>
              </li>
              <li><a class="dropdown-item text-muted font-weight-bold" href="https://dev.to/invalidlenni"><i class="fa fa-external-link" aria-hidden="true"></i> My DEV Blog</a></li>
              <li><a class="dropdown-item text-muted font-weight-bold" href="https://discord.gg/ntJEy5ADMu" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> Lenni's Development Place
                  (Discord Server)</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>
  <div id="root"></div>
  <div class="jumbotron text-center bg-transparent">
    <?php
    if(isset($_POST["submit"])){
      mail("invalidlennii@gmail.com", "Kontaktformular", 'Name: '.$_POST["name"].' Email: '.$_POST["email"].' Priorität: '.$_POST["priorität"].' Nachricht: '.$_POST["message"]);
      ?>
      <h1 style="color: green;">Das Kontaktformular wurde abgesendet!</h1>
      <?php
    }
     ?>
    <form action="index.php" method="post">
      <input type="text" name="name" placeholder="Name" required><br>
      <input type="email" name="email" placeholder="Email" required><br>
      <select name="priorität">
        <option value="hoch">Hoch</option>
        <option value="mittel">Mittel</option>
        <option value="gering">Gering</option>
      </select><br>
      <textarea name="message" rows="8" cols="80" required></textarea><br>
      <button type="submit" name="submit">Absenden</button>
    </form>
    </div>
</div>


    <footer class="mastfoot mb-auto">
      <div class="container-fluid mb-auto">
          <div class="row d-flex justify-content-center">
              <div class="">
                  <p style="font-size: 19px; padding: 0px; margin: 0px;"><a href="https://www.lixoja.xyz/invite"
                          style="text-decoration: none; color: white;">Made with 💖 </a></br>InvalidLenni ©
                      2021 - 2022. All
                      rights reserved. Source code available at <a href="footer-github">Github</a> and the website will be hosted by <a href="https://pages.github.com/">Github (Pages)</a>.</br></p>
                  </div>
          </div>
      </div>
  </footer>
    <script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('../sw.js')
        })
      }
      window.addEventListener('beforeinstallprompt', (e) => {
              e.preventDefault()
      })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/debug.js"></script>
    <script src="../js/sw.js"></script>
    <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
</body>

</html>