<?php
session_start();

include('database.php');
$msg = "";
if(isset($_POST['Login'])){
    $query= "select * from user where Email = '$_POST[Email]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc( $query_run)){
        if ($row['Email']==$_POST['Email']) {
            if ($row['Password']==$_POST['Password']){
                $_SESSION['FirstName'] = $row['FirstName'];
				$_SESSION['Email'] = $row['Email'];
                header("location: ../user/user_dashbord.php");
            }
            if(($row['Password']!=$_POST['Password'])){
                $msg = "Please enter correct login detail";
            }
               
            }
            
            
    }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GNA HACKATHON_1.O


    </title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/responsive.css">
    <script src="https://kit.fontawesome.com/f073f3d2c7.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="js/index.js"></script>
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
                    <li><a href="signup.php" target="_blank">SIGN UP</a></li>
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

                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h1 style="color:white">Login</h1>
                    <a href="signup.php">need an account <strong>Sign up</strong></a>
                    <br>
                    <br>
                    <form method="post" action="">

                        <div class="row mb-3">
                            <label for="inputEmail3" style="color:white" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="Email" class="form-control" placeholder="email123@gmail.com" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" style="color:white" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="Password" class="form-control" id="inputPassword">
                            </div>
                        </div>



                                <button type="submit" name="Login" class="btn btn-primary">Login</button>
                               
                               <br><br><?php 
                   
                    echo "<font color='red'>$msg</font>";
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