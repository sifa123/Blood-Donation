<?php
$db=new PDO('mysql:host=localhost;dbname=mypro_blood','root','');
if($db){
	echo "insert";
}
else{
	echo "not insert";
}
?>