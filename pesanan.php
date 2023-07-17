<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syaki | XII RPL 1</title>
    <link rel="website icon" type="jpg" href="logo_kopi.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<style>
    body {
        background: url('wellkopi.jpg') no-repeat center center fixed;
        background-size: cover;
    }
</style>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Kopi Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">ADMIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="register.php">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Tabel pesanan</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="tambahpesanan.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped table-hover table-sm">
                    <tr>
                        <th>No</th>
                        <th>ID Pesanan</th>
                        <th>Nama Customer</th>
                        <th>Nama Pesanan</th>
                        <th>Jenis Pesanan</th>
                        <th>Harga</th>
                        <th>Action</th>
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
                            <td>
                                <a href="editpesanan.php?edit=<?= $row['id_pesanan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['id_pesanan']; ?>">
                                    Hapus
                                </button>
                            </td>
                        </tr>

                        <div class="modal fade" id="hapusModal<?= $row['id_pesanan']; ?>" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <a href="koneksi.php?id_pesanan=<?= $row['id_pesanan']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </table>
                <a href="login.php"><button type="button" class="btn btn-danger">LogOut</button></a>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>