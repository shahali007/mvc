<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Shahali Bogdadi">

    <title>MVC</title>
    <link href="http://localhost:9000/workstation/mvc/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost:9000/workstation/mvc/public/css/sb-admin.css" rel="stylesheet">
    <link href="http://localhost:9000/workstation/mvc/public/css/plugins/morris.css" rel="stylesheet">
    <link href="http://localhost:9000/workstation/mvc/public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="homr.php">MVC Framework by : Shahali</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Shahali Bogdadi <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
                </ul>
            </li>
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="home.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="divider"></li>
                <li class="active">
                    <a href="javascript:;" data-toggle="collapse" data-target="#category"><i class="fa fa-fw fa-arrows-v"></i> Category <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="category" class="collapse in">
                        <li><a href="addCategory">Add Category</a></li>
                        <li><a href="#">Category List</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:;" data-toggle="collapse" data-target="#post"><i class="fa fa-fw fa-arrows-v"></i> Post <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="post" class="collapse in">
                        <li><a href="#">Add Post</a></li>
                        <li><a href="#">Post List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        MVC <small>Framework</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </li>
                    </ol>


























<!-- Start Category List -->



<h2> :: Category List :: </h2>
<hr>
<?php
    foreach($cat as $key => $cate){
        echo $cate["name"]."<br/>";
    }
?>





<!-- End Category List -->



























                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <nav class="navbar navbar-inverse navbar-static-top" style="margin-bottom: 0;">
        <p class="text-center text-muted">
            <br>
            &copy 2011 -  <?php echo date("Y"); ?> <a href="http://www.shahali.me/">Shahali Bogdadi.</a> All rights reserved.
        </p>
    </nav>

    <!-- jQuery -->
    <script src="http://localhost:9000/workstation/mvc/public/js/jquery.js"></script>
    <script src="http://localhost:9000/workstation/mvc/public/js/bootstrap.min.js"></script>
</body>
</html>