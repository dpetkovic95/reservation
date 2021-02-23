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
    
                        <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ime</th> 
                                    <th>Prezime</th> 
                                    <th>Username</th>
                                    <th>Email</th> 
                                    <th>Pristup</th> 
                                     
                                </tr>
                            </thead>
         
                            <tbody>
                            
                              <?php tabelaUsers(); ?> 
                              <?php promeniPristup(); ?>  
       
        
      
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