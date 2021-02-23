<?php include "includes/admin_header.php";  ?>
<?php include "includes/functions.php";  ?>
<?php dodajProjekciju();?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" style = "background-color: #840000;" role="navigation">
            
            <?php include "includes/navbar.php"; ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           
            <?php include "includes/sidebar.php"; ?>
            
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Dobrodošli</small>
                        </h1>

                        
                       <form class="col-xs-6 add_projections"> 
                       <div class="form-group">
                       <label for="add_projection">Izaberi film :</label>

                        <select class="add_projection form-control" id="add_projection" name="add_projection">
                        <?php 
                        $sql = getIdIIme();
                        while ($row = mysqli_fetch_assoc($sql)) {
                           ?>
                          <option class = "item" value=<?php echo $row['id']; ?>><?php echo $row['title']; ?></option>  
                          
                        <?php } ?>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="add_datum"> Izaberi datum : </label>
                        
                            <input class="form-control" name ="add_datum" type="datetime-local" id = "add_datum">
                        </div>
                            <div class="form-group">
                                <input id="add-projection-btn" class="btn btn-primary" style = "background-color: #840000; " type="submit" name="submit" value="Dodaj projekciju">
                            </div>
                        </form>

<script>

document.getElementById('add-projection-btn').addEventListener('click', function(){
var datum = document.getElementById('add_datum').value;
var movie = document.getElementById('add_projection').value;
var json = {"date": datum, "movie": movie};

var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    //  alert('Uspesno dodavanje.');
    }
  };
  xhttp.open("POST", "admin_add_projection.php", true);
  xhttp.send(JSON.stringify(json));
});

</script>
                        </form>  
                            <tbody> 
                
                            </tbody>
                            
                            
                        </table>
                            
                        </div>
                        
                        
                        
                       <!-- <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>-->
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
