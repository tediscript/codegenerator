<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/group/add' ?>" method="POST">
            Nama:<br/>
            <input type="text" name="group_id" value="<?php echo set_value('group_id'); ?>" /><br/>
            <input type="text" name="name" value="<?php echo set_value('name'); ?>" /><br/>
            <input type="submit" value="Add" />
        </form>
    </body>
</html>