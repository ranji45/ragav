<?php include 'connect.php'; 
$id=$_GET['updateid'];

$sql="Select * from `demo_one` where id=$id";
$result=mysqli_query($conn,$sql);


$row=mysqli_fetch_assoc($result);
$nameone=$row['name'];
$emailone=$row['email'];
$mobileone=$row['mobile'];
$passwordone=$row['password'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `demo_one` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
       header('location:display.php');
        
    }
    else{
        die(mysqli_error($conn));
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label  class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" autocomplete="off" value=<?php echo $nameone; ?>>
            </div>
            <div class="mb-3">
                <label  class="form-label">Email</label>
                <input type="email" name="email" class="form-control" autocomplete="off" value=<?php echo $emailone; ?>>
            </div>
            <div class="mb-3">
                <label  class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" autocomplete="off" value=<?php echo $mobileone; ?>>
            </div>
            <div class="mb-3">
                <label  class="form-label">Password</label>
                <input type="password" name="password" class="form-control" autocomplete="off" value=<?php echo $passwordone; ?>>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>


    </div>
</body>

</html>
