<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/siswa/add' ?>">Kategori Add</a><br/>
        <?php echo $pagination; ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Siswa Id</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $item): ?>
                    <tr>
                        <td><?php echo $item['siswa_id']; ?></td>
                        <td><?php echo $item['nis']; ?></td>
                        <td><?php echo $item['nama']; ?></td>
                        <td><a href="<?php echo site_url() . '/siswa/edit/' . $item['siswa_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/siswa/delete/' . $item['siswa_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>