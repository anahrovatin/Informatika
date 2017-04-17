   <?php


 #povezava do podatkovne baze

$dbc = mysqli_connect('localhost', 'Dev', 'ana123', 'projektna') OR die('Could not connect because:'.mysqli_connect_error());

$dbc->set_charset("utf8");

$site_title = 'Projektna naloga';

if(isset($_GET['page'])) {
	$pageid = $_GET['page']; // enači $pageid z vrednostjo v URL-ju

} else {
	$pageid = 1; //enači $pageid z 1 ali z domačo stranjo
}
 
#Vse informacije za našo stran
 $q = "SELECT * FROM pages WHERE id = $pageid "; //izbira iz pages iz tiste ki ima $pageid, ki ga želim
 $r = mysqli_query($dbc, $q); //r=result
 $page = mysqli_fetch_assoc($r); 

 ?>