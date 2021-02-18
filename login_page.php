

<?php
    require 'header.php';
?>

<br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p>Login to take exam.</p>
                                
                                <form action="login.php" method="POST">
                                   <h2>LOGIN</h2>
                                   <?php if (isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET['error']; ?></p>
                                   <?php } ?>
                                    <div class="form-group">
                                        
                                        <input type="text" name="uname" class="form-control" placeholder="User Name"><br>
                                    </div>
                                    <div class="form-group">
                                        
                                        <input type="password" class="form-control" name="password" placeholder="Password"><br>
                                    </div>
                                    <div class="form-group" align="center">
                                       
                                        
                                        <button type="submit" class="btn btn-primary">Login</button>
         
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
                        </div>
                    </div>
                </div>
           </div>
<br><br><br><br><br>


<?php
    require 'footer.php';
?>


 