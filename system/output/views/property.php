<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/property/add' ?>">Kategori Add</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Property Id</th>
                    <th>Value</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($property as $item): ?>
                    <tr>
                        <td><?php echo $item['property_id']; ?></td>
                        <td><?php echo $item['value']; ?></td>
                        <td><a href="<?php echo site_url() . '/property/edit/' . $item['property_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/property/delete/' . $item['property_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>