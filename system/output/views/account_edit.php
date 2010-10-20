<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/account/edit/' . $account['account_id']; ?>" method="POST">
            Nama:<br/>
            <input type="text" name="account_id" value="<?php echo set_value('account_id', $account['account_id']); ?>" /><br/>
            <input type="text" name="username" value="<?php echo set_value('username', $account['username']); ?>" /><br/>
            <input type="text" name="password" value="<?php echo set_value('password', $account['password']); ?>" /><br/>
            <input type="submit" value="Edit" />
        </form>
    </body>
</html>
