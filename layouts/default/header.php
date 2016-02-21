
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
    <meta name="author" contant="Onur Altınsoy <info@onuraltinsoy.com>">
    <title>Crescendo PHP Framework</title>
    <link rel="icon" href="assets/img/favicon.png">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/queries.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/assets/css/font-awesome.css" rel="stylesheet">
	  <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.assets/js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<header class="clearfix">
		    <div class="logo col-md-3"><img src="assets/img/logo.png"></div>
		    <nav class="clearfix">
            <ul class="clearfix">
                <li><a href="?r=site/index">Home</a></li>
                <li><a href="?r=post/index">Blog</a></li>
                <?php if(isset($_SESSION['username'])): ?>
                <li><a href="?r=post/myposts">My Posts</a></li>
                <li><a href="?r=post/create">Add Posts</a></li>
                <?php endif; ?>
                <li><a href="https://github.com/onuraltinsoy/crescendo" target="_blank">Download</a></li>
                <?php if(isset($_SESSION['username'])): ?>
                <li><a href="?r=user/logout">Logout</a></li>
                <li><a href="?r=user/update&id=<?php echo $_SESSION['id']; ?>"><img src="assets/img/user/default.png" style="width: 18px;"><?php echo $_SESSION['username']; ?></a></li>
                <?php endif; ?>
                <?php if(!isset($_SESSION['username'])): ?>
                <li><a href="?r=user/login">Login/Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <div class="pullcontainer">
        <a href="#" id="pull"><i class="fa fa-bars fa-2x"></i></a>
        </div>     
		</header>
