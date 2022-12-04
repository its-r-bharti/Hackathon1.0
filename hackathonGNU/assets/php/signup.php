<?php
include('database.php');
$msg = "";
if (isset($_POST['Register'])) {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Phone = $_POST['Phone'];
    // $query = "select * from user where Email='$Email'";
    $check = mysqli_num_rows(mysqli_query($connection,"select * from user where Email='$Email'"));
    if ($check > 0) {
        $msg = "This email id is already exist";
    }
    else{


    $query = "insert into user (FirstName,LastName,Email,Password,Phone)values('$FirstName','$LastName','$Email','$Password','$Phone')";
    // $query = "insert into user value(null, '$_POST[FirstName]','$_POST[LastName]',
    //         '$_POST[Email]','$_POST[Password]',$_POST[]),$_Status=0";
    $query_run = mysqli_query($connection,$query);
    // $msg = "we've just send you a verification email on your email id <strong>$Email</strong><br>
    // plz check your inbox  and confirm your email. ";
        }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GNA HACKATHON_1.O</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/responsive.css">
    <script src="https://kit.fontawesome.com/f073f3d2c7.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="js/index.js"></script>
    <style>
        .container{
            margin: 80px 0px;
            text-align: center;
            animation: ZoomOut;
            animation-duration: 4s;
        }
    </style>

</head>

<body>
    <div class="body">
        <!-- starting of heading -->
        <nav class="header">
            <div class="rightheader">
                <!-- <img src="assets/HEADER.png" alt="" srcset=""> -->
                <P class="logo"><span>🍁 G</span>N<span>U  </span>HACK<span>ATHON</span>1.<span>O</span></P>
            </div>
            <div class="leftheader">
                <ul>
                <li><a href="../../index.html">Home</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">TEAM</a></li>
                    
                    <li><a href="avijeet7070.hashnode.dev" target="_blank">BLOGS</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="signIn.php" target="_blank">Login</a></li>
                </ul>
                <div class="burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </nav>

        <section class="container">
            <div class="row">

                <div class="col-md-4"></div>

                <div class="col-md-6">
                    <h1 style="color:white">Register</h1>
                    <a href="signIn.php">Have a account <strong>Sign In</strong></a>
                    <br>
                    <br>
                    <form action="" method="post">
                        <div class="row mb-3">
                            <label for="inputEmail3" style="color:white" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-5">
                                <input type="text" name="FirstName" class="form-control" placeholder="First name" aria-label="First name" required>
                            </div>
                            <div class="col-sm-5">
                                <input type="text" name="LastName" class="form-control" placeholder="Last name" aria-label="Last name" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" style="color:white" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="Email" class="form-control" placeholder="email123@gmail.com" id="inputEmail3" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" style="color:white" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="Password" class="form-control" id="inputPassword" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phonenumber" style="color:white" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="number" name="Phone" class="form-control" id="inputNumber" required>
                            </div>
                        </div>
                       

                        
                        
                        <button type="submit" name="Register" class="btn btn-primary">Register</button>
                    
                    <br>
                    <br>
                    
                    <?php 
                   
                    echo "<font color='blue'>$msg.</font>";
                    ?>
                   
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>





        </section>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>