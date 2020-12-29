<?php
// require_once("includes/db.php");
require_once("includes/functions.php");

?>


 <!-- page content Or body  -->
<!-- 
 <div class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light">
            <div class="logo">
                <h1><a class="navbar-brand text-white" href="index.php"><span>Fal</span>Con</a></h1>
            </div>
            <div class="login d-block d-lg-none">
                <?php if(isset($_SESSION['login_success'])): ?>
                    <a class="btn btn-danger border-white text-white" href="logout.php">Logout</a>
                <?php else:?>
                    <a class="btn btn-success border-white text-white" href="login.php">Sign in/ Sign Up</a>
                <?php endif;?>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav m-auto text-white text-center">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="index.php">
                                <i class="fa fa-home" aria-hidden="true"></i> Home 
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <?php if(isset($_SESSION['login_success'])): ?>
                            <li class="nav-item active">
                                <a class="nav-link text-white" href="dashboard.php">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard 
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="inbox.php">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> inbox <span class="badge badge-light">5</span>
                                    
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="user_list.php">
                                    <i class="fa fa-users" aria-hidden="true"></i> Users List
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="edit_profile.php">
                                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit PrOfile
                                </a>
                            </li>
                        <?php else:?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="about.php">
                                    <i class="fa fa-user" aria-hidden="true"></i> About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="conatct.php">
                                    <i class="fa fa-id-card-o" aria-hidden="true"></i> contact
                                </a>
                            </li>
                        <?php endif;?>
                    </ul>
                </div>
                <div class="login d-none d-lg-block">
                <?php if(isset($_SESSION['login_success'])): ?>
                    <a class="btn btn-danger border-white text-white" href="logout.php">Logout</a>
                <?php else:?>
                    <a class="btn btn-success border-white text-white" href="login.php">Sign in/ Sign Up</a>
                <?php endif;?>
                </div>
            </nav>
            </div>
        </div>
    </div>
</div> -->



    <!-- ########## START: LEFT PANEL ########## -->
    
    <div class="sl-logo">
        <a href="index.php">
        <span style="color: gold;text-transform: uppercase;">Fal</span>Con</a>
    </div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="dashboard.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="user_list.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">User List</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="inbox.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Inbox <span class="badge badge-success p-1">
            <?php echo falcon_inbox_count(); ?>
            </span></span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="edit_profile.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon icon ion-person tx-24"></i>
            <span class="menu-item-label">Edit Profile</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="service.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon icon ion-briefcase tx-24"></i>
            <span class="menu-item-label">Services</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="experiences.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon icon ion-briefcase tx-24"></i>
            <span class="menu-item-label">Experiences</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="brand.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon icon ion-register tx-24"></i>
            <span class="menu-item-label">Brand</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Pages</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="logout.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon icon ion-power tx-24"></i>
            <span class="menu-item-label">Logout</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>
          <li class="nav-item"><a href="page-signin.html" class="nav-link">Signin Page</a></li>
          <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
          <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
        </ul>
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">
                <?php  
                if(isset($_SESSION['login_user_name'])):
                    echo $_SESSION['login_user_name'];
                    endif;
                ?>
             </span>                     
              <img src="assets/deshboard_assets/img/nomanpro.jpeg" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->
