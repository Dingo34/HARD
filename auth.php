<?php
require_once 'config.php';

$action = $_POST['action'] ?? '';

// ==================== РЕГИСТРАЦИЯ ====================
if ($action === 'register') {
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $password2 = $_POST['password2'] ?? '';
    $firstName = trim($_POST['first_name'] ?? '');
    $lastName  = trim($_POST['last_name'] ?? '');
    $age       = intval($_POST['age'] ?? 0);
    $steamId   = trim($_POST['steam_id'] ?? '');

    // Валидация
    $errors = [];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Некорректный email';
    if (strlen($password) < 6) $errors[] = 'Пароль минимум 6 символов';
    if ($password !== $password2) $errors[] = 'Пароли не совпадают';
    if ($age < 14 || $age > 99) $errors[] = 'Возраст от 14 до 99';
    if (empty($firstName) || empty($lastName)) $errors[] = 'Имя и фамилия обязательны';
    if (empty($steamId)) $errors[] = 'Steam ID обязателен';

    // Проверка, нет ли уже такого email
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) $errors[] = 'Этот email уже зарегистрирован';

    if (!empty($errors)) {
        $_SESSION['error'] = implode('<br>', $errors);
        header('Location: index.html');
        exit;
    }

    // Создаём пользователя
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (email, password_hash) VALUES (?, ?)");
    $stmt->execute([$email, $hash]);
    $userId = $pdo->lastInsertId();

    // Создаём профиль со статусом "pending"
    $stmt = $pdo->prepare("
        INSERT INTO profiles (user_id, first_name, last_name, age, steam_id, status)
        VALUES (?, ?, ?, ?, ?, 'pending')
    ");
    $stmt->execute([$userId, $firstName, $lastName, $age, $steamId]);

    // Автоматически логиним
    $_SESSION['user_id'] = $userId;
    $_SESSION['role'] = 'player';
    $_SESSION['success'] = 'Регистрация успешна! Загрузите файл с лором.';
    header('Location: apply.php');
    exit;
}

// ==================== ВХОД ====================
if ($action === 'login') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if (!$user || !password_verify($password, $user['password_hash'])) {
        $_SESSION['error'] = 'Неверный email или пароль';
        header('Location: index.html');
        exit;
    }

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['success'] = 'Вы вошли в аккаунт!';
    header('Location: index.html#main');
    exit;
}

// ==================== ВЫХОД ====================
if ($action === 'logout') {
    session_destroy();
    header('Location: index.html');
    exit;
}
?>