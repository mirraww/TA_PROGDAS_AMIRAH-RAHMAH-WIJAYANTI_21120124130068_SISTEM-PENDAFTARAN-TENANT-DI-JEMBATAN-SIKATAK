<?php
session_start();
$product_name = $_POST['product_name'];
$selected_option = $_POST['option'];

if (!isset($_SESSION['queue'])) {
    $_SESSION['queue'] = []; 
}
$queue = $_SESSION['queue'];

if (count($queue) >= 8) {
    $is_full = true;
    
} else {
    $is_full = false;

    $new_entry = [
        'product_name' => $product_name,
        'option' => $selected_option
    ];

    $queue[] = $new_entry;
    $_SESSION['queue'] = $queue; 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Formulir</title>
    <link rel="stylesheet" type="text/css" href="css/result.css">
</head>
<body>
    <h1>Data Tenant</h1>
    <div class="content">
        <?php if ($is_full): ?>
            <p style="color: red;">Yah udah penuh :c <br> Next time yaa ^^ </p> 
        <?php else: ?>
            <p>Nama tenant: <strong><?php echo htmlspecialchars($product_name); ?></strong></p>
            <p>Nominal: <strong><?php echo htmlspecialchars($selected_option); ?></strong></p>
            <p>Silahkan transfer sesuai nominal ke </p>
            <p>BCA 1234567 a/n Amimir</p>
            <a href="thankyou.php?product_name=<?php echo urlencode($product_name); ?>">
                <button>Sudah transfer!!</button>
            </a>
        <?php endif; ?>
    </div>
</body>
</html>
            
