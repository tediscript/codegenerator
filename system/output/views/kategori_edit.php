<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/kategori/edit/' . $kategori['kategori_id']; ?>" method="POST">
            Nama:<br/>
            <input type="text" name="kategori_id" value="<?php echo set_value('kategori_id', $kategori['kategori_id']); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama', $kategori['nama']); ?>" /><br/>
            <input type="text" name="parent_id" value="<?php echo set_value('parent_id', $kategori['parent_id']); ?>" /><br/>
            <input type="submit" value="Edit" />
        </form>
    </body>
</html>
