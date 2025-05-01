<?php 

if ($_POST['id']=="sarika") {

	
	if ($_POST['password']=="sar123") {
		echo "successfull";
	}
	else{echo"fail";}


	
}

else{echo"fail";}




      $file_name= $_FILES['image']['name'];


      $file_size= $_FILES['image']['size'];


      $file_tmp= $_FILES['image']['tmp_name'];


      $file_type= $_FILES['image']['type'];



move_uploaded_file($file_tmp, "upload/".$file_name);












?>