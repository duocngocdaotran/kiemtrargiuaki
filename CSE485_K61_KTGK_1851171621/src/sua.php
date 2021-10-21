<?php
require_once "config.php";
$id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa bệnh nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<center><h3> Sửa thông tin bệnh nhân</h3></center>
<br>
<center><div class="col-md-6">
        <form method="post" action="">
            <?php
            $connection = connection();
            $sql_select="SELECT * FROM patient where `patientid`='$id' ";
            $results = mysqli_query($connection, $sql_select);
            $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
            foreach ( $users as $user):?>
            <div class="input-group">
                <div class="col-md-5">
                    Firstname
                </div>
                <div class="col-md-7">
                    <input type="text" placeholder="firstname" name="firstname" value="<?php echo $user['firstname']; ?>">
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Lastname
                </div>
                <div class="col-md-7">
                    <input type="text" placeholder="lastname" name="lastname" value="<?php echo $user['lastname']; ?>">
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Dateofbirth
                </div>
                <div class="col-md-7">
                    <input type="date" name="dateofbirth" value="<?php echo $user['dateofbirth']; ?>">
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Gender
                </div>
                <div class="col-md-7">
                    <input type="radio" name="gender" value="nam">Nam
                    <input type="radio" name="gender" value="nu">Nu
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Mobile
                </div>
                <div class="col-md-7">
                    <input type="number" name="mobile" value="<?php echo $user['mobile']; ?>">
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Email
                </div>
                <div class="col-md-7">
                    <input type="text" placeholder="Email" name="email" value="<?php echo $user['email']; ?>">
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Height
                </div>
                <div class="col-md-7">
                    <input type="number" name="height" value="<?php echo $user['height']; ?>">
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Weight
                </div>
                <div class="col-md-7">
                    <input type="number" name="weight" value="<?php echo $user['weight']; ?>">
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Blood_type
                </div>
                <div class="col-md-7">
                    <input type="radio" name="blood_type" value="A">A
                    <input type="radio" name="blood_type" value="B">B
                    <input type="radio" name="blood_type" value="AB">AB
                    <input type="radio" name="blood_type" value="O">O
                </div>
            </div>
            <div class="input-group">

                <div class="col-md-5">
                    <input type="submit" name="submit" value="Submit">

                </div>
                <div class="col-md-7">
                    <input type="reset" name="reset" value="Reset">

                </div>
            </div>
    </div>
    </form>
    <?php endforeach;?>
    </div></center>
<?php
if (isset($_POST['submit']))
{
//    xử lý thông tin
    $error='';
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $dateofbirth=$_POST['dateofbirth'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $blood_type=$_POST['blood_type'];
    if($firstname=='')
    {
        $error='FIRSTNAME ERROR';
    }
    elseif ($lastname=='')
    {
        $error='LASTNAME ERROR';
    }
    elseif ($mobile=='')
    {
        $error='MOBILE ERROR';
    }
    elseif ($height=='' || $height <0)
    {
        $error='HEIGHT ERROR';
    }
    elseif ($weight=='' || $weight <0)
    {
        $error='WEIGHT ERROR';
    }
    else
    {
        $con=connection();
        $sql_update="UPDATE `patient` SET `firstname`='$firstname', `lastname`='$lastname', `dateofbirth`='$dateofbirth',
                                            `gender`='$gender',`mobile`='$mobile',`email`='$email',`height`='$height',
                                             `weight`='$weight',`blood_type`='$blood_type' WHERE `patientid`='$id'";

        $is_update = mysqli_query($con, $sql_update);
        echo "<br />";
        if ($is_update) {
            header("Location: hienthi.php");
        } else {
            echo "Sửa thông tin thất bại";
        }
    }
}
?>
</body>
</html>
