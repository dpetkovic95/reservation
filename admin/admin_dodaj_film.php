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
                            <small>Dodajte novi film</small>
                        </h1>
                        
        <?php dodajFilm();  ?>
 
                        <div class = "col-xs-6">
                        <form action="" method = "post">
                            <div class="form-group">
                            <label for="naziv_filma">Naziv filma</label>
                                <input type="text" class="form-control"  name="naziv_filma">
                                </div>
                           
<!--                         
                            <div class="form-group">
                            <label for="org_naziv_filma">Originalni naziv filma</label>
                                <input type="text" class="form-control" name="org_naziv_filma">
                                </div>
                            
                             -->
                        
                        
                            <div class="form-group">
                            <label for="sadrzaj">Sadrzaj</label>
                                <textarea type="text" class="form-control textarea" rows = '5' name="sadrzaj"></textarea>
                                </div>
                            
                           
                       
                            <div class="form-group">
                            <label for="zanr">Zanr</label>
                                <input type="text" class="form-control" name="zanr">
                                </div>
                            
                            
                        
                            <div class="form-group">
                            <label for="trajanje">Trajanje</label>
                                <input type="text" class="form-control" name="trajanje">
                                </div>
                            
                        
                            <!-- <div class="form-group">
                            <label for="ocena">Ocena</label>
                                <input type="text" class="form-control" name="ocena">
                                </div>
                             -->
                         
                            <!-- <div class="form-group">
                            <label for="glumci">Glumci</label>
                                <textarea type="text" class="form-control" rows = '2' name="glumci"></textarea>
                                </div> -->
                            
                            
<!--                         
                            <div class="form-group">
                            <label for="reziser">Reziser</label>
                                <input type="text" class="form-control" name="reziser">
                                </div> -->
                            
                        
                            <div class="form-group">
                            <label for="slikaa">Slika</label>
                                <input type="text" class="form-control" name="slika">
                                </div>

                                <div class="form-group">
                            <label for="slikaa">Vertikalna slika</label>
                                <input type="text" class="form-control" name="slika_vertikalna">
                                </div>
                            
                            
                        
                            <div class="form-group">
                            <label for="video">Video</label>
                                <input type="text" class="form-control" name="video">
                                </div>
                            <div class="form-group">
                                <input class="btn btn-primary" style = "background-color: #840000; " type="submit" name="submit" value="Dodaj film">
                            </div>
                            </form>
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
