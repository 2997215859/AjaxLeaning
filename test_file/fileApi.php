<?php 
if(empty($_FILES)){
	//如果数组为空，则报错
	exit("no file");
}
if($_FILES['pic']['error']){
	//如果error值为1,则报错
	exit("fail");
}
move_uploaded_file($_FILES['pic']['tmp_name'],'upload/'.$_FILES['pic']['name']);
// move_uploaded_file($_FILES['pic']['tmp_name'],'upload/'.$_FILES['pic']['name']);
print_r($_FILES);
?>

