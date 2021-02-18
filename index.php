<?php
  require 'header.php';
?>
<?php include "db_conn.php"; ?>

 <header>
    <div class="container">
      <div class="heading-wrapper">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="info">
              <i class="icon ion-ios-location-outline"></i>
              <div class="right-area">
                <h5>Bellevoysstraat 216</h5>
                <h5>3021 TM, Rotterdam</h5>
              </div><!-- right-area -->
            </div><!-- info -->
          </div><!-- col-sm-4 -->
          
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="info">
              <i class="icon ion-ios-telephone-outline"></i>
              <div class="right-area">
                <h5>0614411560</h5>
                <h6>MON - FRI,8AM - 7PM</h6>
              </div><!-- right-area -->
            </div><!-- info -->
          </div><!-- col-sm-4 -->
          
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="info">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <div class="right-area">
                <h5>myolwin039@gmailcom</h5>
                <p><a href="admin_login.php" class="login-btn">Login</a></p>
              </div><!-- right-area -->
            </div><!-- info -->
          </div><!-- col-sm-4 -->
        </div><!-- row -->
      </div><!-- heading-wrapper -->
      
      <a class="downlad-btn" href="images/CV-MyoLwin.pdf" download>Download CV</a>
    </div><!-- container -->
  </header>
  
  <section class="intro-section">
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-md-10 col-lg-8">
          <div class="intro">
            <div class="profile-img">
              <a href="images/profile-1-250x250.jpg" download>
                  <img src="images/profile-1-250x250.jpg" alt="">
              </a>
              
            </div>
            <h2><b>MYO LWIN</b></h2>
               





            <h4 class="font-yellow">FULL STACK WEB-DEVELOPER</h4>
            <ul class="information margin-tb-30">
              <li><b>BORN : </b>Dec 29, 1986</li>
              <li><b>EMAIL : </b>myolwin039@gmail.com</li>
              <li><b>MARITAL STATUS : </b>Married</li>
            </ul>
            <ul class="social-icons">
              <li><a href="https://github.com/myo777"><i class="ion-social-github"></i></a></li>
              <li><a href="https://www.linkedin.com/in
               /myo-lwin-a29a8a116/"><i class="ion-social-linkedin"></i></a></li>
              <li><a href="#"><i class="ion-social-instagram"></i></a></li>
              <li><a href="#"><i class="ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="ion-social-twitter"></i></a></li>
            </ul>
          </div><!-- intro -->
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- intro-section -->
  
  <section class="portfolio-section section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="heading">
            <h3><b>Portfolio</b></h3>
            <h6 class="font-lite-black"><b>MY WORK</b></h6>
          </div>
        </div><!-- col-sm-4 -->
        <div class="col-sm-8">
          <div class="portfolioFilter clearfix margin-b-80">
            <a href="#" data-filter="*" class="current"><b>ALL</b></a>
            <a href="#" data-filter=".web-design"><b>PHP</b></a>
            <a href="#" data-filter=".python"><b>Python</b></a>
            <a href="#" data-filter=".javascript"><b>Javascript</b></a>
            <a href="#" data-filter=".react"><b>React</b></a>
            <a href="#" data-filter=".data"><b>Data Analyst</b></a>
             <a href="#" data-filter=".css"><b>CSS</b></a>
          </div><!-- portfolioFilter -->
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
    
    <div class="portfolioContainer">
      <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
             
              <div class="p-item">
              <p class="code"><a href="<?=$images['title']?>"><i class="ion-social-github"></i></a> Source Code<span class="link"><a href="<?=$images['gogle']?>"><i class="ion-social-chrome"></i></a>link</span></p>
              <a href="uploads/<?=$images['image_url']?>" data-fluidbox>
              <img src="uploads/<?=$images['image_url']?>"></a>
             </div>
              
    <?php } }?>


    <?php 
          $sql = "SELECT * FROM images WHERE category='PHP' ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
             
              <div class="p-item web-design">
              <p class="code"><a href="<?=$images['title']?>"><i class="ion-social-github"></i></a> Source Code<span class="link"><a href="<?=$images['gogle']?>"><i class="ion-social-chrome"></i></a>link</span></p>
              <a href="uploads/<?=$images['image_url']?>" data-fluidbox>
              <img src="uploads/<?=$images['image_url']?>"></a>
             </div>
              
    <?php } }?>

    <?php 
          $sql = "SELECT * FROM images WHERE category='Python' ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
             
              <div class="p-item python">
              <p class="code"><a href="<?=$images['title']?>"><i class="ion-social-github"></i></a> Source Code<span class="link"><a href="<?=$images['gogle']?>"><i class="ion-social-chrome"></i></a>link</span></p>
              <a href="uploads/<?=$images['image_url']?>" data-fluidbox>
              <img src="uploads/<?=$images['image_url']?>"></a>
             </div>
              
    <?php } }?>

    <?php 
          $sql = "SELECT * FROM images WHERE category='Javascript' ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
             
              <div class="p-item javascript">
              <p class="code"><a href="<?=$images['title']?>"><i class="ion-social-github"></i></a> Source Code<span class="link"><a href="<?=$images['gogle']?>"><i class="ion-social-chrome"></i></a>link</span></p>
              <a href="uploads/<?=$images['image_url']?>" data-fluidbox>
              <img src="uploads/<?=$images['image_url']?>"></a>
             </div>
              
    <?php } }?>

    <?php 
          $sql = "SELECT * FROM images WHERE category='React' ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
             
              <div class="p-item react">
              <p class="code"><a href="<?=$images['title']?>"><i class="ion-social-github"></i></a> Source Code<span class="link"><a href="<?=$images['gogle']?>"><i class="ion-social-chrome"></i></a>link</span></p>

              <a href="uploads/<?=$images['image_url']?>" data-fluidbox>
              <img src="uploads/<?=$images['image_url']?>"></a>
             </div>
              
    <?php } }?>

    <?php 
          $sql = "SELECT * FROM images WHERE category='Data_Analyst' ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
             
              <div class="p-item data">
              <p class="code"><a href="<?=$images['title']?>"><i class="ion-social-github"></i></a> Source Code<span class="link"><a href="<?=$images['gogle']?>"><i class="ion-social-chrome"></i></a>link</span></p>
              <a href="uploads/<?=$images['image_url']?>" data-fluidbox>
              <img src="uploads/<?=$images['image_url']?>"></a>
             </div>
              
    <?php } }?>

    <?php 
          $sql = "SELECT * FROM images WHERE category='CSS' ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
             
              <div class="p-item css">
              <p class="code"><a href="<?=$images['title']?>"><i class="ion-social-github"></i></a> Source Code<span class="link"><a href="<?=$images['gogle']?>"><i class="ion-social-chrome"></i></a>link</span></p>
              <a href="uploads/<?=$images['image_url']?>" data-fluidbox>
              <img src="uploads/<?=$images['image_url']?>"></a>
             </div>
              
    <?php } }?>

    </div><!-- portfolioContainer -->
    
  </section><!-- portfolio-section -->
  
  
  <section class="about-section section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="heading">
            <h3><b>About me</b></h3>
            <h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
          </div>
        </div><!-- col-sm-4 -->
        <div class="col-sm-8">
                    <p class="margin-b-50">I am a lawyer turned web developer with a passion to solve complex technical problems.
          You will always find me tackling my tasks with patience, persistence and most importantly with
          a team. One of my dreams is to use my development skills for social good by helping to build
          something for the Rohingya community of my country, for example to help build a translation
          engine for the language.</p>
          
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="radial-prog-area margin-b-30">
                <div class="radial-progress" data-prog-percent=".97">
                  <div></div>
                  <h6 class="progress-title">HTML5 & CSS3</h6>
                </div>
              </div><!-- radial-prog-area-->
            </div><!-- col-sm-6-->
          
            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="radial-prog-area margin-b-30">
                <div class="radial-progress" data-prog-percent=".80">
                  <div></div>
                  <h6 class="progress-title">WEB DESIGN</h6>
                </div>
              </div><!-- radial-prog-area-->
            </div><!-- col-sm-6-->
            
            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="radial-prog-area margin-b-30">
                <div class="radial-progress" data-prog-percent=".80">
                  <div></div>
                  <h6 class="progress-title">JAVASCRIPT</h6>
                </div>
              </div><!-- radial-prog-area-->
            </div><!-- col-sm-6-->
            
            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="radial-prog-area margin-b-50">
                <div class="radial-progress" data-prog-percent=".90">
                  <div></div>
                  <h6 class="progress-title">PHP</h6>
                </div>
              </div><!-- radial-prog-area-->
            </div><!-- col-sm-6-->

            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="radial-prog-area margin-b-50">
                <div class="radial-progress" data-prog-percent=".80">
                  <div></div>
                  <h6 class="progress-title">PYTHON</h6>
                </div>
              </div><!-- radial-prog-area-->
            </div><!-- col-sm-6-->

            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="radial-prog-area margin-b-50">
                <div class="radial-progress" data-prog-percent=".80">
                  <div></div>
                  <h6 class="progress-title">REACT NODE.JS</h6>
                </div>
              </div><!-- radial-prog-area-->
            </div><!-- col-sm-6-->

             <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="radial-prog-area margin-b-50">
                <div class="radial-progress" data-prog-percent=".80">
                  <div></div>
                  <h6 class="progress-title">C# .NET</h6>
                </div>
              </div><!-- radial-prog-area-->
            </div><!-- col-sm-6-->

            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="radial-prog-area margin-b-50">
                <div class="radial-progress" data-prog-percent=".90">
                  <div></div>
                  <h6 class="progress-title">DATA ANALYST</h6>
                </div>
              </div><!-- radial-prog-area-->
            </div><!-- col-sm-6-->
          
          </div><!-- row -->
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- about-section -->
  
  <section class="experience-section section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="heading">
            <h3><b>Work Experience</b></h3>
            <h6 class="font-lite-black"><b>PREVIOUS JOBS</b></h6>
          </div>
        </div><!-- col-sm-4 -->
        <div class="col-sm-8">

           <div class="experience margin-b-50">
            <h4><b> NUTRITIONAL ASSESMENT TEAM LEADER</b></h4>
            <h5 class="font-yellow"><b>ACTION AGAINST HUNGER(ACF)</b></h5>
            <h6 class="margin-t-10">DEC 2008 - DEC 2009</h6>
            <p class="font-semi-white margin-tb-30">Survey in the rural area Monitoring and recording observation to measure and record of children body weight, heaght and arm. Those who has suffering malnutrition. </p>
            
          </div><!-- experience -->
          
        
          <div class="experience margin-b-50">
            <h4><b>TRANSLATOR & INTERPRETOR </b></h4>
            <h5 class="font-yellow"><b>UNITED NATION HIGH COMMISSION FOR REFUGEES</b></h5>
            <h6 class="margin-t-10">FEB 2011 - DEC 2014</h6>
            <p class="font-semi-white margin-tb-30">UNHCR, the UN Refugee Agency, is a global     organizations dedicated to
          saving lives and building a better future for refugees. Together with 35
          colleagues I was in charge of the translating requests and needs of up to
          1000 refugees per day mostly from Burmese to English
           </p>
            <ul class="list margin-b-30">
              <li>Interpret In The Interview Room</li>
              <li>Visit To Refugees In The Detentioncamp </li>
              <li>Helping Refugee's Difficults In The Hospital</li>
            </ul>
          </div><!-- experience -->
          
          <div class="experience margin-b-50">
            <h4><b>FULL STACK WEB DEVELOPMENT STUDENT</b></h4>
            <h5 class="font-yellow"><b>DESIGN & WEB STUDIO</b></h5>
            <h6 class="margin-t-10"> 2017 - 2018</h6>
            <p class="font-semi-white margin-tb-30">A full-time, highly immersive one year program to build web developers.
            passed 2/3 levels of the ONE program. and successfully mentored team
            of 10 Bootcampers to pass the first level of the program.  </p>
            
          </div><!-- experience -->

          <div class="experience margin-b-50">
            <h4><b>BUSINESS ANALYST  </b></h4>
            <h5 class="font-yellow"><b>DELOITTE ROTTERDAM</b></h5>
            <h6 class="margin-t-10">JUN 2019 - DEC 2019</h6>
            <p class="font-semi-white margin-tb-30">Work with a highly experienced innovation team. Design and implement
      research solutions for client projects and services. Convert functional
      descriptions into working applications. Contributing to improving the
      customer experience. Analyst Data working with advanced statistical
      techniques. Think of solving various business challenges
           </p>
            <ul class="list margin-b-30">
              <li>Web Design and Webdeveloping</li>
              <li>Data Analyst</li>
              <li>Create Dashboard</li>
            </ul>
          </div><!-- experience -->
          
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
    
  </section><!-- experience-section -->
  
  <section class="education-section section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="heading">
            <h3><b>Education</b></h3>
            <h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
          </div>
        </div><!-- col-sm-4 -->
        <div class="col-sm-8">
          <div class="education-wrapper">
            <div class="education margin-b-50">
              <h4><b>BACHELOR OF LAWS (L.L.B)</b></h4>
              <h5 class="font-yellow"><b>SITTWE UNIVERSITY</b></h5>
              <h6 class="font-lite-black margin-t-10">GRADUATED IN SEP 2008</h6>
             
            </div><!-- education -->
            
            <div class="education margin-b-50">
              <h4><b>COURSE ON WEB DEVELOPING </b></h4>
              <h5 class="font-yellow"><b>RE-START NETWORK BOOTCAMP</b></h5>
              <h6 class="font-lite-black margin-t-10">GRADUATED IN MAY 2019(9 MONTHS)</h6>
              
            </div><!-- education -->
            
            <div class="education margin-b-50">
              <h4><b>SUMMER DATACAMP</b></h4>
              <h5 class="font-yellow"><b>DELOITTE</b></h5>
              <h6 class="font-lite-black margin-t-10">COMPLATED IN SEP 2019</h6>
             
            </div><!-- education -->
          </div><!-- education-wrapper -->
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
    
  </section><!-- about-section -->
  
 
        
        
	
<?php
  require 'footer.php';
?>