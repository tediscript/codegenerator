<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/kontak_kategori/edit/' . $kontak_kategori['kontak_kategori_id']; ?>" method="POST">
            Nama:<br/>
            <input type="text" name="kontak_kategori_id" value="<?php echo set_value('kontak_kategori_id', $kontak_kategori['kontak_kategori_id']); ?>" /><br/>
            <input type="text" name="kontak_id" value="<?php echo set_value('kontak_id', $kontak_kategori['kontak_id']); ?>" /><br/>
            <input type="text" name="kategori_id" value="<?php echo set_value('kategori_id', $kontak_kategori['kategori_id']); ?>" /><br/>
            <input type="submit" value="Edit" />
        </form>
    </body>
</html>
