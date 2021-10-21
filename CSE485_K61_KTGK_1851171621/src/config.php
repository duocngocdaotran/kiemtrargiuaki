<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'CSE485_K61_KTGK_1851171621';
const DB_PORT = 3306;


function connection()
{
    $connection = mysqli_connect(DB_HOST, DB_USERNAME,
        DB_PASSWORD, DB_NAME, DB_PORT);

//nếu kết nối không thành công thì hiển thị thông báo lỗi
    if (!$connection) {
        die("Kết nối thất bại." . mysqli_connect_error());
    }
    return $connection;
}


function selectbenhnhan()
{
    $connection = connection();
    $sql_select="SELECT * FROM patient ";
    $results = mysqli_query($connection, $sql_select);
    $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
}