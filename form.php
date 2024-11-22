<!DOCTYPE html>
<html>
<head>
    <title>Formulir Data</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
    <h1>Data Tenant</h1>
    <form action="result.php" method="POST">
        <label for="product_name">Nama Tenant</label>
        <input type="text" id="product_name" name="product_name" required><br><br>
        <p>Pilih paket</p>
        <button type="submit" name="option" value="Rp. 10.000">1 x 1,5m <br>Rp. 10.000 </br> </button>
        <button type="submit" name="option" value="Rp. 15.000">2 x 2,5m <br>Rp. 15.000</button>
    </form>
</body>
</html>
