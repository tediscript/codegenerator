<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/kontak_importer/add' ?>">Kategori Add</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Kontak Id</th>
                    <th>Instansi</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>Faks</th>
                    <th>Handphone</th>
                    <th>Email</th>
                    <th>Kategori Id</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kontak_importer as $item): ?>
                    <tr>
                        <td><?php echo $item['kontak_id']; ?></td>
                        <td><?php echo $item['instansi']; ?></td>
                        <td><?php echo $item['nama']; ?></td>
                        <td><?php echo $item['jabatan']; ?></td>
                        <td><?php echo $item['alamat']; ?></td>
                        <td><?php echo $item['telp']; ?></td>
                        <td><?php echo $item['faks']; ?></td>
                        <td><?php echo $item['handphone']; ?></td>
                        <td><?php echo $item['email']; ?></td>
                        <td><?php echo $item['kategori_id']; ?></td>
                        <td><a href="<?php echo site_url() . '/kontak_importer/edit/' . $item['kontak_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/kontak_importer/delete/' . $item['kontak_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>