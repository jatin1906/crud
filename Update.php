<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud-Operation</title>
</head>

<body>
    <!-- navbar-start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data</a>
                    </li>
                    <li class="nav-item dropdown">


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar End -->

    <!-- form-start -->
    <div class="container mt-3">
        <h1 class="text-center">Update Data</h1>



        <form method="POST">
            <?php
    include 'dbconnect.php';

   
  
   
if(isset($_POST['done'])){
    $id=$_GET['id'];

    $show="SELECT * FROM `info` WHERE Sr.no={$id}";

    $showdata=mysqli_query($conn,$show);

    $data=mysqli_fetch_array($showdata);

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    // Update quires
    // $up="UPDATE `info` SET `First Name` = '$fname', `Last Name` = '$lname', `Email` = '$email', `Phone Number` = '$phone', `Gender` = '$gender', `Address` = '$address' WHERE `info`.`Sr.no` = '$id'";
    //  $result=mysqli_query($conn,$up);
    // header('location:display.php');
   
}


?>
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" value="<?php echo $data['First Name'] ;?>" class="form-control" name="fname"
                    id="fname" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" value="<?php echo $arrdata['Last Name']?>" class="form-control" name="lname"
                    id="lname" aria-describedby="emailHelp" required>

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="<?php echo $arrdata['email']?>" class="form-control" name="email" id="email"
                    aria-describedby="emailHelp" required>

            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" value="<?php echo $arr['phone']?>" class="form-control" name="phone" id="phone"
                    aria-describedby="emailHelp" required>

            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" value="<?php echo $arr['gender']?>" class="form-control" name="gender" id="gender"
                    aria-describedby="emailHelp" required>

            </div>
            <!-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">File</label>
                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>   
            </div> -->
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" value="<?php echo $arr['address']?>" name="address" id="address"
                    aria-describedby="emailHelp" required>
            </div>


            <button type="submit" class="btn btn-primary" name="done">Submit</button>
        </form>
    </div>
    <!-- form End  -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>