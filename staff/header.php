<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LMS </title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-book"></i> <span>LMS</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_info" style="color: white">
                        <span style="color: ghostwhite">Welcome,</span><br>
                        <h4><?php echo $_SESSION["staff"] ?></h4>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="display_staff_info.php"><i class="fa fa-user"></i> Staff Info <span class="fa fa-chevron-down"></span></a>

                            </li>

                            <li><a href="display_user_info.php"><i class="fa fa-group"></i> Member Info <span class="fa fa-chevron-down"></span></a>

                            </li>

                            <li><a href="address.php"><i class="fa fa-map-marker"></i> Member Address <span class="fa fa-chevron-down"></span></a>

                            </li>

                            <li><a href="display_books.php"><i class="fa fa-book"></i> Books <span
                                        class="fa fa-chevron-down"></span></a>

                            </li>

                            <li><a href="add_book.php"><i class="fa fa-plus"></i> Add Books <span
                                            class="fa fa-chevron-down"></span></a>

                            </li>

                            <li><a href="issue_books.php"><i class="fa fa-table"></i> Issue Books <span class="fa fa-chevron-down"></span></a>

                            </li>

                            <li><a href="return_books.php"><i class="fa fa-list-alt"></i> Return Books <span class="fa fa-chevron-down"></span></a>

                            </li>

                            <li><a href="display_log_info.php"><i class="fa fa-list"></i> Log <span class="fa fa-chevron-down"></span></a>

                            </li>


                        </ul>
                    </div>


                </div>

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">

                                <span style="font-size: 15px" ><?php echo $_SESSION["staff"] ?></span>

                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->