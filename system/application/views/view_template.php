<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="{php_open} echo site_url() . '/{table_name}/add' {php_close}">Kategori Add</a>
        <table border="1">
            <thead>
                <tr>{table_fields_view1}
                    <th>{table_field_humanized}</th>{/table_fields_view1}
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                {php_open} foreach (${table_name} as $item): {php_close}
                    <tr>{table_fields_view2}
                        <td>{php_open} echo $item['{table_field}']; {php_close}</td>{/table_fields_view2}
                        <td><a href="{php_open} echo site_url() . '/{table_name}/edit/' . $item['{primary_key}']; {php_close}">edit</a></td>
                        <td><a href="{php_open} echo site_url() . '/{table_name}/delete/' . $item['{primary_key}']; {php_close}" onclick="return confirm('Are you sure?')">delete</a></td>
                    </tr>
                {php_open} endforeach; {php_close}
            </tbody>
        </table>
    </body>
</html>