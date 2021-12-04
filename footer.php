<footer class="footer">
    <div class="container">
      <div class="footer-start">
        <a href="#">Code promos</a>
        <a href="boutique.php">Nos boutique</a>
        <a href="inscrit.php">Devenir membre</a>
        <a href="#">Réduction pour étudiants</a>
      </div>

      <div class="footer-join">
        <h1>
          Téléchager Eskai sur téléphone.<br>
        </h1>
        <button class="footer-apple">Télécharger sur Apple</button>
        <button class="footer-android">Télécharger sur Android</button>
      </div>

      <div class="footer-middle">
        <a class="footer-btn"><i class="fas fa-plus"></i>Informations</a>
        <div class="footer-menu">
          <a class="footer-item">Statut de commande</i></a>
          <a class="footer-item">Expédition et livraison</i></a>
          <a class="footer-item">Retours</i></a>
          <a class="footer-item">Modes de paiement</i></a>
          <a class="footer-item">Nous contacter</i></a>
          <a class="footer-item">Sponsors - Eskai</i></a>
          <a class="footer-item">FAQ Eskai</i></a>
        </div>
      </div>
      <div class="footer-middle">
        <a class="footer-btn"><i class="fas fa-plus"></i>A PROPOS DE ESKAI</a>
        <div class="footer-menu">
          <a class="footer-item">Actualités</i></a>
          <a class="footer-item">Statut</i></a>
          <a class="footer-item">Hiérarchie</i></a>
          <a class="footer-item">Collaborateur</i></a>
          <a class="footer-item">Boutique</i></a>
        </div>
      </div>

      <div class="footer-icons">
        <a href=""><i class="fab fa-twitter"></i></a>
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-youtube"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
      </div>

      <div class="footer-language">
        <a class="footer-end"><i class="fas fa-map-marker-alt"></i>France</a>

        <h5>
          © 2021 Eskai, Inc. Tous droits réservés
        </h5>
      </div>
    </div>
  </footer>

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