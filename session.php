
<?php

 $access = file("enter.txt");
 
 $login = trim($access[0]);
 $password = trim($access[1]);
 
 if ($_POST['enter']){ 
 
	 if($_POST['login'] == $login && $_POST['password'] == $password){
		 
	   echo "<script>alert(\"Вы залогинены.\");</script>";
	   
   } else {
	   
	   echo "<script>alert(\"Ошибка.\");</script>";
	   
   }
   
} 
?>