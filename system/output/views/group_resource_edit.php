<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/group_resource/edit/' . $group_resource['group_resource_id']; ?>" method="POST">
            Nama:<br/>
            <input type="text" name="group_resource_id" value="<?php echo set_value('group_resource_id', $group_resource['group_resource_id']); ?>" /><br/>
            <input type="text" name="group_id" value="<?php echo set_value('group_id', $group_resource['group_id']); ?>" /><br/>
            <input type="text" name="resource_id" value="<?php echo set_value('resource_id', $group_resource['resource_id']); ?>" /><br/>
            <input type="submit" value="Edit" />
        </form>
    </body>
</html>
