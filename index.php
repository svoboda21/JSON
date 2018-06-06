<?php
    $json=file_get_contents(__DIR__.'/address.json');
    $data=json_decode($json,true);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Телефонная книга</title>
</head>
<body>
<table border="1">
    <tr>
    <td>Имя</td>
    <td>Фамилия</td>
    <td>Адрес</td>
    <td>Телефон</td>
    </tr>
<?php
    foreach ($data as $key){?>
<tr>
    <td><?php echo $key['firstName'];?></td>
    <td><?php echo $key['lastName'];?></td>
    <td><?php echo $key['address'];?></td>
    <td><?php echo $key['phoneNumber'];?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>