<?php include_once 'connections/movie.php'; 
    $counter = 1;
    $movies = getAllMovies($db);
?>

<section class="w3l-grids">
    <div class="grids-main py-5">
        <div class="container py-lg-3">
            <div class="headerhny-title">
                <div class="w3l-title-grids">
                    <div class="headerhny-left">
                        <h3 class="hny-title">New Releases</h3>
                    </div>
                    <div class="headerhny-right text-lg-right">
                        <h4><a class="show-title" href="movies.php">Show all</a></h4>
                    </div>
                </div>
            </div>
            <div class="owl-three owl-carousel owl-theme">
            <?php while($row = mysqli_fetch_assoc($movies)) { ?>
                <div class="item vhny-grid">
                    <div class="box16 mb-0">
                        <a href="genre.php">
                            <figure>
                                <img class="img-fluid" src="assets/images/<?php echo $row['image_vertical'];?>" alt="">
                            </figure>
                            <div class="box-content">
                                <h4> <span class="post"><span class="fa fa-clock-o"> </span><?php echo $row['duration'];?></span>
                                    <span class="post fa fa-heart text-right"></span>
                                </h4>
                            </div>
                            <span class="fa fa-play video-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                    <h3 class="grids_sec2_title">
                        <a class="title-gd" href="movies.php"> <?php echo $row['title'];?> </a>
                    </h3>
                    
                    
                    <div class="button-center text-center mt-4">
                        <a href="movie.php?id=<?php echo $row['id']; ?>" class="btn watch-button">Buy ticket</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

    </div>
</section>