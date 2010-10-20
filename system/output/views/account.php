<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo site_url() . '/account/add' ?>">Kategori Add</a><br/>
        <?php echo $pagination; ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Account Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($account as $item): ?>
                    <tr>
                        <td><?php echo $item['account_id']; ?></td>
                        <td><?php echo $item['username']; ?></td>
                        <td><?php echo $item['password']; ?></td>
                        <td><a href="<?php echo site_url() . '/account/edit/' . $item['account_id']; ?>">edit</a></td>
                        <td><a href="<?php echo site_url() . '/account/delete/' . $item['account_id']; ?>" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>