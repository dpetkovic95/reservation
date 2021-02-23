<?php include_once 'connections/movie.php'; 
$counter = 1;
$movies = getAllMovies($db);
?>
<head>
        
</head>
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
            <?php while($row=mysqli_fetch_assoc($movies)) { ?>
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
                <?php $counter = $counter + 1;} ?>
            </div>
        </div>
    </div>
</section>