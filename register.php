
<?php 
// Header page link 
require_once("includes/header.php");
// body page 

?>

<div class="content" style="min-height: 525px;">
    <div class="container" style="margin-top: 100px;"> 
        <div class="row">
            <div class="col-md-6 col-12 m-auto">
                <div class="card mt-5">
                        <div class="logo login-logo">
                            <a class="navbar-brand text-white bg-success" style="letter-spacing: 4px;font-family: cursive;font-size: 24px;text-transform: capitalize;font-style: italic;font-weight: 700;left: 50%;top: -130px;width: 130px;height: 130px;margin-left: -65px;line-height: 120px;text-align: center;position: absolute;border-radius: 50%;" href="index.php">
                                <span style="color: gold;text-transform: uppercase;">Fal</span>Con
                            </a>
                        </div>


                    <div class="card-header bg-success text-center">

                    <h5 class="text-uppercase text-white">Register</h5>
                    </div>
                    <div class="card-body">
                        <?php if(isset($_SESSION["email_exist_error"])):?>
                            <div class="alert alert-danger">
                                <?php
                                    echo $_SESSION["email_exist_error"];
                                    unset($_SESSION["email_exist_error"]);
                                ?>
                            </div>
                        <?php endif;?>
                        <div class="card-text">
                            <form action="register_post.php" method="POST">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="<?php
                                       if(isset($_SESSION['name'])){
                                           echo $_SESSION['name'];
                                           unset($_SESSION['name']);
                                       }
                                    ?>">
                                    <small class="text-danger text-uppercase">
                                        <?php 
                                        if(isset($_SESSION['name_error'])){
                                            echo $_SESSION['name_error'];
                                            unset($_SESSION['name_error']);
                                        }
                                       
                                        ?>
                                   </small>

                                    
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="text" class="form-control" id="email" name="email" aria-describedby="email" value="<?php 
                                        if(isset($_SESSION['email'])){
                                            echo $_SESSION['email'];
                                            unset($_SESSION['email']);
                                        }
                                    ?>">
                                    <small class="text-danger text-uppercase">
                                        <?php 
                                        if(isset($_SESSION['email_error1'])){
                                            echo $_SESSION['email_error1'];
                                            unset($_SESSION['email_error1']);
                                        }
                                        if(isset($_SESSION['email_error2'])){
                                            echo $_SESSION['email_error2'];
                                            unset($_SESSION['email_error2']);
                                        }
                                        ?>
                                   </small>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="<?php
                                    if(isset($_SESSION['random_password'])){
                                        echo $_SESSION['random_password'];
                                        // unset($_SESSION['random_password']);
                                    }
                                ?>">
                                    <small class="text-danger text-uppercase">
                                        <?php
                                            if(isset($_SESSION['password_error'])){
                                                echo $_SESSION['password_error'];
                                                unset($_SESSION['password_error']);
                                            }
                                        
                                        ?>

                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="<?php
                                    if(isset($_SESSION['random_password'])){
                                        echo $_SESSION['random_password'];
                                        unset($_SESSION['random_password']);
                                    }
                                ?>">
                                        <small class="text-danger text-uppercase">
                                            <?php

                                                if(isset($_SESSION['confirm_password_error1'])){
                                                    echo $_SESSION['confirm_password_error1'];
                                                    unset($_SESSION['confirm_password_error1']);
                                                }
                                                if(isset($_SESSION['confirm_password_error2'])){
                                                    echo $_SESSION['confirm_password_error2'];
                                                    unset($_SESSION['confirm_password_error2']);
                                                }
                                            
                                            ?>
                                        </small>
                                </div>
                                <button type="submit" class="btn btn-success">Register</button>
                                <a href="generate_password.php" class="btn btn-success ml-auto text-capitalize">Generate a new password</a>
                                <div class="dont text-center">if you have an account <a class="text-success font-weight-bold" href="login.php">Sign In</a></div>
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