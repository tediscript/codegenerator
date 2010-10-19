<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/property/add' ?>" method="POST">
            Nama:<br/>
            <input type="text" name="property_id" value="<?php echo set_value('property_id'); ?>" /><br/>
            <input type="text" name="value" value="<?php echo set_value('value'); ?>" /><br/>
            <input type="submit" value="Add" />
        </form>
    </body>
</html>