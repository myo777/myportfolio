<?php
    require 'header.php';
?>
     

   <br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>SIGN UP</b></h1>
                        
                        <form name="form" method="post" action="signup-check.php" method="POST">
                          
                            
                            <?php if (isset($_GET['error'])) { ?>
                              <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                                <?php if (isset($_GET['success'])) { ?>
                                     <p class="success"><?php echo $_GET['success']; ?></p>
                                <?php } ?>
                            <div class="form-group">
                                
                                
                                <?php if (isset($_GET['name'])) { ?>
                                 <input type="text" 
                                        name="name"
                                        class="form-control" 
                                        placeholder="Name"
                                        value="<?php echo $_GET['name']; ?>"><br>
                            <?php }else{ ?>
                                 <input type="text" 
                                        name="name"
                                        class="form-control"
                                        placeholder="Name"><br>
                            <?php }?>
                            </div>

                            <div class="form-group">
                                <?php if (isset($_GET['uname'])) { ?>
                                 <input type="text" 
                                        name="uname" 
                                        class="form-control"
                                        placeholder="User Name"
                                        value="<?php echo $_GET['uname']; ?>"><br>
                            <?php }else{ ?>
                                 <input type="text" 
                                        name="uname" 
                                        class="form-control"
                                        placeholder="User Name"><br>
                            <?php }?>
                            </div>

                             <!-- Text input-->
                            <div class="form-group">
                              
                              <input type="password" 
                                name="password" 
                                class="form-control"
                               placeholder="Password">
                            </div>

                            <div class="form-group">
                              
                              <input type="password" 
                               name="re_password" 
                               class="form-control"
                               placeholder="Re_Password"><br>
                            </div>
                               
                            
                            <!-- Button -->
                            <div class="form-group">
                              
                              <button type="submit" class="btn btn-primary">Sign Up</button><br>
                             <a href="login.php" class="ca">Already have an account?</a>
                            </div>
                            
     
                            
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
            

<?php
  require 'footer.php';
?>



      
      
      
                  
                  

                  
                  

                  
                  

 
<?php
    require 'footer.php';
?>