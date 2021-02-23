
<?php include_once 'connections/search.php'; 
?>

<!doctype html>
<html lang="zxx">

<?php include_once 'views/head.php'; ?>

<body>
	<!-- header -->
	<?php include_once 'views/header.php'; ?>
	<!-- //header -->
	
	<!--/breadcrumbs -->
	<?php include_once 'views/breadcrumbs_movies.php'; ?>
	<!--//breadcrumbs -->

	<section class="w3l-grids">
    <div class="grids-main py-5">
        <div class="container py-lg-3">
            <div class="headerhny-title">
                <div class="w3l-title-grids">
                    <!-- <div class="headerhny-right text-lg-right">
                        <h4><a class="show-title" href="movie.php">Show all</a></h4>
                    </div> -->
                </div>
            </div>
            <div class="w3l-populohny-grids" style="max-width: 78%; margin-left: 10%;">
            <?php foreach($movies as $row) { ?>
                <div class="item vhny-grid">
                <a href="movie.php?id=<?php echo $row['id']; ?>">
                    <div class="box16">
                            <figure>
                                <img class="img-fluid" src="assets/images/<?php echo $row['image_vertical']; ?>" alt="" style="max-height: 371px; max-width: 265px;">
                            </figure>
                            <div class="box-content">
                                <h3 class="title"><?php echo $row['title']; ?></h3>
                                <h4> <span class="post"><span class="fa fa-clock-o"> </span><?php echo $row['duration']; ?> </span>
                                    <span class="post fa fa-heart text-right"></span>
                                </h4>
                            </div>
                    </div>
                    </a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

	<!-- footer-66 -->
	<?php include_once 'views/footer.php'; ?>
	<!--//footer-66 -->
</body>

</html>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!--/theme-change-->
<script src="assets/js/theme-change.js"></script>
<!-- //theme-change-->
<script src="assets/js/owl.carousel.js"></script>
<script>
	$(document).ready(function () {
		$('.owl-four').owlCarousel({
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
					items: 1,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 2,
					nav: true
				},
				1000: {
					items: 2,
					nav: true
				}
			}
		})
	})
</script>
<script>
	$(document).ready(function () {
		$('.owl-two').owlCarousel({
			loop: true,
			margin: 40,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 2,
					margin: 20,
					nav: true
				},
				1000: {
					items: 3,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
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