<?php
session_start();
$product_name = $_GET['product_name'] ?? null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Terima Kasih</title>
    
</head>
<body>

    <h1>Yey, sudah daftar!</h1>
    <link rel="stylesheet" type="text/css" href="css/thankyou.css">
    <?php if (isset($message)): ?>
        <p style="color: white;"><?php echo htmlspecialchars($message); ?></p>
    <?php else: ?>
        <p>Terima kasih <strong><?php echo htmlspecialchars($product_name); ?></strong> sudah memesan tempat!</p>
        <?php endif; ?>
    <a href="form.php"><button>Mau pesen lagi</button> <a href="tenant.php"><button>Daftar Tenant</button></a>
</body>
</html>
