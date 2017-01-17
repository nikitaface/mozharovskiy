<?php
//мажоровский
error_reporting(0);
//include('bd.php');
include_once 'settings.php';//подключаем settings.php
session_start();
//в переменную $CONNECT мы заносим наше подключение к базе данных(MySql)
$CONNECT = mysqli_connect(HOST, USER, PASS, DB);

//если человек(или бот) нажал запомнить меня то password заноситься в куки
//при повторном заходе на сайт зная пароль мы получаем все данные о этом пользователе
//и помещаем эти данные в сессии



///////////////////////////этот код разбивает get строку(строку поиска) на переменные
if ($_SERVER['REQUEST_URI'] == '/'){
$Page = 'index';
$Module = 'index';
} else{
  $URL_Path = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $URL_Parts = explode('/' , trim($URL_Path , ' /'));
  $Page = array_shift ($URL_Parts);
  $Module = array_shift ($URL_Parts);



  if(!empty($Module)) {
  $Param = array();
  for($i = 0 ; $i < count ($URL_Parts) ; $i++) {
  $Param [$URL_Parts[$i]] = $URL_Parts[++$i];
}
}
}
if($Page == 'index'){
	exit(header('Location: /home'));
}


if ( $Page == 'home' ) include('pages/home.php');
else if ( $Page == 'about_anatoliy' ) include('pages/about_anatoliy.php');
else if ( $Page == 'about_book' ) include('pages/about_book.php');
else if ( $Page == 'books' ) include('pages/books.php');
else if ( $Page == 'contacts' ) include('pages/contacts.php');
else if ( $Page == 'photo' ) include('pages/photo.php');
else if ( $Page == 'thoughts' ) include('pages/thoughts.php');






function resultToArray(&$result_set){
$results = array();
while (($row = $result_set->fetch_assoc()) != false){

$results[] = $row;
}
$result_set->free();
return $results;
}
 


function get_all_books(){
$result_set = $GLOBALS["CONNECT"]->query("SELECT * FROM `all_books` order by `id_book`");
return resultToArray($result_set);
}

function get_all_bookslimit(){
$result_set = $GLOBALS["CONNECT"]->query("SELECT * FROM `all_books` order by `id_book` LIMIT 4");
return resultToArray($result_set);
}

function get_book_on_id($id){
$result_set = $GLOBALS["CONNECT"]->query("SELECT * FROM `all_books` WHERE `id_book` = '$id'");
return $result_set->fetch_assoc();
}

?>












