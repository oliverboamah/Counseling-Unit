<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Online Counseling Unit</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('asset/stud/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- chartist CSS -->
    <link href=" <?php echo base_url('asset/stud/plugins/chartist-js/dist/chartist.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/stud/plugins/chartist-js/dist/chartist-init.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/stud/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') ?>" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="<?php echo base_url('asset/stud/plugins/c3-master/c3.min.css') ?> " rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('asset/stud/css/style.css"') ?>"  rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url('asset/stud/css/colors/blue.css') ?>" id="theme" rel="stylesheet">


</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span style="color: white">
                         Online Counseling Unit
                        </span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url($data[0]->image) ?>" alt="" class="profile-pic m-r-10" />
                            <?php echo $data[0]->firstname; ?></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="JavaScript:void(0)"><i class="mdi mdi-account-check"></i>Profile</a></li>
                                <li role="seperator" class="divider"></li>
                                <li><a href="JavaScript:void(0)"><i class="mdi mdi-close-circle-outline"></i>Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="<?php echo base_url('index.php/Welcome/student_appointment') ?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Appointments</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="JavaScript:void(0)" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li>
                       
                    </ul>
                   
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                          <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Student Portal</h3>
                        <ol class="breadcrumb">
                            
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                  
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-7">
                       
                    </div>
                    <div class="col-lg-4 col-md-5">
                     
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-6 col-xlg-3 col-md-5">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="../assets/images/background/profile-bg.jpg" alt="">
                            <div class="card-block little-profile text-center">
                                <div class="pro-img"><img src="../assets/images/users/4.jpg" alt="" /></div><br/>
                                <h4 class="m-b-0">Appointments</h4>
                               
                                <a href="<?php echo base_url('index.php/Welcome/student_appointment') ?>" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Check out appointments</a>
                                
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                     <div class="col-lg-6 col-xlg-3 col-md-5">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="../assets/images/background/profile-bg.jpg" alt="">
                            <div class="card-block little-profile text-center">
                                <div class="pro-img"><img src="../assets/images/users/4.jpg" alt="" /></div><br/>
                                <h4 class="m-b-0">Profile</h4>
                              
                                <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Edit your profile</a>
                               
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 Online Counseling Unit </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('asset/stud/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/stud/plugins/bootstrap/js/tether.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/stud/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>


    <script src="<?php echo base_url('asset/stud/js/jquery.slimscroll.js') ?>"></script>
    <script src="<?php echo base_url('asset/stud/js/waves.js') ?>"></script>
    <script src="<?php echo base_url('asset/stud/js/sidebarmenu.js') ?>"></script>
    <script src="<?php echo base_url('asset/stud/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/stud/js/custom.min.js') ?>"></script>


    <script src="<?php echo base_url('asset/stud/plugins/chartist-js/dist/chartist.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/stud/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/stud/plugins/d3/d3.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/stud/plugins/c3-master/c3.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/stud/js/dashboard1.js') ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
</body>

</html>
