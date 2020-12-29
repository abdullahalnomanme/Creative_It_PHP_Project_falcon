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
                        Brand Logo
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Service Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <?php
                                    foreach(falcon_all("Services") as $service):?>
                                    <tr class="<?php 
                                    if($service['services_status']==2):?> 
                                        bg-light 
                                    <?php endif;?>">                                   
                                        <td><?php echo $service['service_title']; ?></td>
                                    </tr>
                                    <?php endforeach;?>
                                     -->
                                     
                                </tbody>
                                
                            </table>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-white text-uppercase text-center">
                        Add Brand
                        </div>
                       
                        <div class="card-body">
                            <?php if(isset($_SESSION['file_missing_error'])):?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $_SESSION['file_missing_error'];?>
                                <?php unset($_SESSION['file_missing_error']);?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            <?php endif; ?>
                            
                          
                            
                            
                            <table class="table table-light table-bordered">
                                <form method="POST" action="brand_post.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Service Title</label>
                                        <input type="file" name="brand-logo" class="form-control" placeholder="Service Title">
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
