<?php

$con=new mysqli('localhost','root','','sample');
if($con)
{
	echo "Database conneced successful";
}
else
{
    die(mysqli_error($con));
}

?>