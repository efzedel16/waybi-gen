<?php
declare(strict_types=1);

    require 'funcs.php';

    $students = query('SELECT * FROM students');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Yaa Bunayya Alumni List | WayBi Gen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
</head>
<body class="text-center">

    <!--title-->
    <h1 class="my-5">Yaa Bunayya Alumni List</h1>
    <!--title-->

    <!--students-->
    <table class="table table-bordered w-100">
        <!--row-->
        <tr class="bg-dark">
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>JK</th>
            <th>TTL</th>
            <th>Gen</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Alamat</th>
            <th>SMP</th>
            <th>SMA/SMK, Jurusan</th>
            <th>Universitas, Fakultas</th>
            <th>Action</th>
        </tr>
        <!--row-->

        <!--student-->
        <?php $index = 1; ?>
        <?php
        foreach ($students as $student) : ?>
        <tr>
            <td><?= $index; ?></td>
            <td>
                <img src="img/fauzul.jpg"
                     alt=""
                     width="50px">
            </td>
            <td><?= $student['name']; ?></td>
            <td><?= $student['gender']; ?></td>
            <td>
                <a href="">Change</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <?php $index++ ?>
        <?php endforeach; ?>
        <!--student-->
    </table>
    <!--students-->

</body>
</html>