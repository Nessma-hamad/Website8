<?php
	require('config/db.php');
	require('config/config.php');
	    //create query

	//check submit
	if (isset($_POST['submit']))
	 {
		//get data
		$update_id=mysqli_real_escape_string($con,$_POST['update_id']);
		$title=mysqli_real_escape_string($con,$_POST['title']);
		$auther=mysqli_real_escape_string($con,$_POST['auther']);
		$body=mysqli_real_escape_string($con,$_POST['body']);


		//create query
		$query="UPDATE posts SET 
		           title='$title',
		           auther='$auther',
		           body='$body'
		        where id={$update_id}   
		           ";
		if (mysqli_query($con,$query))
		{
			header('Location:'.ROOT_URL.'');
		}
		else
		{
			echo "ERROR :".mysqli_error($con);
		}

	}
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
     <h1>Add Post</h1>
     <form method="post" action="<?php  $_SERVER['PHP_SELF'];?> ">
     	<div class="form-group">
     		<label >Tilte</label>
     		<input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
     		
     	</div>
     	<div class="form-group">
     		<label >Auther</label>
     		<input type="text" name="auther" class="form-control"  value="<?php echo $post['auther'];?>">
     		
     	</div>
     	<div class="form-group">
     		<label >Body</label>
     		<textarea  name="body" class="form-control"><?php echo $post['body'];?>"</textarea>
     		
     	</div>
     	<input type="hidden" name="update_id" value="<?php echo $post['id'];?>">
     	<input type="submit" name="submit" value="Submit" class="btn btn-primary">
     	
     </form>
		  		
</div>
<?php include('inc/footer.php');?>

