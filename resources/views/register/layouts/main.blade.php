<!DOCTYPE html>
<html lang="en">

<head>
    <title>Unit Layanan Psikologi - UIN Bandung</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Tooplate" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/animate.css" />
    <link rel="stylesheet" href="../css/owl.carousel.css" />
    <link rel="stylesheet" href="../css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="../https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" />
    <link rel="stylesheet" href="../assets/style.css" />
    <!-- Link to the external CSS file -->
    <script src="../https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../css/tooplate-style.css" />
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    @yield('container')

</body>
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
    $(document).ready(function() {
        $(window).scroll(function() {
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
