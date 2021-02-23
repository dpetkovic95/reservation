<?php include_once 'connections/server.php'; ?>
<?php include_once 'connections/movie.php'; ?>
<?php if (array_key_exists('id',$_GET) && isset($_GET['id'])) {
    $result= getMovieById($db, $_GET['id']);
    $movie = mysqli_fetch_assoc($result); 
}

$query = "SELECT id, num_of_free_seats, date_time FROM repertoire WHERE {$_GET['id']} = movie_id ORDER BY date_time";
$sql = mysqli_query($db,$query);
$time = [];
$dates = [];
while ($row = mysqli_fetch_assoc($sql)) {
    $dates[] = date('Y/m/d', $row['date_time']);
    $time[] = [
        'id' => $row['id'], 
        'date' => date('Y/m/d', $row['date_time']), 
        'time' => date('H:i', $row['date_time']), 
        'free_seats' =>  $row['num_of_free_seats']];
}   
$dates = array_unique($dates, SORT_STRING);
?>

<!doctype html>
<html lang="zxx">
<?php include_once 'views/head.php'; ?>

<body>
<!-- header -->
<?php include_once 'views/header.php'; ?>
<!-- //header -->
<!--/breadcrumbs -->
<div class="w3l-breadcrumbs">
    <nav id="breadcrumbs" class="breadcrumbs">
        <div class="container page-wrapper">
            <a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">Movie</span>
        </div>
    </nav>
</div>
<!--//breadcrumbs -->

<div class="container py-lg-4">
    <div class="row ab-grids-sec align-items-center">
        <div class="col-lg-6 ab-right">
            <img class="img-fluid" src="assets/images/<?php echo $movie['image_vertical'];?>" style="max-height: 500px; max-width: 400px:">
        </div>
        <div class="col-lg-6 ab-left pl-lg-4 mt-lg-0 mt-5" class="title-box">
            <h3 class="hny-title"><?php echo$movie['title']; ?></h3>
            <p class="mt-3"><?php echo $movie['description']; ?></p>
            <!-- <div class="ready-more mt-4">
                <a href="#" class="btn read-button">Read More <span class="fa fa-angle-double-right ml-2" aria-hidden="true"></span></a>
            </div> -->
            <br>
            <div class="info">
                <h5>Duration:</h5> <p><?php echo $movie['duration'];?></p>
            </div>
            <div class="info-2">
                <h5>Genre:</h5> <p><?php echo $movie['genre'];?></p>
            </div>
        </div>
    </div>
<br><br>
<!--<div class="button-section">
    <div class="button-center text-center mt-4">
        <a action ="connections/book.php" href="views/book-form.php" class="btn buy-button">Book ticket</a>
    </div>-->
    
    <div class="button-section" style="width: 35%">
    
    <div class="warning-msg" style="display: none" id = "book-warning-btn" >
    <i class="fa fa-warning">You must be logged in to book a ticket. <a class="fa" style="text-dectoration: underline;" href="/reservation/login.php">Click here to log in.</a></i>
   </div>
   
    <form class="col-xs-6 add_projections"> 
         <div id="cela-forma" class="form-group" style="display : none">
                 <label for="add_projection">Select available date :</label>
                        <select class="add_projection form-control" id="date_selection" name="add_projection">
                        <option class="item_date" value="" disabled selected></option> 
                        <?php foreach($dates as $date){ ?>
                          <option class="item_date" value="<?php echo $date;?>"><?php echo $date; ?></option>  
                          <?php } ?>
                        </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name ="add_datum" type="datetime-local" id = "time_selection" style="display: none;">
                        <?php foreach($time as $t){ ?>
                          <option class="item_date" value="<?php echo $t['id'];?>"><?php echo $t['time']; ?></option>  
                        <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input id="num_of_seats" placeholder="Number of tickets" name="num_of_seats" type="number" 
                            style="display: none;" class="form-control" min="1" max="10" oninvalid="this.setCustomValidity('Number of free seats is '+ this.max)"></input>
                        </div>
                            <div class="form-group">
                                <input id="book-btn" class="btn btn-primary" style = "background-color: #840000; display: none;" type="button" name="submit" value="Book ticket">
                            </div>
                        </form> </div>
        <div class="button-section" style="width: 35%">
            <div class="success-msg" style="display: none;" id="reservation_success">
                <i class="fa fa-check"> Successful reservation.</i>
            </div>
        </div>
        <div class="button-section" style="width: 35%">
            <div class="error-msg" style="display: none;" id="reservation_error">
                <i class="fa  fa-times-circle"> Error during reservation. Please try again.</i>
            </div>
        </div>
        <div class="button-section" style="width: 35%">
            <div class="warning-msg" style="display: none;" id="reservation_warning">
                <i id="reservation_warning_i" class="fa fa-warning"></i>
            </div>
        </div>
<br><br>
</div>

    <!-- footer-66 -->
    <?php include_once 'views/footer.php'?>
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

<script>

    var times = '<?php echo json_encode($time, TRUE);?>',
    userId = '<?php echo $_SESSION['id'];?>',
    btn = document.getElementById('book-btn'),
    

    times = JSON.parse(times);
    if (userId) {
        var dates = document.getElementById("date_selection"),
        ticketInput = document.getElementById("num_of_seats"),
        timeSelection = document.getElementById("time_selection");

        document.getElementById('cela-forma').style.display = 'block';

        dates.addEventListener('change', function(){
        setPage();
        removeAllChildNodes(timeSelection);
        timeSelection.style.display = 'block';
        
            for(var i = 0; i < times.length; i++){
                if(times[i]['date'] === dates.value){
                    var opt = document.createElement("option");
                    opt.value = times[i]['id'];
                    opt.text = times[i]['time'];
                    timeSelection.add(opt, null);
            }  
           
        }
        timeSelection.addEventListener('click', function(){
        setPage();    
        btn.style.display = 'block';
        ticketInput.style.display = 'block';
        let obj = times.find(o => o.id === timeSelection.value);
        ticketInput.max = obj.free_seats;
        });        
    });
        btn.addEventListener('click', function(){
            if(ticketInput.value < 1 || ticketInput.value > parseInt(ticketInput.max)){
                setPage();
                var warning = document.getElementById("reservation_warning"), 
                warningText = document.getElementById("reservation_warning_i"); 
                warning.style.display = 'block';
                warningText.innerText = " Number of free sits is "+ ticketInput.max;
                return;
            }
            var data = {
                "user_id": userId,
                "repertoar_id": timeSelection.value,
                "broj_karata": ticketInput.value
            };

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var response = JSON.parse(this.responseText);
                    if(response.success) {
                        setPage();
                        document.getElementById("reservation_success").style.display = "block";
                        times[getKey(times, timeSelection.value)].free_seats = response.free_seats;
                        ticketInput.max = response.free_seats;
                        
                    }else  {
                        setPage();
                        document.getElementById("reservation_error").style.display = "block";
                    } 
                }
            };

            xhttp.open("POST", "connections/save_reservation.php", true);
            xhttp.setRequestHeader("Content-type", "json");
            xhttp.send(JSON.stringify(data));
        });

    }else {
        document.getElementById('book-warning-btn').style.display = 'block';
    }

    function removeAllChildNodes(parent) {
        while (parent.firstChild) {
            parent.removeChild(parent.firstChild);
    }
    }

    function setPage(){
        document.getElementById("reservation_success").style.display = "none";
        document.getElementById("reservation_error").style.display = "none";
        document.getElementById("reservation_warning").style.display = "none"; 
    }

    function getKey(array, id){
        for(i = 0; i < array.length; i++){
            if(array[i].id == id){
                return i;
            }
        }

        return null;
    }

</script>
