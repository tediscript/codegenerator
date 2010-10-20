<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/group_resource/add' ?>">Kategori Add</a><br/>
        <?php echo $pagination; ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Group Resource Id</th>
                    <th>Group Id</th>
                    <th>Resource Id</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($group_resource as $item): ?>
                    <tr>
                        <td><?php echo $item['group_resource_id']; ?></td>
                        <td><?php echo $item['group_id']; ?></td>
                        <td><?php echo $item['resource_id']; ?></td>
                        <td><a href="<?php echo site_url() . '/group_resource/edit/' . $item['group_resource_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/group_resource/delete/' . $item['group_resource_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>