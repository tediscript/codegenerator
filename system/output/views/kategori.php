<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/kategori/add' ?>">Kategori Add</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Kategori Id</th>
                    <th>Nama</th>
                    <th>Parent Id</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kategori as $item): ?>
                    <tr>
                        <td><?php echo $item['kategori_id']; ?></td>
                        <td><?php echo $item['nama']; ?></td>
                        <td><?php echo $item['parent_id']; ?></td>
                        <td><a href="<?php echo site_url() . '/kategori/edit/' . $item['kategori_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/kategori/delete/' . $item['kategori_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>