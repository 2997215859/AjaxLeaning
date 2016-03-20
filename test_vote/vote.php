<?php 
if(rand(1,10)<4){
	echo "0";
}else{
	$vote = file_get_contents("vote.txt");
	$vote+=1;
	file_put_contents("vote.txt", $vote);
	echo "1";
}
 ?>