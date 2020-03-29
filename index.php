		<?php
		   require('config/db.php');
		   require('config/config.php');
		    //create query
		   $query='SELECT * FROM posts';

		   //get resulte
		   $resulte=mysqli_query($con,$query);

		   //fech data
		   $posts=mysqli_fetch_all($resulte, MYSQLI_ASSOC);

		   //let data be free
		   mysqli_free_result($resulte);

		    //close connection
		   mysqli_close($con);
		  
		  ?>

			 <?php include('inc/header.php');?>
			  	<div class="container">
			  		<h1>Posts</h1>
			  		<?php foreach ($posts as $post):?>
			  			<div class="well">
							<h3><?php echo $post['title'];?></h3>
							<small>Created on <?php echo $post['created_at'];?> by <?php echo $post['auther'];?></small>
							<p><?php echo $post['body'];?></p>
							<a class="btn btn-default" href="<?php echo ROOT_URL;?>post.php?id=<?php echo $post['id'];?>">Read More</a>
			  			</div>
			  		<?php endforeach;?>
			  	</div>
			 <?php include('inc/footer.php');?>

