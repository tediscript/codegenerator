<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/kelas/add' ?>">Kategori Add</a><br/>
        <?php echo $pagination; ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Kelas Id</th>
                    <th>Nama</th>
                    <th>Semester</th>
                    <th>Tahun Ajaran</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kelas as $item): ?>
                    <tr>
                        <td><?php echo $item['kelas_id']; ?></td>
                        <td><?php echo $item['nama']; ?></td>
                        <td><?php echo $item['semester']; ?></td>
                        <td><?php echo $item['tahun_ajaran']; ?></td>
                        <td><a href="<?php echo site_url() . '/kelas/edit/' . $item['kelas_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/kelas/delete/' . $item['kelas_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>