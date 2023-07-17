<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="jpg" href="logo_kopi.png">
    <title>Data pasien</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body style="background-image: url(C:\Users\Ashghar\OneDrive\Documents\ppkn\backgrnd.jpg)">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Data vaksin</h3>
            </div>
            <div class="col-sm">
                <h3> ketua </h3>
            </div>
        </div>

    </div>
    <div class="row mt-3">
        <div class="col">
            <table class="table table-striped table-hover table-sm">
                <tr>
                    <th>No</th>
                    <th>ID Pesanan</th>
                    <th>Nama customer</th>
                    <th>Nama pesanan</th>
                    <th>Jenis pesanan</th>
                    <th>Harga</th>
                </tr>
                <?php
                include 'koneksi.php';
                $no = 1;
                $hasil = $koneksi->query("SELECT * FROM kasir");
                ?>
                <?php
                while ($row = $hasil->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['id_pesanan']; ?></td>
                        <td><?= $row['nm_customer']; ?></td>
                        <td><?= $row['nm_pesanan']; ?></td>
                        <td><?= $row['jenis_pesanan']; ?></td>
                        <td><?= $row['Harga']; ?></td>
                    </tr>
        </div>
    <?php } ?>
    </table>
    <div>
        <a href="login.php" class="btn btn-large btn-danger">Logout</a>
    </div>
    </div>
    </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>