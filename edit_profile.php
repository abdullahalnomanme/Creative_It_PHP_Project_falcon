<?php

require_once("includes/header.php");
require_once("includes/navber.php");
require_once("includes/login_check.php");

?>


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
      <a href="dashboard.php" class="breadcrumb-item text-success "><strong><i class="fa fa-home"></i> Dashboard</strong></a>
        <span class="breadcrumb-item active">EDIT PROFILE</span>
      </nav>
      <div class="sl-pagebody">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-md-8 mt-3">
                    <div class="card">
                        <div class="card-header bg-success text-white text-uppercase text-center">
                            Edit Your Bio
                        </div>
                        <div class="card-body">
                            <?php if(isset($_SESSION['Change_name_status'])): ?>
                            <div class="alert alert-success">
                                <?php 
                                        echo $_SESSION['Change_name_status'];  
                                        unset($_SESSION['Change_name_status']);
                                    
                                    ?>
                            </div>
                            <?php endif;?>
                            <form action="edit_profile_post.php" method="POST">
                                <div class="form-group">
                                    <label for="my-input">Your Name</label>
                                    <input id="name" class="form-control" type="text" placeholder="Enter Your New Name" value="<?php echo $_SESSION['login_user_name'];?>" name="name">
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="my-input">Your bio</label>
                                    <textarea name="users_bio" id="users_bio" class="form-control" cols="30" rows="4" placeholder="Enter Your bio"><?php echo $_SESSION['users_bio'];?></textarea>
                                </div>
                                <div class="form-group">
                                    <input id="email" class="form-control" type="hidden" placeholder="Enter Your New email"
                                        value="<?php echo $_SESSION['login_user_email'];?>" name="email">
                                </div>
                                <button class="btn btn-success mt-3" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-3">
                    <div class="card">
                        <div class="card-header bg-success text-white text-uppercase text-center">
                           Add Skills
                        </div>
                        <div class="card-body">
                            <form action="edit_profile_skills_post.php" method="POST">
                                <div class="form-group">
                                    <input id="name" class="form-control" type="hidden" placeholder="Enter Your New Name"
                                        value="<?php echo $_SESSION['login_user_name'];?>" name="name">
                                </div>
                                <div class="form-group">
                                    <input id="email" class="form-control" type="hidden" placeholder="Enter Your New email"
                                        value="<?php echo $_SESSION['login_user_email'];?>" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Your Skille Tilte</label>
                                    <input id="skills_title" class="form-control" type="text" placeholder="Enter Your New Name" name="skills_title" value="<?php echo $_SESSION['skills_title'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Your Skille Year</label>
                                    <input id="skills_years" class="form-control" type="text" placeholder="Enter Your skills Year" name="skills_years">
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Your Skille Count Text</label>
                                    <input id="skills_progress_text" class="form-control" type="text" placeholder="Enter Your skills Count Text" name="skills_progress_text">
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Your Skille Count Percent of 100%</label>
                                    <input id="skills_progress_count" class="form-control" type="text" placeholder="Enter Your skills Count Number" name="skills_progress_count">
                                </div>
                                <button class="btn btn-success mt-3" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-success text-white text-uppercase text-center">
                            Edit Your Password
                        </div>
                        <div class="card-body">
                            <?php if(isset($_SESSION['change_password_status'])): ?>
                            <div class="alert alert-success">
                                <?php 
                                        echo $_SESSION['change_password_status'];  
                                        unset($_SESSION['change_password_status']);
                                    
                                    ?>
                            </div>
                            <?php endif;?>
                            <?php if(isset($_SESSION['old_password_error'])): ?>
                            <div class="alert alert-danger">
                                <?php
                                            echo  $_SESSION['old_password_error'];
                                            unset( $_SESSION['old_password_error']);

                                            // login erro 
                                        ?>
                            </div>
                            <?php endif;?>
                            <form action="edit_password_post.php" method="POST">
                                <div class="form-group">
                                    <label for="my-input">Old Password</label>
                                    <input id="myInput" class="form-control" type="password"
                                        placeholder="Enter Your Old Password" name="old_password" value="">
                                    <!-- An element to toggle between password visibility -->
                                    <input type="checkbox" onclick="myFunction()"> Show Password
                                </div>
                                <div class="form-group">
                                    <label for="my-input">New Password</label>
                                    <input id="password" class="form-control" type="text" placeholder="Enter Your New Password"
                                        name="new_password">
                                </div>
                                <div class="form-group">
                                    <input id="email" class="form-control" type="hidden" placeholder="Enter Your New email"
                                        value="<?php echo $_SESSION['login_user_email'];?>" name="email">
                                </div>
                                <?php if(isset($_SESSION['new_password_error'])):?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?php 
                                        echo $_SESSION['new_password_error'];
                                        unset($_SESSION['new_password_error']);
                                        ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif;?>
                                <button class="btn btn-success mt-" type="submit">Change Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<?php
require_once("includes/footer.php");
?>

<script>
// my custom js 
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>