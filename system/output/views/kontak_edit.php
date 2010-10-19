<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/kontak/edit/' . $kontak['kontak_id']; ?>" method="POST">
            Nama:<br/>
            <input type="text" name="kategori_id" value="<?php echo set_value('kategori_id', $kontak['kategori_id']); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama', $kontak['nama']); ?>" /><br/>
            <input type="text" name="parent_id" value="<?php echo set_value('parent_id', $kontak['parent_id']); ?>" /><br/>
            <input type="text" name="kontak_id" value="<?php echo set_value('kontak_id', $kontak['kontak_id']); ?>" /><br/>
            <input type="text" name="instansi" value="<?php echo set_value('instansi', $kontak['instansi']); ?>" /><br/>
            <input type="text" name="gelar_depan" value="<?php echo set_value('gelar_depan', $kontak['gelar_depan']); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama', $kontak['nama']); ?>" /><br/>
            <input type="text" name="gelar_belakang" value="<?php echo set_value('gelar_belakang', $kontak['gelar_belakang']); ?>" /><br/>
            <input type="text" name="jabatan" value="<?php echo set_value('jabatan', $kontak['jabatan']); ?>" /><br/>
            <input type="text" name="alamat" value="<?php echo set_value('alamat', $kontak['alamat']); ?>" /><br/>
            <input type="text" name="telp" value="<?php echo set_value('telp', $kontak['telp']); ?>" /><br/>
            <input type="text" name="faks" value="<?php echo set_value('faks', $kontak['faks']); ?>" /><br/>
            <input type="text" name="handphone" value="<?php echo set_value('handphone', $kontak['handphone']); ?>" /><br/>
            <input type="text" name="email" value="<?php echo set_value('email', $kontak['email']); ?>" /><br/>
            <input type="text" name="temp" value="<?php echo set_value('temp', $kontak['temp']); ?>" /><br/>
            <input type="submit" value="Edit" />
        </form>
    </body>
</html>
