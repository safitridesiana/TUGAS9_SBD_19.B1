<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM anggota';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Homepage</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>TUGAS 9 - SISTEM BASIS DATA (CRUD)</h1>
        </header>
    <br>
            <fieldset>
        <h2>Tabel Anggota</h2>
        <a href="add.php">TAMBAH ANGGOTA BARU</a>
        <br><br>
            <div class="main">
            <table>
                <tr>
                    <th>ID Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Alamat</th>
                    <th>TTL</th>
                    <th>Status</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['id_anggota'];?></td>
                    <td><?= $row['nm_anggota'];?></td>
                    <td><?= $row['alamat'];?></td>
                    <td><?= $row['ttl_anggota'];?></td>
                    <td><?= $row['status_anggota'];?></td>
                    <td>
                        <a href="edit.php?id_anggota=<?php echo $row['id_anggota']; ?>">Edit</a>
                        <a href="delete.php?id_anggota=<?php echo $row['id_anggota']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>
            </div>
            </fieldset>
            </div>
</body>
</html>