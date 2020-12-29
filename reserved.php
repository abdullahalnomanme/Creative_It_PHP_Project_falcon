<?php

require_once("includes/header.php");
require_once("includes/navber.php");
require_once("includes/login_check.php");

?>


<h1 class="text-center">Reserved</h1>


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
    <a href="dashboard.php" class="breadcrumb-item text-success"><strong><i class="fa fa-home"></i> Dashboard</strong></a>
        <span class="breadcrumb-item active">Reserved</span>
    </nav>

      <div class="sl-pagebody">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-lg-6 m-auto">
                    <div class="card">
                        <div class="card-header bg-success text-white text-uppercase text-center">
                        reserved
                        </div>
                        <div class="card-body">
                            <table class="table table-light table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="card-footer text-center bg-success text-white">
                            ---
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