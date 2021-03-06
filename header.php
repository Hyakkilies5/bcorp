<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/dcaac382f0.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="styles/styles.css">
  <title>Escaut Manjikai</title>
</head>

<header>

    <nav class="menu" role="navigation">

      <div class="m-left2">
        <a href="#"><i class="fas fa-shopping-bag"></i></a>
        <a href="#"><i class="far fa-user-circle"></i></a>
      </div>

      <div class="m-left">
        <a class="logo" href="index.php">Eskai</a>
      </div>

      <div class="other-burger">
        <span class="fas fa-bars"></span>
      </div>

      <div class="other-search">
        <span class="fas fa-search"></span>
      </div>

      <div class="m-right">
        <a href="#"><i class="fas fa-shopping-bag"></i></a>
        <a href="#"><i class="far fa-heart"></i></a>
        <a href="#"><i class="far fa-user-circle"></i></a>
        <a href="#"><i class="fas fa-search"></i></a>
      </div>

      <div class="m-other">

        <h3>
          Recherches populaires
        </h3>

        <form action="#" class="search">
          <input type="text" class="search__input" placeholder="Rechercher">
          <i class="fas fa-search"></i>
        </form>

        <div class="other-close">
          <span class="fas fa-times"></span>
        </div>
      </div>

      <div class="m-center">

        <div class="other-return">
          <span class="fas fa-times"></span>
        </div>

        <div class="menu">
          <div class="item">
            <a class="next-btn"><i class="fas fa-angle-right down"></i>Nouveaut??s</a>
            <div class="next-menu">
              <a class="next-item">V??tements Hommes</i></a>
              <a class="next-item">V??tements Femmes</i></a>
              <a class="next-item">V??tements Enfants</i></a>
            </div>
          </div>
          <div class="item">
            <a class="next-btn"><i class="fas fa-angle-right down"></i>Homme</a>
            <div class="next-menu">
              <a class="next-item">Haut</i></a>
              <a class="next-item">Bas</i></a>
              <a class="next-item">Chaussures</i></a>
            </div>
          </div>
          <div class="item">
            <a class="next-btn"><i class="fas fa-angle-right down"></i>Femme</a>
            <div class="next-menu">
              <a class="next-item">Haut</i></a>
              <a class="next-item">Bas</i></a>
              <a class="next-item">Chaussures</i></a>
            </div>
          </div>
          <div class="item">
            <a class="next-btn"><i class="fas fa-angle-right down"></i>Enfant</a>
            <div class="next-menu">
              <a class="next-item">Haut</i></a>
              <a class="next-item">Bas</i></a>
              <a class="next-item">Chaussures</i></a>
            </div>
          </div>
          <div class="item">
            <a class="next-btn"><i class="fas fa-angle-right down"></i>Promos</a>
            <div class="next-menu">
              <a class="next-item">Promotions Hommes</i></a>
              <a class="next-item">Promotions Femmes</i></a>
              <a class="next-item">Promotions Enfants</i></a>
            </div>
          </div>
          <div class="item">
            <a class="next-btn"><i class="fas fa-angle-right down"></i>Collections</a>
            <div class="next-menu">
              <a class="next-item">EkipAz</i></a>
              <a class="next-item">BCorp</i></a>
              <a class="next-item">BDD</i></a>
            </div>
          </div>
        </div>

        <div class="other-infos">

          <h2>
            Devenir membre de l'Eskai.<br>
          </h2>
        </div>
        <button class="btn">Nous rejoindre</button>
        <button class="btn-ourline">S'identifier</button>

        <a href="#" class="m-endpage"><i class="fas fa-shopping-bag"></i> Panier</a>
        <a href="#" class="m-endpage"><i class="far fa-question-circle"></i> Contact</a>

        <h4>
          @Eskai ??? EkipAz & BCorp
        </h4>

      </div>
  </header>

  <script type="text/javascript">

    // this is for the 'side bar menu'

    $('.fa-bars').click(function () {
      $('.m-center').addClass('active');
    });

    $('.fa-times').click(function () {
      $('.m-center').removeClass('active');
    });

    // this is for the 'research navigation'

    $('.fa-search').click(function () {
      $('.m-other').toggleClass('is-open');
    });

    $('.fa-times').click(function () {
      $('.m-other').removeClass('is-open');
    });

    // this is for the 'next-menu'.search

    $('.next-btn').click(function () {
      $(this).next('.next-menu').slideToggle();
      $(this).find('.down').toggleClass('rotate');
    });

    $('.language-btn').click(function () {
      $(this).next('.l-menu').slideToggle();
      $(this).find('.in').toggleClass('rotate');
    });

    $('.footer-btn').click(function () {
      $(this).next('.footer-menu').slideToggle();
    });
  </script>