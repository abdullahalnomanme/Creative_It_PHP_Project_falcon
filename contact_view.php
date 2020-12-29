<?php

require_once("includes/header.php");
require_once("includes/navber.php");
// require_once("includes/db.php");
require_once("includes/login_check.php");
require_once("includes/functions.php");

$contact_id = $_GET['contact_id'];
$select_query = "SELECT * FROM contact_messages WHERE id=$contact_id";
$data_from_db = mysqli_query(db(),$select_query);
$data_from_db_after_assoc = mysqli_fetch_assoc($data_from_db);
// print_r($data_from_db_after_assoc);

$update_query = "UPDATE contact_messages SET message_status=2 WHERE id=$contact_id";
mysqli_query(db(),$update_query);

?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
      <a href="dashboard.php" class="breadcrumb-item text-success "><strong><i class="fa fa-home"></i> Dashboard</strong></a>
      <a href="inbox.php" class="breadcrumb-item text-success "><strong><i class="fa fa-envelope"></i> Inbox</strong></a>
        <span class="breadcrumb-item active"> Message details of <strong class="text-uppercase text-success"><?= ($data_from_db_after_assoc['guest_name'] );?></strong> </span>
        <a href="recyclebin.php" class="breadcrumb-item text-success "><strong><i class="fa fa-recycle"></i> Recycle Bin</strong></a>

        <a href="contact_delete.php?contact_id=<?= $contact_id?>&delete_type=single" type="button" class="btn btn-danger ml-auto"><i class="icon ion-trash-b"></i></a>
      </nav>

        <div class="sl-pagebody">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        <div class="card  mb-5">
                            <div class="card-header bg-success text-white text-uppercase">
                                Message
                            </div>
                            <div class="card-body">
                                <p><strong><?php echo ($data_from_db_after_assoc['guest_name'] );?>
                                    </strong> < <?php echo ($data_from_db_after_assoc['guest_email'] );?> >
                                </p>
                                <p><?php echo ($data_from_db_after_assoc['guest_message'] );?></p>
                                
                            </div>
                            <div class="card-footer bg-success text-white text-uppercase">
                                <strong><?php echo ($data_from_db_after_assoc['message_date_time'] );?></strong>
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