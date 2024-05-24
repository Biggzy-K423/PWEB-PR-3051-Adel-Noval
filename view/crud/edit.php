<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Topup</title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Topup</h2>
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="ID_Pelanggan">ID Pelanggan:</label>
                <input type="text" class="form-control" id="ID_Pelanggan" name="ID_Pelanggan" required>
            </div>
            <div class="form-group">
                <label for="Pelanggan">Pelanggan:</label>
                <input type="text" class="form-control" id="Pelanggan" name="Pelanggan" required>
            </div>
            <div class="form-group">
                <label for="Kategori_Game">Kategori Game:</label>
                <input type="text" class="form-control" id="Kategori_Game" name="Kategori_Game" required>
            </div>
            <div class="form-group">
                <label for="Nomor_Hp">Nomor HP:</label>
                <input type="text" class="form-control" id="Nomor_Hp" name="Nomor_Hp" required>
            </div>
            <div class="form-group">
                <label for="Perkiraan_Selesai">Perkiraan Selesai:</label>
                <input type="text" class="form-control" id="Perkiraan_Selesai" name="Perkiraan_Selesai" required>
            </div>
            <div class="form-group">
                <label for="Status">Status:</label>
                <input type="text" class="form-control" id="Status" name="Status" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
