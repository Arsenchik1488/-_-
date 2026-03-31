<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('APP_NAME', 'Корочки.есть');
define('BASE_PATH', dirname(__DIR__));

date_default_timezone_set('Europe/Moscow');

// Настройки подключения к БД
// 1. Создайте БД в phpMyAdmin или Open Server вручную.
// 2. Импортируйте в неё файл database.sql.
// 3. Укажите ниже свои параметры подключения.
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost'); // для Open Server/XAMPP чаще подходит localhost
define('DB_PORT', '3306');
define('DB_NAME', 'korochki_est');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');
