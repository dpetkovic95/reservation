

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php include_once 'connections/server.php'; ?>
<!doctype html>
<html lang="zxx">

<?php include_once 'views/head.php' ?>

<body>
 <!-- header -->
 <?php include_once 'views/header.php'?>
 <!-- //header -->
 <!--/breadcrumbs -->
 <?php include_once 'views/breadcrumbs_login.php' ?>
 <!--//breadcrumbs -->
 <!--/login section-->
 <?php include_once 'views/login_section.php' ?>
 <!--//login section-->
 <!-- footer-66 -->
 <?php include_once 'views/footer.php' ?>
 <!--//footer-66 -->
 </body>

</html>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- Template JavaScript -->
<!--/theme-change-->
<script src="assets/js/theme-change.js"></script>
<!-- //theme-change-->
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