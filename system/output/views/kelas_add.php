<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/kelas/add' ?>" method="POST">
            Nama:<br/>
            <input type="text" name="kelas_id" value="<?php echo set_value('kelas_id'); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama'); ?>" /><br/>
            <input type="text" name="semester" value="<?php echo set_value('semester'); ?>" /><br/>
            <input type="text" name="tahun_ajaran" value="<?php echo set_value('tahun_ajaran'); ?>" /><br/>
            <input type="submit" value="Add" />
        </form>
    </body>
</html>