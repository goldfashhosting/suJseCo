<? 
/*
PROPERTY OF GOD1ST TECHNOLOGIES GROUP INC. ALL RIGHTS RESERVED 
*/

require('.header.php');
require('.nav.php') ;

if(isset($_GET['0_0'])){

$page = $_GET['0_0'];

switch($page){

case "hola":
require('.default.php');
break;
case "pricing":
require('.pricing.php');
break;
default:
require('.default.php');
break;
}
}else{

require('.default.php');
}
require('.footer.php');
?>
