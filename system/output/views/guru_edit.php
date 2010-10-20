<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/guru/edit/' . $guru['guru_id']; ?>" method="POST">
            Nama:<br/>
            <input type="text" name="guru_id" value="<?php echo set_value('guru_id', $guru['guru_id']); ?>" /><br/>
            <input type="text" name="nip" value="<?php echo set_value('nip', $guru['nip']); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama', $guru['nama']); ?>" /><br/>
            <input type="submit" value="Edit" />
        </form>
    </body>
</html>
