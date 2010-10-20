<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/kelas_siswa/add' ?>">Kategori Add</a><br/>
        <?php echo $pagination; ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Kelas Siswa Id</th>
                    <th>Kelas Id</th>
                    <th>Siswa Id</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kelas_siswa as $item): ?>
                    <tr>
                        <td><?php echo $item['kelas_siswa_id']; ?></td>
                        <td><?php echo $item['kelas_id']; ?></td>
                        <td><?php echo $item['siswa_id']; ?></td>
                        <td><a href="<?php echo site_url() . '/kelas_siswa/edit/' . $item['kelas_siswa_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/kelas_siswa/delete/' . $item['kelas_siswa_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>