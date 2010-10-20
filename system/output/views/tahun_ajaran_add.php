<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/tahun_ajaran/add' ?>" method="POST">
            Nama:<br/>
            <input type="text" name="periode" value="<?php echo set_value('periode'); ?>" /><br/>
            <input type="submit" value="Add" />
        </form>
    </body>
</html>