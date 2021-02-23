<?php include_once 'connections/movie.php'; 
$counter = 1;
?>


<section class="w3l-main-slider position-relative" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">

        <?php while($row=mysqli_fetch_assoc($result)) { ?>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view bg bg2" style="background: url(assets/images/<?php echo $row['image']; ?>) no-repeat center;">
                        <div class="banner-info">
                            <h3><?php echo $row['title']; ?></h3>
                            <p><?php echo $row['description']; ?> </span></p>
                            <a href="#small-dialog<?php echo $counter;?>" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
                                <h6>Watch Trailer</h6>
                            </a>
                            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                            <div id="small-dialog<?php echo $counter;?>" class="zoom-anim-dialog mfp-hide">
                                <iframe src="<?php echo $row['trailer']; ?>" allow="autoplay; fullscreen"
                                        allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        <?php $counter = $counter + 1;} ?>
        </div>
    </div>
</section>