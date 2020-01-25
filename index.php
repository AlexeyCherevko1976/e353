<?


if ( $_SERVER['REQUEST_URI'] == '/' ) $page = 'home';
else {

	$page = substr($_SERVER['REQUEST_URI'], 2);
	if ( !preg_match('/^[A-z0-9]{3,15}$/', $page) ) exit('error url');
}


session_start();



if ( file_exists('page/'.$page.'.php') ) include 'page/'.$page.'.php';

//else if (file_exists('auth/'.$page.'.php') ) include 'auth/'.$page.'.php';
//  $_SESSON['ulogin'] == 1 and 

else exit('Страница 404');

?>