<?php

require_once("includes/header.php");
require_once("includes/navber.php");
require_once("includes/functions.php");
require_once("includes/login_check.php");



// $select_query = "SELECT id, name, email FROM users";
// $data_from_db = mysqli_query($db_connect, $select_query);

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
        <span class="breadcrumb-item active">User List</span>
      </nav>
      <div class="sl-pagebody">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-lg-9 m-auto">
                    <div class="card mb-5">
                        <div class="card-header bg-success text-white text-uppercase text-center">
                        <h2>Users List</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Email</th>         
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach(falcon_all("users") as $users_info):?>
                                    <tr>                                   
                                        <td><?php echo $users_info['id']; ?></td>
                                        <td><?php echo $users_info['name'];?></td>
                                        <td><?php echo $users_info['email']; ?></td>
                                    </tr>
                                    <?php endforeach;?>
                                    
                                </tbody>
                                
                            </table>
                        </div>
                      
                        <div class="card-footer text-center bg-success text-white">
                        <!-- <h4>Total Users: <?= falcon_all("users")?></h4> -->
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