<?php 
// Header page link 
require_once("includes/header.php");
?>

<div class="content" style="min-height: 525px;">
    <div class="container" style="margin-top: 100px;"> 
        <div class="row">
            <div class="col-md-6 col-12 m-auto">
                <div class="card mt-5">
                        <div class="logo login-logo">
                        <div class="logo login-logo">
                            <a class="navbar-brand text-white bg-success" style="letter-spacing: 4px;font-family: cursive;font-size: 24px;text-transform: capitalize;font-style: italic;font-weight: 700;left: 50%;top: -130px;width: 130px;height: 130px;margin-left: -65px;line-height: 120px;text-align: center;position: absolute;border-radius: 50%;" href="index.php">
                                <span style="color: gold;text-transform: uppercase;">Fal</span>Con
                            </a>
                        </div>
                        </div>


                    <div class="card-header bg-success text-center">

                    <h5 class="text-uppercase text-white">Sing In</h5>
                    </div>
                    <div class="card-body"> 
                        <?php if(isset($_SESSION['account_create_success'])): ?>
                            <div class="alert alert-success">
                                <?php
                                    echo $_SESSION['account_create_success'];
                                    unset($_SESSION['account_create_success']);

                                    // login erro 
                                ?>
                            </div>
                        <?php endif;?>

                        
                        <?php if(isset($_SESSION['login_error'])): ?>
                            <div class="alert alert-danger">
                                <?php
                                    echo $_SESSION['login_error'];
                                    unset($_SESSION['login_error']);

                                    // login erro 
                                ?>
                            </div>
                        <?php endif;?>

                        <?php if(isset($_SESSION['deny_error'])): ?>
                            <div class="alert alert-warning">
                                <?php
                                    echo $_SESSION['deny_error'];
                                    unset($_SESSION['deny_error']);

                                    // login erro 
                                ?>
                            </div>
                        <?php endif;?>
                        <div class="card-text">
                            <form action="login_post.php" method="POST">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                                   
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <button type="submit" class="btn btn-success">Login</button>
                                <div class="dont text-center">if you don't have an account <a class="text-success font-weight-bold" href="register.php">Sign up</a></div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


</div>




<?php

// footer content 
require_once("includes/footer.php");


?>