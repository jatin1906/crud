<!doctype html>
<html lang="en">

<head>
    <style>
    .j {
        text-decoration: none;
    }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- link some jquery external file from the internet  .to make table  -->


    <!-- table css -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">

    <!-- jqeury -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- table js -->
    <script src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>


    <title>Crud-Operation</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">User Information</h1>
        <table class="table" id="myTable">
            <thead>
                <tr class="bg-dark text-white">
                    <th scope="col">Sr.No</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
        include 'dbconnect.php';
           
        $sql="SELECT * FROM `info`";
        $query=mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_array($query))
        {
          ?>
                <tr>

                    <td><?php echo $row['Sr.no']?></td>
                    <td><?php echo $row['First Name']?></td>
                    <td><?php echo $row['Last Name']?></td>
                    <td><?php echo $row['Email']?></td>
                    <td><?php echo $row['Phone Number']?></td>
                    <td><?php echo $row['Gender']?></td>
                    <td><?php echo $row['Address']?></td>
                    <td><button class="btn-success btn "> <a href=" Update.php?id=<?php echo $row['Sr.no']; ?> "
                                class="text-white j">Update</a></button></td>
                    <td><button class="btn-danger btn"> <a href=" Delete.php?id=<?php echo $row['Sr.no']; ?>"
                                class="text-white j">Delete</a></button></td>
                </tr>

                <?php
        }
    ?>

            </tbody>
        </table>
    </div>


    <!--table function -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>


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