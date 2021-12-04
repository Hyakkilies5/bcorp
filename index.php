<?php require 'header.php'; ?>

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

<?php require 'footer.php'; ?>