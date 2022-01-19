<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "select *from crud where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$mobile = $row['mobile'];
$email = $row['email'];
$password = $row['password'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "update crud set id=$id,name='$name',mobile='$mobile',email='$email',password='$password' where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo "update successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>crud</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" autocomplete="off" placeholder="enter your name" value=<?php echo $name; ?>>

            </div>
            <div class="mb-3">
                <label class="form-label">mobile</label>
                <input type="text" class="form-control" name="mobile" m autocomplete="off" value=<?php echo $mobile; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="email" class="form-control" name="email" autocomplete="off" value=<?php echo $email; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value=<?php echo $password; ?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>


</body>

</html>