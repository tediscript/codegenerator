<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/kontak_importer/edit/' . $kontak_importer['kontak_id']; ?>" method="POST">
            Nama:<br/>
            <input type="text" name="kategori_id" value="<?php echo set_value('kategori_id', $kontak_importer['kategori_id']); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama', $kontak_importer['nama']); ?>" /><br/>
            <input type="text" name="parent_id" value="<?php echo set_value('parent_id', $kontak_importer['parent_id']); ?>" /><br/>
            <input type="text" name="kontak_id" value="<?php echo set_value('kontak_id', $kontak_importer['kontak_id']); ?>" /><br/>
            <input type="text" name="instansi" value="<?php echo set_value('instansi', $kontak_importer['instansi']); ?>" /><br/>
            <input type="text" name="gelar_depan" value="<?php echo set_value('gelar_depan', $kontak_importer['gelar_depan']); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama', $kontak_importer['nama']); ?>" /><br/>
            <input type="text" name="gelar_belakang" value="<?php echo set_value('gelar_belakang', $kontak_importer['gelar_belakang']); ?>" /><br/>
            <input type="text" name="jabatan" value="<?php echo set_value('jabatan', $kontak_importer['jabatan']); ?>" /><br/>
            <input type="text" name="alamat" value="<?php echo set_value('alamat', $kontak_importer['alamat']); ?>" /><br/>
            <input type="text" name="telp" value="<?php echo set_value('telp', $kontak_importer['telp']); ?>" /><br/>
            <input type="text" name="faks" value="<?php echo set_value('faks', $kontak_importer['faks']); ?>" /><br/>
            <input type="text" name="handphone" value="<?php echo set_value('handphone', $kontak_importer['handphone']); ?>" /><br/>
            <input type="text" name="email" value="<?php echo set_value('email', $kontak_importer['email']); ?>" /><br/>
            <input type="text" name="temp" value="<?php echo set_value('temp', $kontak_importer['temp']); ?>" /><br/>
            <input type="text" name="kontak_id" value="<?php echo set_value('kontak_id', $kontak_importer['kontak_id']); ?>" /><br/>
            <input type="text" name="instansi" value="<?php echo set_value('instansi', $kontak_importer['instansi']); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama', $kontak_importer['nama']); ?>" /><br/>
            <input type="text" name="jabatan" value="<?php echo set_value('jabatan', $kontak_importer['jabatan']); ?>" /><br/>
            <input type="text" name="alamat" value="<?php echo set_value('alamat', $kontak_importer['alamat']); ?>" /><br/>
            <input type="text" name="telp" value="<?php echo set_value('telp', $kontak_importer['telp']); ?>" /><br/>
            <input type="text" name="faks" value="<?php echo set_value('faks', $kontak_importer['faks']); ?>" /><br/>
            <input type="text" name="handphone" value="<?php echo set_value('handphone', $kontak_importer['handphone']); ?>" /><br/>
            <input type="text" name="email" value="<?php echo set_value('email', $kontak_importer['email']); ?>" /><br/>
            <input type="text" name="kategori_id" value="<?php echo set_value('kategori_id', $kontak_importer['kategori_id']); ?>" /><br/>
            <input type="submit" value="Edit" />
        </form>
    </body>
</html>
