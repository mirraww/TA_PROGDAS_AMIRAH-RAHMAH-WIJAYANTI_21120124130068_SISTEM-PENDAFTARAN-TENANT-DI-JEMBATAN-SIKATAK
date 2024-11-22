<?php
session_start();

//untuk mengelola antrean
class TenantQueue {
    public static function getQueue() {
        return $_SESSION['queue'] ?? [];
    }

    // Tambah tenant ke antrean
    public static function addTenant($productName) {
        $_SESSION['queue'][] = ['product_name' => $productName];
    }

    // Menampilkan antrean sebagai daftar
    public static function renderQueue() {
        $queue = self::getQueue();
        if (empty($queue)) {
            return '<p>Belum ada tenant yang mendaftar :(</p>';
        }

        $html = '<ul>';
        foreach ($queue as $entry) {
            $html .= '<li>' . htmlspecialchars($entry['product_name']) . '</li>';
        }
        $html .= '</ul>';

        return $html;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tenant</title>
    <link rel="stylesheet" type="text/css" href="css/tenant.css">
</head>
<body>
    <h1>Daftar Tenant</h1>

    <?php 
    echo TenantQueue::renderQueue(); 
    ?>
</body>
</html>
