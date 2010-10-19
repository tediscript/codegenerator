<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/kontak/add' ?>">Kategori Add</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Kontak Id</th>
                    <th>Instansi</th>
                    <th>Gelar Depan</th>
                    <th>Nama</th>
                    <th>Gelar Belakang</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>Faks</th>
                    <th>Handphone</th>
                    <th>Email</th>
                    <th>Temp</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kontak as $item): ?>
                    <tr>
                        <td><?php echo $item['kontak_id']; ?></td>
                        <td><?php echo $item['instansi']; ?></td>
                        <td><?php echo $item['gelar_depan']; ?></td>
                        <td><?php echo $item['nama']; ?></td>
                        <td><?php echo $item['gelar_belakang']; ?></td>
                        <td><?php echo $item['jabatan']; ?></td>
                        <td><?php echo $item['alamat']; ?></td>
                        <td><?php echo $item['telp']; ?></td>
                        <td><?php echo $item['faks']; ?></td>
                        <td><?php echo $item['handphone']; ?></td>
                        <td><?php echo $item['email']; ?></td>
                        <td><?php echo $item['temp']; ?></td>
                        <td><a href="<?php echo site_url() . '/kontak/edit/' . $item['kontak_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/kontak/delete/' . $item['kontak_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>