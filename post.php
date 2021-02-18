<?php
  require 'header.php';
?>

<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">
            <select name="category">
                   <option>ALL</option>
                   <option value="PHP">PHP</option>
                   <option value="Python">Python</option>
                   <option value="Javascript">Javascript</option>
                   <option value="React">React</option>
                   <option value="Data_Analyst">Data_Analyst</option>
                   <option value="CSS">CSS</option>
            </select><br>
            
            <input type="text" name="title"><br />
            <input type="text" name="gogle"><br />

           <input type="file" 
                  name="my_image"><br>

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
<?php
  require 'footer.php';
?>