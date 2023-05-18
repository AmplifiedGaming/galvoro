<?php
session_start();
// Redirect to login page if not logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Display the dashboard content
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
   <title>Galvoro Games</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"
      integrity="sha384-Ft/vb48LwsAEtgltj7o+6vtS2esTU9PCpDqcXs4OCVQFZu5BqprHtUCZ4kjK+bpE" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
	  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
   </script>
   <link rel="stylesheet" href="https://cdn.keyauth.cc/v2/keyauth.css">
   <link rel="shortcut icon" type="image/png" href="/favicon.png">
   <script type="text/javascript" src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.sync.bootstrap.min.js" async></script>
</head>
<style>
  a img {
    border-radius: 25px;
  }
</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark mt-3">
      <div class="container">
         <a class="navbar-brand">
            <img
               src="/logo.png"
               width="400" height="50" class="" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
               </li>
                <li class="nav-item">
                  <a class="nav-link" href="/accounts/dashboard.php">Dashboard</a>
               </li>
               <div class="dropdown show">
                  <a class="nav-link dropdown-toggle" href="https://discord.gg/keyauth" target="_blank" id="dropdownMenuLink" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                     Support
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <a class="dropdown-item" href="mailto:support@amplifiedcompajy.ml" target="_blank">Support Email</a>
                     <a class="dropdown-item" href="https://discord.gg/ESqfMjsG4h" target="_blank">Discord</a>
                  </div>
               </div>
            </ul>
            <a href="/accounts/logout.php"><button class="btn btn-login text-light"><i class="fad fa-sign-in-alt"></i> Logout</button></a>
         </div>
      </div>
   </nav>
   <div class="container">
      <section class="top-section">
         <div class="row align-items-center">
            <p>
              <a href="/games/1v1.lol.php"><img width="100px" height="100px" src="/images/1v1.lol.png"></a>
              <a href="/games/basket-bros.php"><img width="100px" height="100px" src="/images/basket-bros.png"></a>
              <a href="/games/diep.io.php"><img width="100px" height="100px" src="/images/diep.io.png"></a>
              <a href="/games/evoworld.php"><img width="100px" height="100px" src="/images/evoworld.png"></a>
              <a href="/games/football-legends.php"><img width="100px" height="100px" src="/images/football-legends.png"></a>
              <a href="/games/monkey-mart.php"><img width="100px" height="100px" src="/images/monkey-mart.png"></a>
              <a href="/games/rgbidle.php"><img width="100px" height="100px" src="/images/rgbidle.png"></a>
              <a href="/games/rooftop-snipers.php"><img width="100px" height="100px" src="/images/rooftop-snipers.png"></a>
              <a href="/games/run-three.php"><img width="100px" height="100px" src="/images/run3.png"></a>
              <a href="/games/slimy-platforms.php"><img width="100px" height="100px" src="/images/slimy-platforms.png"></a>
         </p>
         </div>
      </section>
   </div>
</body>
</html>
