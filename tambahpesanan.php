<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pesanan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="website icon" type="png" href="logo_kopi.png">

</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data pesanan</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="id_pesanan">ID Pesanan</label>
                        <input type="text" class="form-control mb-3" name="id_pesanan" autocomplete="off" placeholder="ID pesanan" required>
                    </div>
                    <div class="form-group">
                        <label for="nm_customer">Nama Customer</label>
                        <input type="text" class="form-control mb-3" name="nm_customer" autocomplete="off" placeholder="Nama customer" required>
                    </div>
                    <div class="form-group">
                        <label for="nm_pesanan">Nama Pesanan</label>
                        <input type="text" class="form-control mb-3" name="nm_pesanan" autocomplete="off" placeholder="Nama pesanan" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_pesanan">jenis_pesanan</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jenis_pesanan" value="makanan"> makanan
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jenis_pesanan" value="minuman"> minuman
                        </div>
                        <div class="form-group">
                            <label for="harga">harga</label>
                            <input type="text" class="form-control mb-3" name="harga" autocomplete="off" placeholder="harga" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>