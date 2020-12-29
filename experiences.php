<?php

require_once("includes/functions.php");
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
                <div class="col-12 col-md-8 mt-3 ">
                    <div class="card">
                        <div class="card-header bg-success text-white text-uppercase text-center">
                            Edit Your Bio
                        </div>
                        <div class="card-body">

                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Experience Icon</th>
                                        <th>Experience Count</th>
                                        <th>Experience Text</th>                  
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php
                                        $select_query = "SELECT * FROM experiences";
                                        $data_from_db = mysqli_query(db(), $select_query);
                                    ?>

                                    <?php foreach($data_from_db as $experience):?>
                                        <tr> 
                                            <td><?=$experience['experience_id']; ?></td>
                                            <td><i class="<?=$experience['experience_icon']; ?>"><?=$experience['experience_icon']; ?></i></td>                         
                                            <td><?=$experience['experience_count']; ?></td>
                                            <td><?=$experience['experience_text'];?></td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-3 ">
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
                            <form action="experiences_post.php" method="POST">
                                <div class="form-group">
                                    <label for="my-input">Experience Icon</label>
                                    <input id="experience_input_icon" class="form-control" type="text" placeholder="Select you Icon" name="experience_icon" readonly>
                                    <i id="fa fa-certificate" class="experience_icon fa fa-certificate p-1" aria-hidden="true"></i>
                                    <i id="fa fa-thumbs-o-up" class="experience_icon fa fa-thumbs-o-up p-1" aria-hidden="true"></i>
                                    <i id="fa fa-calendar-plus-o" class="experience_icon fa fa-calendar-plus-o p-1" aria-hidden="true"></i>
                                    <i id="fa fa-female" class="experience_icon fa fa-female p-1" aria-hidden="true"></i>
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Experience Count</label>
                                    <input id="experience_count" class="form-control" type="text" placeholder="Enter Number" name="experience_count">
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Experience Text</label>
                                    <input id="experience_text" class="form-control" type="text" placeholder="Enter Text" name="experience_text">
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

            </div>
        </div>
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<?php
require_once("includes/footer.php");
?>

<script>

$(document).ready(function(){
    $(".experience_icon").click(function(){
        var icon_id = $(this).attr('id');
        $("#experience_input_icon").val(icon_id);
    });
});



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