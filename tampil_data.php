<?php
include 'koneksi.php';
?>
<html>

<head>
    <title>Tampilan Utama</title>
    <style>
        tr {
            text-align: center;
        }
    </style>
</head>

<body>
    <a href="insert.php">tambah data</a>
    <h2>Daftar data dalam database</h2>

    <table border="1" width="700px">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>

        <?php
        $i = 1;
        $r = mysqli_query($kon, "SELECT * FROM siswa");
        while ($brs = mysqli_fetch_assoc($r)) {
        ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $brs['nim']; ?></td>
                <td><img src="img/<?= $brs['gambar']; ?>" height="70px"></td>
                <td><?= $brs['nama']; ?></td>
                <td><?= $brs['jeniskelamin']; ?></td>
                <td><?= $brs['agama']; ?></td>
                <td><?= $brs['olahraga']; ?></td>
                <td><a href="edit.php?id=<?= $brs['id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?= $brs['id']; ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>