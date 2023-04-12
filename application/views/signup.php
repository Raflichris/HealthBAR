<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style media="screen">
    #logo{
      position: absolute;
      top : 0px;
    }

    #header{
      width: 250px;
      height: 50px;
    }

    body{
      background-image: url('assets/background/bg2.jpg')
    }

    .first_col{
      background-color: rgba(255,255,255,0.4)
    }

    .second_col{
      background-color: rgba(255,255,255,0.4)
    }

    .content-logo{
      top: 12px;
    }

    .active{
      width: 100px;
    }

  </style>
</head>
<body>

<nav class="navbar navbar-default fixed-top">
  <div class="container-fluid">
    <div id="header" class="navbar-header">
      <a class="navbar-brand" href="#"><img id="logo" src="assets/logo/hb_alt.png" alt="LOGO"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><center><span class="glyphicon glyphicon-home"></span></center></a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">How This Work</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="first_col">
        <img id="content-logo" src="assets/logo/logo_alt.png" alt="LOGO">
      </div>
    </div>
    <div class="col">
      <div>
        <form method="post">
          <input type="email" name="email" placeholder="Input Your E-mail">
          <input type="password" name="password" placeholder="Input Your Password">
          <input type="radio" name="jenis-akun" value="Customer">
          <input type="radio" name="jenis-akun" value="Dokter">
          <input type="text" name="no-hp" >
          <input class="btn btn-success" type="submit" name="Signup">
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
