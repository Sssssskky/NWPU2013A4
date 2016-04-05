<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My HomePage</title>
    <link rel="stylesheet" href="/angequan/Public/css/bootstrap.css">
<script src="/angequan/Public/js/jquery.js"></script>
<script src="/angequan/Public/js/bootstrap.min.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="/angequan/Public/css/common.css" />
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
            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                </form>
                <li><a href="#">Regist</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
    <div class="container">
        <div class="user">
            <span class="" style="font-size:36px;">Turing</span>
            <span style="margin-left:30px;font-size:20px">Judgement:    </span>
            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
            <br>
            <span>Email:dijkstra@floyd.com</span>
        </div>
        <div class="left">
            <div class="dialog">
                <div class="head">
                    As a Employer
                </div>
                <div class="item">
                    <div class="info">
                        <span style="color:blue">A Small Ball</span>
                        <span style="margin-left:20px;color:green">Award:200￥</span>
                        <span>Contest Job | Status:Open (9 days left) | 8 bids</span>
                    </div>
                    <div class="dscrp">
                        Description: blablablibli.....
                    </div>
                    <div class="bidlist">
                        <span>1. Provider：hbshengtian </span>
                        <button>download file</button>
                        <input type="radio">
                        <button>pay for this</button>
                        <br>
                        <span>2. Provider：hbsheng </span>
                        <button>download file</button>
                    </div>
                </div>
                <div class="item">
                    <div class="info">
                        <span style="color:blue">A Small Ball</span>
                        <span style="margin-left:20px;color:green">Award:200￥</span>
                        <span>Contest Job | Status:Open (9 days left) | 8 bids</span>
                    </div>
                    <div class="dscrp">
                        Description: blablablibli.....
                    </div>
                    <div class="bidlist">
                        <span>1. Provider：hbshengtian </span>
                        <input type="radio">
                        <span>2. Provider：hbsheng </span>
                        <input type="radio">
                        <span>2. Provider：hbsheng </span>
                        <input type="radio">
                        <span>2. Provider：hbsheng </span>
                        <input type="radio">
                        <button>choose</button>
                    </div>
                </div>
                <div class="item">
                    <div class="info">
                        <span style="color:blue">A Small Ball</span>
                        <span style="margin-left:20px;color:green">Award:200￥</span>
                        <span>Contest Job | Status:Open (9 days left) | 8 bids</span>
                    </div>
                    <div class="dscrp">
                        Description: blablablibli.....
                    </div>
                    <div class="bidlist">
                        <span>Provider：hbshengtian </span>
                        <button>download file</button>
                        <br>
                        <button>pay for this</button>
                    </div>
                </div>
            </div>
            <div class="dialog">
                <div class="head">
                    As a Provider
                </div>
                <div class="item">
                    <div class="info">
                        <span style="color:blue">A Forceful Ball</span>
                        <span style="margin-left:20px;color:green">Award:200￥</span>
                        <span>Contest Job | Status:Open (9 days left) | 8 bids</span>
                        <br>
                        <span>Employer：hbshengtian</span>
                    </div>
                    <div class="dscrp">
                        Description: blablablibli.....
                    </div>
                    <div class="bidlist">
                        <span>File input:</span>
                        <input type="file">
                    </div>
                </div>
            </div>
        </div>
        <div class="right">

        </div>
    </div>
</body>

</html>