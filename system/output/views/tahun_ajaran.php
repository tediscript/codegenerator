<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/tahun_ajaran/add' ?>">Kategori Add</a><br/>
        <?php echo $pagination; ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Periode</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tahun_ajaran as $item): ?>
                    <tr>
                        <td><?php echo $item['periode']; ?></td>
                        <td><a href="<?php echo site_url() . '/tahun_ajaran/edit/' . $item['periode']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/tahun_ajaran/delete/' . $item['periode']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>