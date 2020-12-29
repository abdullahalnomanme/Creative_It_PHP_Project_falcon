<?php
require_once("includes/functions.php");
require_once("includes/header.php");
require_once("includes/navber.php");
// require_once("includes/db.php");
require_once("includes/login_check.php");


// falcon_all("contact_messages");

// print_r($data_from_db);
// echo "<br/>";
// echo $data_from_db->num_rows;

// $data_converted_into_assoc = mysqli_fetch_assoc($data_from_db);
// print_r($data_converted_into_assoc);

// foreach($data_from_db as $value){
//     print_r($value);
// }

?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a href="dashboard.php" class="breadcrumb-item text-success"><strong><i class="fa fa-home"></i> Dashboard</strong></a>
        <a href="inbox.php" class="breadcrumb-item text-success"><strong><i class="fa fa-envelope"></i> Inbox</strong></a>
        <span class="breadcrumb-item active">Recycle Bin</span>
    </nav>

    <?php

    if(isset($_GET['contact_id'])){
        $contact_id = $_GET['contact_id'];
        $select_message_query = "UPDATE contact_messages SET delete_status=2 WHERE id=$contact_id";
        mysqli_query(db(), $select_message_query);
    }

    
    ?>

    <div class="sl-pagebody">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-5">
                        <div class="card-header bg-success text-white">
                            <form action="contact_mark_delete.php" method="POST">
                                <button type="submit" class="btn btn-warning p-2 border-0 pull-left"><i class="fa fa-check"> Mark Delete</i></button>   
                            
                            <span class="pull-left text-uppercase p-2" >Trash Message</span>
                            <a href="contact_delete.php?delete_type=all" class="text-white bg-danger p-2 pull-right"><i class="fa fa-trash"></i> Delete All</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Check</th>
                                        <th>Serial No</th>
                                        <th>Guest Name</th>
                                        <th>Guest Email</th>
                                        <!-- <th>Guest Message </th> -->
                                        <th>Guest Date </th>
                                        <th>Status </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $serial_no = 1;
                                    foreach(falcon_all('contact_messages') as $contact_message):?>
                                    <?php if($contact_message['delete_status'] == 2):?>
                                    <tr class="<?php if($contact_message['message_status'] == 2):?>
                                               bg-light
                                            <?php else:?>
                                            <?php endif;?>">
                                        <td><input type="checkbox" name="message_check[]" id="" value="<?=$contact_message['id'] ?>"></td>
                                        <td><?php echo $serial_no++; ?></td>
                                        <td><?php echo $contact_message['guest_name'];?></td>
                                        <td><?php echo $contact_message['guest_email']; ?></td>
                                        <!-- <td><?php echo $contact_message['guest_message']; ?></td> -->
                                        <td>
                                            <?php 
                                                $dateandtime = strtotime($contact_message['message_date_time']);
                                                echo date('d M, Y h:i:s A', $dateandtime);
                                            ?>
                                        </td>
                                        <td> 
                                            <?php if($contact_message['message_status'] == 1):?>
                                                <span class="badge badge_success bg-success">Unread</span>
                                            <?php else:?>
                                                <span class="badge bg-dark">Read</span>
                                            <?php endif;?>
                                            
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <!-- <button type="button" class="btn btn-success">View</button> -->
                                                <a title="View This Message" href="contact_view.php?contact_id=<?= $contact_message['id']?>" type="button" class="btn btn-success"><i class="icon ion-eye"></i></a>

                                                <a href="inbox.php?contact_id=<?= $contact_message['id']?>&delete_type=single" type="button" class="btn btn-danger"><i class="fa fa-recycle"></i></a>  
                                                <a href="contact_delete.php?contact_id=<?= $contact_message['id']?>&delete_type=single" type="button" class="btn btn-danger"><i class="icon ion-trash-b"></i></a>  

                                                <!-- <a href="contact_delete.php?contact_id=<?= $contact_message['id']?>&delete_type=single" type="button" class="btn btn-danger"><i class="icon ion-trash-b"></i></a>      -->

                                                <?php if($contact_message['message_status'] == 2):?>
                                                    <a title="Make Unread" href="trash_contact_unread.php?contact_id=<?= $contact_message['id']?>" type="button" class="btn btn-warning"><i class="fa fa-eye-slash"></i></a>
                                                <?php endif;?>
                                            </div>
                                        </td>
                                    </tr>
                                        <?php endif;?>
                                    <?php endforeach;?>

                                </tbody>

                            </table>
                            
                        </div>
                        <div class="card-footer text-center bg-success text-white">
                            <?php
                                $select_message_query = "SELECT * FROM contact_messages WHERE delete_status =2";
                                $contact_messages = mysqli_query(db(),$select_message_query);
                                if($contact_messages->num_rows == 0): ?>
                                    <h6 class="text-danger"> No Date show </h6>
                                <?php else: ?>
                                    <h6>Total Messages: <?=$contact_messages->num_rows;?></h6>
                            <?php endif;?>
                        </div>
                        </form>
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