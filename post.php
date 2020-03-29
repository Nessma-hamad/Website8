  <?php
     require('config/db.php');
     require('config/config.php');

      // get id
     $id=mysqli_real_escape_string($con,$_GET['id']);
      //create query
     $query='SELECT * FROM posts WHERE id='.$id;

     //get resulte
     $resulte=mysqli_query($con,$query);

     //fech data
     $post=mysqli_fetch_assoc($resulte);

     //let data be free
     mysqli_free_result($resulte);

      //close connection
     mysqli_close($con);
    
    ?>

    <?php include('inc/header.php');?>
    	<div class="container">
    	
    		
    	    <a href="<?php echo ROOT_URL;?>" class="btn btn-default"> Back</a>
  				<h1><?php echo $post['title'];?></h1>
  				<small>Created on <?php echo $post['created_at'];?> by <?php echo $post['auther'];?></small>
  				<p><?php echo $post['body'];?></p>
          <hr>
          <a href="<?php echo ROOT_URL;?>editpost.php?id=<?php echo
          $post['id'];?>" class="btn btn-default"> Edit</a>
  				
    		
    		
    	</div>
    
    <?php include('inc/footer.php');?>
