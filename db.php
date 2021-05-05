<?php  
// Подключаю redbeanphp
require 'libs/rb-mysql.php';

// Соединяюсь с базой данных
R::setup('mysql:host=localhost;dbname=dbname', 'dblogin', 'dbpassword');

