<?php
require_once 'config.php';

// Только для авторизованных
if (empty($_SESSION['user_id'])) {
    header('Location: index.html#login');
    exit;
}

$userId = $_SESSION['user_id'];
$message = '';

// Обработка загрузки файла
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['lore_file'])) {
    $file = $_FILES['lore_file'];

    // Проверяем размер (максимум 5 МБ для безопасности)
    if ($file['size'] > 5 * 1024 * 1024) {
        $message = 'Файл слишком большой. Максимум 5 МБ.';
    } else {
        // Разрешённые расширения
        $allowed = ['txt', 'pdf', 'doc', 'docx'];
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed)) {
            $message = 'Разрешены только файлы: ' . implode(', ', $allowed);
        } else {
            // Генерируем уникальное имя
            $newName = $userId . '_' . time() . '.' . $ext;
            $dest = UPLOAD_DIR . $newName;

            if (move_uploaded_file($file['tmp_name'], $dest)) {
                // Обновляем профиль: сохраняем путь к файлу, сбрасываем статус
                $stmt = $pdo->prepare("
                    UPDATE profiles
                    SET lore_file = ?, status = 'pending', rejection_reason = NULL
                    WHERE user_id = ?
                ");
                $stmt->execute([UPLOAD_URL . $newName, $userId]);
                $message = 'Заявка отправлена! Ожидайте проверки администратора.';
            } else {
                $message = 'Ошибка загрузки файла.';
            }
        }
    }
}

// Получаем текущий профиль
$stmt = $pdo->prepare("SELECT * FROM profiles WHERE user_id = ?");
$stmt->execute([$userId]);
$profile = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Подача заявки — HARD Roleplay</title>
    <link rel="stylesheet" href="pages.css">
    <link rel="stylesheet" href="toggle.css">
</head>
<body>
    <div class="page-container">
        <h1 class="page-title">ЗАГРУЗИ<br>ФАЙЛ С ЛОРОМ</h1>

        <?php if ($message): ?>
            <div class="content-card" style="margin-bottom: 30px; padding: 20px;">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>

        <?php if ($profile && $profile['status'] === 'rejected'): ?>
            <div class="content-card" style="margin-bottom: 30px; padding: 20px; border-left: 3px solid #ef4444;">
                <strong style="color: #ef4444;">Заявка отклонена.</strong><br>
                Причина: <?= htmlspecialchars($profile['rejection_reason'] ?? 'не указана') ?>
            </div>
        <?php endif; ?>

        <?php if ($profile && $profile['status'] === 'approved'): ?>
            <div class="content-card" style="padding: 20px;">
                <strong style="color: #4ade80;">✅ Ваша заявка одобрена! Добро пожаловать в Хьюстон.</strong>
            </div>
        <?php else: ?>
            <form method="POST" enctype="multipart/form-data" style="max-width: 600px;">
                <div class="content-card" style="padding: 30px;">
                    <label style="display: block; margin-bottom: 10px; font-weight: 700;">
                        ФАЙЛ С ЛОРОМ ПЕРСОНАЖА
                    </label>
                    <input type="file" name="lore_file" accept=".txt,.pdf,.doc,.docx" required
                           style="width: 100%; padding: 12px; background: var(--bg-primary);
                                  border: 2px solid var(--border-color); border-radius: 8px;
                                  color: var(--text-primary); margin-bottom: 20px;">
                    <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 20px;">
                        Форматы: .txt, .pdf, .doc, .docx. Максимум 5 МБ.
                    </p>
                    <button type="submit" class="btn-primary" style="width: 100%; padding: 15px;">
                        ОТПРАВИТЬ НА ПРОВЕРКУ
                    </button>
                </div>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>