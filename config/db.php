<?php
    //create connection to db
    $con=mysqli_connect('localhost','root','root','phpblog');


    //checke connection
    if (mysqli_connect_errno()) 
    {
    	//filed
    	echo "youer connection is filed".mysqli__connect_errno();
    }
    //

?>