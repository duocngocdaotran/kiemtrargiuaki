<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm bệnh nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<center><h3> Thêm bệnh nhân</h3></center>
<br>
<center><div class="col-md-6">
        <form method="post" action="">
            <div class="input-group">
                <div class="col-md-5">
                    First Name
                </div>
                <div class="col-md-7">
                    <input type="text" placeholder="First Name" name="firstname">
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Last Name
                </div>
                <div class="col-md-7">
                    <input type="text" placeholder="Last Name" name="lastname">
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Date Of Birth
                </div>
                <div class="col-md-7">
                    <input type="date" name="dateofbirth">
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
                    <input type="number" name="mobile">
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Email
                </div>
                <div class="col-md-7">
                    <input type="text" placeholder="Email" name="email">
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Height
                </div>
                <div class="col-md-7">
                    <input type="number" name="height">
                </div>
            </div>
            <div class="input-group">
                <div class="col-md-5">
                    Weight
                </div>
                <div class="col-md-7">
                    <input type="number" name="weight">
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
        $sql_insert="INSERT INTO `patient` (`firstname`,`lastname`,`dateofbirth`,`gender`,`mobile`,`email`,`height`,`weight`,`blood_type`)
                        VALUE ('$firstname','$lastname','$dateofbirth','$gender','$mobile','$email','$height','$weight','$blood_type')";
        $is_insert = mysqli_query($con, $sql_insert);
        echo "<br />";
        if ($is_insert) {
            echo "Thêm bệnh nhân thành công";
        } else {
            echo "Thêm bệnh nhân thất bại";
        }
    }
}
?>
</body>
</html>
