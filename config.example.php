<?php
// ============ ШАБЛОН КОНФИГУРАЦИИ ============
// Скопируй этот файл в config.php и вставь свои значения
session_start();

$DB_HOST = 'localhost';
$DB_NAME = 'имя_базы';
$DB_USER = 'логин_бд';
$DB_PASSWORD = 'пароль_бд';

try {
    $pdo = new PDO(
        "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4",
        $DB_USER,
        $DB_PASSWORD,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    die('Ошибка подключения к базе: ' . $e->getMessage());
}

define('UPLOAD_DIR', __DIR__ . '/uploads/lore/');
define('UPLOAD_URL', '/uploads/lore/');

if (!is_dir(UPLOAD_DIR)) {
    mkdir(UPLOAD_DIR, 0755, true);
}
?>