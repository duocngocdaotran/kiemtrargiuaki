<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hiển thị danh sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
        <center><h3> Danh sách bệnh nhân</h3></center>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">firstname</th>
                <th scope="col">lastname</th>
                <th scope="col">dateofbirth</th>
                <th scope="col">gender</th>
                <th scope="col">blood_type</th>

            </tr>
            </thead>
            <tbody>
            <?php
                $connection = connection();
                $sql_select="SELECT * FROM patient ";
                 $results = mysqli_query($connection, $sql_select);
                 $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
                foreach ( $users as $user):?>
            <tr>
                <td>
                    <?php echo $user['firstname']?>
                </td>
                <td>
                    <?php echo $user['lastname']?>
                </td>
                <td>
                    <?php echo $user['dateofbirth']?>
                </td>
                <td>
                    <?php echo $user['gender']?>
                </td>
                <td>
                    <?php echo $user['blood_type']?>
                </td>
                <td>
                    <a href="chitiet.php?id=<?php echo $user['patientid']?>">Xem chi tiết</a>
                </td>
                <td>
                    <a href="sua.php?id=<?php echo $user['patientid']?>">Sửa</a>

                </td>
                <td>
                    <a href="xoa.php?id=<?php echo $user['patientid']?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
<button><a href="them.php">Thêm bệnh nhân</a></button>
</body>
</html>