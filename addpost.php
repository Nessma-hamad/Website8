<?php
	require('config/db.php');
	require('config/config.php');
	    //create query

	//check submit
	if (isset($_POST['submit']))
	 {
		//get data
		$title=mysqli_real_escape_string($con,$_POST['title']);
		$auther=mysqli_real_escape_string($con,$_POST['auther']);
		$body=mysqli_real_escape_string($con,$_POST['body']);


		//create query
		$query="INSERT INTO posts(title,auther,body) VALUES ('$title','$auther','$body')";
		if (mysqli_query($con,$query))
		{
			header('Location:'.ROOT_URL.'');
		}
		else
		{
			echo "ERROR :".mysqli_error($con);
		}

	}
	   
?>
<?php include('inc/header.php');?>
<div class="container">
     <h1>Add Post</h1>
     <form method="post" action="<?php  $_SERVER['PHP_SELF'];?> ">
     	<div class="form-group">
     		<label >Tilte</label>
     		<input type="text" name="title" class="form-control">
     		
     	</div>
     	<div class="form-group">
     		<label >Auther</label>
     		<input type="text" name="auther" class="form-control">
     		
     	</div>
     	<div class="form-group">
     		<label >Body</label>
     		<textarea  name="body" class="form-control"></textarea>
     		
     	</div>
     	<input type="submit" name="submit" value="Submit" class="btn btn-primary">
     	
     </form>
		  		
</div>
<?php include('inc/footer.php');?>

