<?php 
if(!file_exists('./upload/up.mp4')){
	move_uploaded_file($_FILES['part']['tmp_name'],'./upload/up.mp4');
}else{
	file_put_contents('./upload/up.mp4',file_get_contents($_FILES['part']['tmp_name']),FILE_APPEND);
}
echo "ok";

 ?>