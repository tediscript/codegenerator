<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/resource/edit/' . $resource['resource_id']; ?>" method="POST">
            Nama:<br/>
            <input type="text" name="resource_id" value="<?php echo set_value('resource_id', $resource['resource_id']); ?>" /><br/>
            <input type="text" name="description" value="<?php echo set_value('description', $resource['description']); ?>" /><br/>
            <input type="text" name="location" value="<?php echo set_value('location', $resource['location']); ?>" /><br/>
            <input type="submit" value="Edit" />
        </form>
    </body>
</html>
