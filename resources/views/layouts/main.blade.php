<!DOCTYPE html>
<html lang="en">

@yield('head')

  <body
    data-offset="50"
    data-spy="scroll"
    data-target=".navbar-collapse"
    id="top"
  >
    <!-- PRE LOADER -->
    <!-- MENU -->
    @include('partials.navbar')

    @yield('container')


    <!-- FOOTER -->
    @include('partials.footer')
    <!-- FOOTER -->

    <!-- SCRIPTS -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/custom.js"></script>
    <!-- Your other scripts below this line -->
    <!-- Your other scripts below this line -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function () {
        $(window).scroll(function () {
          var scrollPos = $(document).scrollTop();
          var homeSectionHeight = $("#home").outerHeight();

          if (scrollPos < homeSectionHeight) {
            // When in the Home section, set background to transparent
            $(".navbar").css({
              "background-color": "transparent",
              opacity: 0.8,
            });
          } else {
            // For other sections, set a white background and full opacity
            $(".navbar").css({
              "background-color": "white",
              opacity: 1,
            });
          }
        });
      });
    </script>
  </body>
</html>
