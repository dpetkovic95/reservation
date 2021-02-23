<input type="hidden" id="page" value="about">
<?php
include 'connections/server.php';
include 'views/head.php';
include 'views/header.php';
?>
<!doctype html>
<html lang="zxx">

<body>
<input type="hidden" id="page" value="about">
<!--/breadcrumbs -->
<div class="w3l-breadcrumbs">
    <nav id="breadcrumbs" class="breadcrumbs">
        <div class="container page-wrapper">
            <a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">About</span>
        </div>
    </nav>
</div>
<!--//breadcrumbs -->

<div class="container">
    <div class="row">
        <div class="col-sm" style="margin:50px;">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.7245876991483!2d20.498786815497432!3d44.78641987909872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a719098d6fed9%3A0x6c89c009962c520c!2sBeo%20Shopping%20Center!5e0!3m2!1sen!2srs!4v1614009396339!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>          </div>
        <div class="col-sm" style="text-align:center; margin: 150px;">
               <h5> Adress </h5> <p> Vojislava Ilica 141, Beograd 11050. </p>
               <br>
               <h5> Phone number </h5> <p> (+381) 66/921-69-83 </p>
               <br>
               <h5> Work hours</h5> <p> Every day : 09:00am - 00:00pm </p>
        </div>
    </div>
</div>
<?php
include 'views/footer.php';
?>
</body>
</html>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- stats -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<!--/theme-change-->
<script src="assets/js/theme-change.js"></script>
<!-- //theme-change-->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
    $(document).ready(function () {
        $('.owl-team').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            responsiveClass: true,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 2,
                    nav: false
                },
                480: {
                    items: 2,
                    nav: true
                },
                667: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 4,
                    nav: true
                }
            }
        })
    })
</script>
<script>
    $(document).ready(function () {
        $('.owl-three').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 2,
                    nav: false
                },
                480: {
                    items: 2,
                    nav: true
                },
                667: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 6,
                    nav: true
                }
            }
        })
    })
</script>
<!-- //script -->
<!-- for tesimonials carousel slider -->
<script>
    $(document).ready(function () {
        $(".owl-clients").owlCarousel({
            loop: true,
            margin: 40,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                736: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        })
    })
</script>
<!-- //script -->
<!-- script for owlcarousel -->
<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!--//MENU-JS-->
<script src="assets/js/bootstrap.min.js"></script>