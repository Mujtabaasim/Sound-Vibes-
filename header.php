
<?php
session_start();

?>
<!DOCTYPE php>
<php lang="en">

<head>
  <style>
    /* Style the dropdown button */
    .dropbtn {
  background-color: transparent;
  color: white; /* Changed color from black to white */
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown container */
.dropdown {
  position: relative;
  display: inline-block;

}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Show the dropdown menu */
.dropdown:hover .dropdown-content {
  display: block;
}
.log{
  color: white;
}

    </style>
<title>Sound Vibes</title>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Entro</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>
<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">                
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.php"><img src="musicvibes.png" alt="not found" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
              <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="small"> <a href="index.php">Home</a> </li>
                      <li class="small"> <a href="about.php">About</a> </li>
                      <li class="small"> <a href="concerts.php">Concerts </a> </li>
                      <li class="small"> <a href="musics.php">Musics</a> </li>
                      <li class="small"> <a href="contact.php">Contact</a> </li>
                      <li class="small"> <a href="signup.php">Sign Up</a> </li>
  <li><?php
                      if(isset($_SESSION['username'])) {
      echo '<a href="logout.php" class="log">Logout</a>'; // Logout link
  } else {
      echo '<a href="login1.php" class="log">Login</a>'; // Login link
  }
  ?></a></li>
      
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 

    <!-- end header inner -->

    <!-- end header -->
  </div>
  </header>