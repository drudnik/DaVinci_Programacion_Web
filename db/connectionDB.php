<?php

function connectionDB() {
    // Загружаем параметры подключения
    $config = require 'configDB.php';

    try {
        // Устанавливаем отчёт об ошибках MySQLi
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        // Создаем подключение
        $connect = new mysqli(
            $config['host'],
            $config['user'],
            $config['password'],
            $config['dbname'],
            $config['port']
        );

        // Проверка успешности подключения
        if ($connect->connect_errno) {
            throw new Exception("Ошибка подключения к базе данных: " . $connect->connect_error);
        }

        return $connect;
    } catch (Exception $e) {
        //При возникновении ошибки выполняется переход на страницу error.php
        header("Location: ../pages/error.php");
        exit();
    }
}
?>
