<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/kontak_kategori/add' ?>">Kategori Add</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Kontak Kategori Id</th>
                    <th>Kontak Id</th>
                    <th>Kategori Id</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kontak_kategori as $item): ?>
                    <tr>
                        <td><?php echo $item['kontak_kategori_id']; ?></td>
                        <td><?php echo $item['kontak_id']; ?></td>
                        <td><?php echo $item['kategori_id']; ?></td>
                        <td><a href="<?php echo site_url() . '/kontak_kategori/edit/' . $item['kontak_kategori_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/kontak_kategori/delete/' . $item['kontak_kategori_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>