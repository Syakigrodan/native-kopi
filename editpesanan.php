<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="website icon" type="jpg" href="logo_kopi.png">

</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Pesanan</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM kasir where id_pesanan='$_GET[edit]'");
                ?>
                <?php
                while ($row = $panggil->fetch_assoc()) {
                ?>
                    <form action="koneksi.php" method="POST">
                        <div class="form-group">
                            <label for="id_pesanan">ID pesanan</label>

                            <input type="text" class="form-control mb-3" autocomplete="off" name="id_pesanan" value="<?= $row['id_pesanan'] ?>" readonly required>

                        </div>
                        <div class="form-group">
                            <label for="nm_customer">Nama customer</label>

                            <input type="text" class="form-control mb-3" autocomplete="off" name="nm_customer" value="<?= $row['nm_customer'] ?>" required>

                        </div>
                        <div class="form-group">
                            <label for="nm_pesanan">Nama pesanan</label>

                            <input type="text" class="form-control mb-3" autocomplete="off" name="nm_pesanan" value="<?= $row['nm_pesanan'] ?>" required>

                        </div>

                        <div class="form-group">

                            <label for="jenis_pesanan">Jenis pesanan</label>
                            <div class="form-check">

                                <input type="radio" class="form-check-input" name="jenis_pesanan" value="makanan" <?php if (($row['jenis_pesanan']) === "makanan") {
                                                                                                                        echo "checked";
                                                                                                                    } ?>> makanan
                            </div>

                            <div class="form-check">

                                <input type="radio" class="form-check-input" name="jenis_pesanan" value="minuman" <?php if (($row['jenis_pesanan']) === "minuman") {
                                                                                                                        echo "checked";
                                                                                                                    } ?>> minuman
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>

                                <input type="text" class="form-control mb-3" autocomplete="off" name="harga" value="<?= $row['Harga'] ?>" required>

                            </div>

                            <div class="form-group mt-3">

                                <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>