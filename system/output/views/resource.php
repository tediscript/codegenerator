<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/resource/add' ?>">Kategori Add</a><br/>
        <?php echo $pagination; ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Resource Id</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resource as $item): ?>
                    <tr>
                        <td><?php echo $item['resource_id']; ?></td>
                        <td><?php echo $item['description']; ?></td>
                        <td><?php echo $item['location']; ?></td>
                        <td><a href="<?php echo site_url() . '/resource/edit/' . $item['resource_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/resource/delete/' . $item['resource_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>