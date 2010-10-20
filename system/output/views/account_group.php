<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/account_group/add' ?>">Kategori Add</a><br/>
        <?php echo $pagination; ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Account Group Id</th>
                    <th>Account Id</th>
                    <th>Group Id</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($account_group as $item): ?>
                    <tr>
                        <td><?php echo $item['account_group_id']; ?></td>
                        <td><?php echo $item['account_id']; ?></td>
                        <td><?php echo $item['group_id']; ?></td>
                        <td><a href="<?php echo site_url() . '/account_group/edit/' . $item['account_group_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/account_group/delete/' . $item['account_group_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>