<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/property/edit/' . $property['property_id']; ?>" method="POST">
            Nama:<br/>
            <input type="text" name="kategori_id" value="<?php echo set_value('kategori_id', $property['kategori_id']); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama', $property['nama']); ?>" /><br/>
            <input type="text" name="parent_id" value="<?php echo set_value('parent_id', $property['parent_id']); ?>" /><br/>
            <input type="text" name="kontak_id" value="<?php echo set_value('kontak_id', $property['kontak_id']); ?>" /><br/>
            <input type="text" name="instansi" value="<?php echo set_value('instansi', $property['instansi']); ?>" /><br/>
            <input type="text" name="gelar_depan" value="<?php echo set_value('gelar_depan', $property['gelar_depan']); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama', $property['nama']); ?>" /><br/>
            <input type="text" name="gelar_belakang" value="<?php echo set_value('gelar_belakang', $property['gelar_belakang']); ?>" /><br/>
            <input type="text" name="jabatan" value="<?php echo set_value('jabatan', $property['jabatan']); ?>" /><br/>
            <input type="text" name="alamat" value="<?php echo set_value('alamat', $property['alamat']); ?>" /><br/>
            <input type="text" name="telp" value="<?php echo set_value('telp', $property['telp']); ?>" /><br/>
            <input type="text" name="faks" value="<?php echo set_value('faks', $property['faks']); ?>" /><br/>
            <input type="text" name="handphone" value="<?php echo set_value('handphone', $property['handphone']); ?>" /><br/>
            <input type="text" name="email" value="<?php echo set_value('email', $property['email']); ?>" /><br/>
            <input type="text" name="temp" value="<?php echo set_value('temp', $property['temp']); ?>" /><br/>
            <input type="text" name="kontak_id" value="<?php echo set_value('kontak_id', $property['kontak_id']); ?>" /><br/>
            <input type="text" name="instansi" value="<?php echo set_value('instansi', $property['instansi']); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama', $property['nama']); ?>" /><br/>
            <input type="text" name="jabatan" value="<?php echo set_value('jabatan', $property['jabatan']); ?>" /><br/>
            <input type="text" name="alamat" value="<?php echo set_value('alamat', $property['alamat']); ?>" /><br/>
            <input type="text" name="telp" value="<?php echo set_value('telp', $property['telp']); ?>" /><br/>
            <input type="text" name="faks" value="<?php echo set_value('faks', $property['faks']); ?>" /><br/>
            <input type="text" name="handphone" value="<?php echo set_value('handphone', $property['handphone']); ?>" /><br/>
            <input type="text" name="email" value="<?php echo set_value('email', $property['email']); ?>" /><br/>
            <input type="text" name="kategori_id" value="<?php echo set_value('kategori_id', $property['kategori_id']); ?>" /><br/>
            <input type="text" name="kontak_kategori_id" value="<?php echo set_value('kontak_kategori_id', $property['kontak_kategori_id']); ?>" /><br/>
            <input type="text" name="kontak_id" value="<?php echo set_value('kontak_id', $property['kontak_id']); ?>" /><br/>
            <input type="text" name="kategori_id" value="<?php echo set_value('kategori_id', $property['kategori_id']); ?>" /><br/>
            <input type="text" name="property_id" value="<?php echo set_value('property_id', $property['property_id']); ?>" /><br/>
            <input type="text" name="value" value="<?php echo set_value('value', $property['value']); ?>" /><br/>
            <input type="submit" value="Edit" />
        </form>
    </body>
</html>
