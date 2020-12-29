<?php
require_once("includes/functions.php");
require_once("includes/header.php");
require_once("includes/navber.php");
require_once("includes/login_check.php");

?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a href="dashboard.php" class="breadcrumb-item text-success"><strong><i class="fa fa-home"></i> Dashboard</strong></a>
        <span class="breadcrumb-item active">Services</span>
    </nav>

      <div class="sl-pagebody">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-success text-white text-uppercase text-center">
                        Services
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Service Title</th>
                                        <th>Service Description</th>
                                        <th>Service icon</th>
                                        <th>Action</th>
                                              
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach(falcon_all("Services") as $service):?>
                                    <tr class="<?php 
                                    if($service['services_status']==2):?> 
                                        bg-light 
                                    <?php endif;?>
                                    ">                                   
                                        <td><?php echo $service['id']; ?></td>
                                        <td><?php echo $service['service_title'];?></td>
                                        <td><?=substr($service['service_desc'],0,20); ?></td>
                                        <td><i class="<?php echo $service['service_icon']; ?>"></i></td>
                                        <td>
                                        <?php if($service['services_status']==1):?>
                                            <a href="service_action.php?services_status=<?=$service['services_status']?>&service_id=<?=$service['id']?>" class="btn btn-success">publish</a>
                                        <?php else:?>
                                            <a href="service_action.php?services_status=<?=$service['services_status']?>&service_id=<?=$service['id']?>" class="btn btn-warning">Unpublish</a>
                                        <?php endif;?>
                                        </td>
                                            
                                    </tr>
                                    <?php endforeach;?>
                                    
                                </tbody>
                                
                            </table>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-white text-uppercase text-center">
                        Add Service
                        </div>
                        <div class="card-body">
                            <?php if(isset($_SESSION['service_insert_status'])):?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo $_SESSION['service_insert_status'];?>
                                <?php unset($_SESSION['service_insert_status']);?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            <?php endif;?>
                            
                            
                            <table class="table table-light table-bordered">
                                <form method="POST" action="service_post.php">
                                    <div class="form-group">
                                        <label>Service Title</label>
                                        <input name="service_title" type="text" class="form-control" placeholder="Service Title">
                                    </div>
                                    <div class="form-group">
                                        <label>Service Description</label>
                                        <textarea name="service_desc" class="form-control" id="" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Service Icons</label>
                                        <input type="text" class="form-control" name="service_icon" id="service_iput_icon" readonly>
                                    </div>
                                    <div class="form-group">
                                        <span id="fa fa-home" class="service_icon fal fa-home fa-lg wd-20"></span>
                                        <span id="fab fa-free-code-camp" class="service_icon fa fa-free-code-camp fa-lg wd-30"></span>
                                        <span id="fa fa-desktop" class="service_icon fa fa-desktop fa-lg wd-30"></span>
                                        <span id="fa fa-lightbulb-o" class="service_icon fa fa-lightbulb-o fa-lg wd-20"></span>
                                        <span id="fa fa-edit" class="service_icon fa fa-edit fa-lg wd-20"></span></a>
                                        <span id="fa fa-headphones" class="service_icon fa fa-headphones fa-lg wd-20"></span>
                                        
                                    </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form>
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

<script>
$(document).ready(function(){
    $(".service_icon").click(function(){
        var icon_id = $(this).attr('id');
        $("#service_iput_icon").val(icon_id);
    });
});
</script>