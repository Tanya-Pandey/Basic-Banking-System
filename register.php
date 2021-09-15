<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><b>CREATE NEW USER</b></title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>

<?php
    $write=FALSE;
    include 'config.php';

    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $balance=$_POST['balance'];
        $sql="insert into users(id,name,email,balance) values('{$id}','{$name}','{$email}','{$balance}')";
        $result=mysqli_query($conn,$sql);
        if($result){
            $write=true;
        }
     }
?>

<body style="background:url('background2.jfif'); background-repeat:no-repeat; background-attachment: fixed; background-size: cover;"  onload="load()">
    <!-- preloader -->
    <div id="loading"></div>

    <header id="create_user_header">
        <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">

        <img src="logo.png" alt="logo" style="width:40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" index.php "><b>HOME</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about"><b>ABOUT</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services"><b>SERVICES</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact"><b>CONTACT</b></a>
          </li>
        </ul>

        
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

        <br><br>

        <div class="main_form">

            <?php 
                if ($write==TRUE) {
                    echo "<h6 align='center' style='color:green;' class='mb-3'>New User Added Successfully!!<br> <span style='color:red;'>Redirecting..</span></h6>";
                    echo "<script>
                            setTimeout(redirect, 5000);
                            
                            function redirect(){
                                window.location='transfermoney.php';
                            }
                        </script>";
                }

            ?>

            <div class="create_title text-center mb-3">
                <h2><b>CREATE NEW USER</b></h2>
            </div>


            <br>

            <div class="container create_form">

                <form method="post">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingNumber" placeholder="Id"  name="id" required>
                        <label for="floatingName">Id*</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingName" placeholder="name"  name="name" required>
                        <label for="floatingName">Name*</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
                            required>
                        <label for="floatingInput">Email address*</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingBalance" name="balance" placeholder="balance"
                            max="1000000" min="0" required>
                        <label for="floatingBalance">Add Balance*</label>
                    </div> <br>
                    <div class="btn_grp">
                        <div>
                            <input type="submit" name="submit" value="Create User" class="btn btn-primary btn-lg">
                        </div>
                        <div>
                            <input type="reset" value="Reset" name="reset" class="btn btn-outline-danger btn-lg">
                        </div>
                    </div>
                </form>
                
            </div> <br>

        </div>

        

    </header>

    <!-- Footer -->
<footer style="margin-top:200px;">
    <div class="follow">
      <h3 style="color: black; font-family: 'Baloo Bhai 2', cursive; font-size: 25px;">Follow Us</h3>
      <div class="social">
        <a href="#facebook" class="facebook">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="#twitter" class="twitter">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="#linkedin" class="linkedin">
          <i class="fa fa-linkedin"></i>
        </a>
        <a href="#instagram" class="instagram">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <p class="text-copy">
      Copyright &copy; 2021 All rights reserved
    </p>
  </footer>
<!-- End Footer -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>