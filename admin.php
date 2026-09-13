<?php
require_once 'config.php';

// Только для админов
if (empty($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.html');
    exit;
}

// ==================== ОДОБРЕНИЕ / ОТКЛОНЕНИЕ ====================
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $profileId = intval($_POST['profile_id'] ?? 0);
    $action = $_POST['moderate'] ?? '';
    $reason = trim($_POST['reason'] ?? '');

    if ($action === 'approve') {
        $stmt = $pdo->prepare("
            UPDATE profiles SET status = 'approved', rejection_reason = NULL WHERE id = ?
        ");
        $stmt->execute([$profileId]);
    } elseif ($action === 'reject') {
        $stmt = $pdo->prepare("
            UPDATE profiles SET status = 'rejected', rejection_reason = ? WHERE id = ?
        ");
        $stmt->execute([$reason, $profileId]);
    }

    header('Location: admin.php');
    exit;
}

// ==================== СПИСОК ВСЕХ ЗАЯВОК ====================
$stmt = $pdo->query("
    SELECT p.*, u.email
    FROM profiles p
    JOIN users u ON u.id = p.user_id
    ORDER BY p.created_at DESC
");
$applications = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админ-панель — HARD Roleplay</title>
    <link rel="stylesheet" href="pages.css">
    <link rel="stylesheet" href="toggle.css">
</head>
<body>
    <div class="page-container">
        <div class="page-label">АДМИН-ПАНЕЛЬ</div>
        <h1 class="page-title">МОДЕРАЦИЯ<br>ЗАЯВОК</h1>

        <?php foreach ($applications as $app): ?>
            <?php
                $statusColor = $app['status'] === 'approved' ? '#4ade80'
                              : ($app['status'] === 'rejected' ? '#ef4444' : '#facc15');
                $statusText = $app['status'] === 'approved' ? 'ОДОБРЕНА'
                              : ($app['status'] === 'rejected' ? 'ОТКЛОНЕНА' : 'НА ПРОВЕРКЕ');
            ?>
            <div class="content-card" style="margin-bottom: 20px; padding: 25px;">
                <div style="display: flex; justify-content: space-between; align-items: start;">
                    <div>
                        <h3 class="card-title">
                            <?= htmlspecialchars($app['first_name'] . ' ' . $app['last_name']) ?>
                        </h3>
                        <p style="color: var(--text-muted); font-size: 13px;">
                            Email: <?= htmlspecialchars($app['email']) ?> |
                            Возраст: <?= $app['age'] ?> |
                            Steam ID: <?= htmlspecialchars($app['steam_id']) ?>
                        </p>
                        <p style="color: var(--text-muted); font-size: 12px; margin-top: 5px;">
                            Отправлено: <?= $app['created_at'] ?>
                        </p>
                    </div>
                    <span style="background: <?= $statusColor ?>; color: #000; padding: 6px 14px;
                                 border-radius: 20px; font-size: 11px; font-weight: 800;">
                        <?= $statusText ?>
                    </span>
                </div>

                <?php if ($app['lore_file']): ?>
                    <a href="<?= htmlspecialchars($app['lore_file']) ?>" target="_blank"
                       style="display: inline-block; color: var(--accent); margin: 15px 0;
                              font-weight: 700; text-decoration: none;">
                        📄 Открыть файл с лором
                    </a>
                <?php endif; ?>

                <?php if ($app['rejection_reason']): ?>
                    <p style="color: #ef4444; font-size: 13px; margin-bottom: 15px;">
                        Причина отказа: <?= htmlspecialchars($app['rejection_reason']) ?>
                    </p>
                <?php endif; ?>

                <?php if ($app['status'] === 'pending'): ?>
                    <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 10px;">
                        <form method="POST" style="display: inline;">
                            <input type="hidden" name="profile_id" value="<?= $app['id'] ?>">
                            <input type="hidden" name="moderate" value="approve">
                            <button type="submit" class="btn-primary"
                                    style="background: #16a34a; border-color: #16a34a; padding: 10px 20px;">
                                ✅ Одобрить
                            </button>
                        </form>
                        <form method="POST" style="display: inline-flex; gap: 5px;">
                            <input type="hidden" name="profile_id" value="<?= $app['id'] ?>">
                            <input type="hidden" name="moderate" value="reject">
                            <input type="text" name="reason" placeholder="Причина отказа" required
                                   style="padding: 10px; border: 2px solid var(--border-color);
                                          border-radius: 8px; background: var(--bg-primary);
                                          color: var(--text-primary);">
                            <button type="submit" class="btn-primary"
                                    style="background: #dc2626; border-color: #dc2626; padding: 10px 20px;">
                                ❌ Отклонить
                            </button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>