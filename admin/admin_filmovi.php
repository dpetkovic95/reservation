<?php include "includes/admin_header.php";  ?>
<?php include "includes/functions.php";  ?>


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
   <!--
                <?php //dodajFilm();  ?>
 
                        <div class = "col-xs-6">
                        <form action="" method = "post">
                            <div class="form-group">
                            <label for="naziv_filma">Dodaj film</label>
                                <input type="text" class="form-control" name="naziv_filma">
                                </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Dodaj film">
                            </div>
                            </form>
                        </div> -->
                        
                        
                        <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Naziv filma</th> 
                                    <!-- <th>Originalni naziv</th>  -->
                                    <th>Sadržaj</th> 
                                    <th>Žanr</th> 
                                    <th>Trajanje</th> 
                                    <!-- <th>Ocena</th>  -->
                                    <!-- <th>Glumci</th>  -->
                                    <!-- <th>Režiser</th>  -->
                                    <th>Slika</th> 
                                    <th>Vertikalna slika</th>
                                    <th>Video</th> 
                                </tr>
                            </thead>
         
  
                            
                            
                            <tbody>
                            
                                
<?php   tabelaFilmovi();    ?>
<?php   izbrisiFilm();      ?>         
        
      
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
