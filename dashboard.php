<?php
require_once("includes/functions.php");
require_once("includes/header.php");
require_once("includes/navber.php");
require_once("includes/login_check.php");


?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item text-success" href="index.php">Falcon</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-header bg-success text-white text-uppercase text-center">
                        <h5 class="text-center">Dashboard</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-light table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <?php  if(isset($_SESSION['login_user_name'])):?>
                                        <th>
                                            <?php
                                                echo "Welcome, ".$_SESSION['login_user_name'];
                                            ?>
                                        </th>
                                        <?php endif;?>
                                    </tr>
                                    <tr>
                                        <?php  if(isset($_SESSION['login_user_email'])):?>
                                        <th>
                                            <?php
                                                echo "Your Email is: ".$_SESSION['login_user_email'];
                                            ?>
                                        </th>
                                        <?php endif;?>
                                    </tr>

                                </thead>
                            </table>
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