<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My HomePage</title>
    <link rel="stylesheet" href="/angequan/Public/css/bootstrap.css">
<script src="/angequan/Public/js/jquery.js"></script>
<script src="/angequan/Public/js/bootstrap.min.js"></script>

    <body>
        <nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('Index/index');?>">Micro Service</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo U('User/homepage');?>">My Homepage <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo U('Job/set');?>">Browse Jobs</a></li>
                <li><a href="<?php echo U('Job/post');?>">Post a Job</a></li>
                <li><a href="<?php echo U();?>">Contact Us</a></li>
                <li><a href="">Regist</a></li>
                <li><a href="">Sign In</a></li>
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>-->
            </ul>
            <!--<form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>-->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
        <div class="container" style="width:960px">
            <div class="page-header">
                <h1>Micro Service</h1>
            </div>
            <!--<ul class="nav nav-pills">
                <li class="active">
                    <a href="#">My Homepage</a>
                </li>
                <li><a href="#">Browse Jobs</a></li>
                <li><a href="#">Post a Job</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">Sign in</a></li>
            </ul>-->

            <div class="row">
                <div class="col-md-10">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" style="height:300px">
                            <div class="item active">
                                <center><img src="image/1.jpg" alt="project1"></center>
                            </div>
                            <div class="item">
                                <center><img src="image/2.jpg" alt="project2"></center>
                            </div>
                            <div class="item">
                                <center><img src="image/3.jpg" alt="project3"></center>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <center>
                        <p><a class="btn btn-primary btn-info" href="#" role="button">Register Now</a></p>
                    </center>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="alert-warning">
                        <center>
                            <h1>How it Works</h1>
                            <p>For Employer</p>
                            <p>Post a job>Wait for bids>Select the best>Realease reward</p>
                            <p>For Provider</p>
                            <p>Choose a job>Provide the service >Wait for results >Get your paid</p>
                            <p><a class="btn btn-primary btn-warning" href="#" role="button">More Details</a></p>
                        </center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="alert-success">
                        <center>
                            <h1>Post a Jobs</h1>
                            <p>Do You Need Professional Services...</p>
                            <p>...but can't find the right person?</p>
                            <p>You don't need full time help, just quality freelance?</p>
                            <p>Don't limit your business potential, just limit the hassle!</p>
                            <p><a class="btn btn-primary btn-success" href="#" role="button">Post a Job Now</a></p>
                        </center>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="alert-info">
                        <center>
                            <h1>Job Categories</h1>
                            <p>Logo & Graphic Design</p>
                            <p>Website & Online Store</p>
                            <p>Creative Greetings & Multimedia Production & App & Software</p>
                            <p>Design & Decorating & Translation & Copywriting</p>
                            <p><a class="btn btn-primary btn-info" href="#" role="button">All Services</a></p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>