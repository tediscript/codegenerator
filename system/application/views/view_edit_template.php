<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="{php_open} echo site_url() . '/{table_name}/edit/' . ${table_name}['{primary_key}']; {php_close}" method="POST">
            Nama:<br/>{table_fields_view_edit}
            <input type="text" name="{table_field}" value="{php_open} echo set_value('{table_field}', ${table_name}['{table_field}']); {php_close}" /><br/>{/table_fields_view_edit}
            <input type="submit" value="Edit" />
        </form>
    </body>
</html>
