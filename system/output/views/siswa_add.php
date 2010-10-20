<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/siswa/add' ?>" method="POST">
            Nama:<br/>
            <input type="text" name="siswa_id" value="<?php echo set_value('siswa_id'); ?>" /><br/>
            <input type="text" name="nis" value="<?php echo set_value('nis'); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama'); ?>" /><br/>
            <input type="submit" value="Add" />
        </form>
    </body>
</html>