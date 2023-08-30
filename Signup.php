<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Data Archiving</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

 <style type="text/css">
      #loader{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('img/loading.gif') 50% 50% no-repeat rgb(249,249,249);
        opacity: 1;
    }
 </style>
</head>
<div class="" id="modalRegisterForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<form action="create_user.php" method="POST">
<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header text-center">
     <h4 class="modal-title w-100 font-weight-bold"><i class="fas fa-user-plus"></i> Add User Student</h4>
         x<a class="" href="login.html">x </a>
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
   <div class="modal-body mx-3">
        <div class="md-form mb-5">

     </div>
     <div class="md-form mb-5"><i>NAME</i>
       <i class="fas fa-user prefix grey-text"></i>
       <input type="text" id="orangeForm-name" name="name" class="form-control validate">
       <label data-error="wrong" data-success="right" for="orangeForm-name"></label>
     </div>
     <div class="md-form mb-5"><i>EMAIL</i>
       <i class="fas fa-envelope prefix grey-text"></i>
       <input type="email" id="orangeForm-email" name="email_address" class="form-control validate" required="">
       <label data-error="wrong" data-success="right" for="orangeForm-email"></label>
     </div>

     <div class="md-form mb-4"><i>PASSWORD</i>
       <i class="fas fa-lock prefix grey-text"></i>
       <input type="password" id="orangeForm-pass" name="user_password" class="form-control validate" required="">
       <label data-error="wrong" data-success="right" for="orangeForm-pass"></label>
     </div>
      <div class="md-form mb-4">
       <i class="fas fa-user prefix grey-text"></i>
       <input type="textbox" id="orangeForm-pass" name="user_status" value = "Student" class="form-control validate" readonly="">
       <label data-error="wrong" data-success="right" for="orangeForm-pass"></label>
     </div>
   </div>
   <div class="modal-footer d-flex justify-content-center">
     <button class="btn btn-info" name="reguser">Sign up</button>
   </div>
 </div>
</div>
</div>
</form>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

  <!-- Start your project here-->
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
    <a class="navbar-brand" href="index.html"><img src="js/img/Files_Download.png" width="33px" height="33px"> <font color="#F0B56F">D</font>ata <font color="#F0B56F">A</font>rchiving <font color="#F0B56F">W</font>ebsite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fab fa-facebook-f"></i> Facebook
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fab fa-instagram"></i> Instagram</a>
      </li> -->
  <!--     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Login </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="#">Login</a>

        </div>
      </li> -->
    </ul>
  </div>
</nav>

<!--/.Navbar -->
<br><Br>

</html>
