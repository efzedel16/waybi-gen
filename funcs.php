<?php
declare(strict_types=1);

    //connect database
    $connect = mysqli_connect('localhost', 'root', '', 'yaabunayyaalumni', 3306);

    //func query
    function query($query) {
        global $connect;
        $result = mysqli_query($connect, $query);
        $students = [];
        while ($student = mysqli_fetch_assoc($result)) {
            $students[] = $student;
        }
        return $students;
    }