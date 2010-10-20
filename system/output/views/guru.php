<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/guru/add' ?>">Kategori Add</a><br/>
        <?php echo $pagination; ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Guru Id</th>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($guru as $item): ?>
                    <tr>
                        <td><?php echo $item['guru_id']; ?></td>
                        <td><?php echo $item['nip']; ?></td>
                        <td><?php echo $item['nama']; ?></td>
                        <td><a href="<?php echo site_url() . '/guru/edit/' . $item['guru_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/guru/delete/' . $item['guru_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>