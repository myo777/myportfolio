<?php
    require 'header.php';
?>
<?php
include_once 'db_conn.php';?>


<br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p>Admin Login</p>

                                
                                <form role="form" method="post" action="admin.php?q=index.php">
                                    <div class="form-group">
                                        
                                        <input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
                                    </div>
                                    <div class="form-group" align="center">
                                       
                                        <input type="submit" name="login" value="Login" class="btn btn-primary" />
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Don't have an account yet? <a href="signup_page.php">Register</a></div>
                        </div>
                    </div>
                </div>
           </div>
<br><br><br><br><br>


<?php
    require 'footer.php';
?>


                 
                  

                  
                  

                  
                  

 