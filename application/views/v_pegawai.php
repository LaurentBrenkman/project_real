<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Pegawai</title>
</head>
<body>
    <table border="1px solid black">
        <tr>
            <th>NAMA PEGAWAI</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
        </tr>
        <?php foreach ($pegawai as $pegawai) : ?>
                <tr>
                    <td><?php echo $pegawai['nama']; ?></td>
                    <td><?php echo $pegawai['email']; ?></td>
                    <td><?php echo $pegawai['password']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>





<!-- ini cara berguna untuk print data data di database apakah sdh masuk -->
<!-- <?php print_r($pegawai); ?> -->