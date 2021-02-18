<?php include "db_conn.php"; ?>





<?php
  require 'header.php';
?>

		<div>
	
     <a href="index.php">Logout</a>
     <a href="post.php" class="btn btn-danger">Post</a>
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<p><?=$images['title']?></p>
              <p><?=$images['gogle']?></p>
              <p><?=$images['category']?></p>
             	<img src="uploads/<?=$images['image_url']?>">
             </div>
          		
    <?php } }?>

  </div>

  

    
<?php
  require 'footer.php';
?>