<?php



 if(isset($_POST['submit'])&& !empty($_POST['email']) && !empty($_POST['senha']))
 {

include_once('config.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

print_r('email:'.$email);
print_r('<br>');
print_r('senha:'.$senha);

 }else{
     header('Location: index.php');
 }

?>