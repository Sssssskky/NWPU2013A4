<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My HomePage</title>
    <link rel="stylesheet" href="/angequan/Public/css/bootstrap.css">
<script src="/angequan/Public/js/jquery.js"></script>
<script src="/angequan/Public/js/bootstrap.min.js"></script>
    </head>
        <style>
            .container{
                margin-top: 100px;
                margin-left: 120px;
                width: 900px;
            }
            
            .container > .left_c{
                float: left;
                width: 400px;
            }
            
            .container > .right_c{
                margin-left: 660px;
                width: 400px;
            }
            
            .banner > .banner_font_s{
                font-size: 13px;
                display: block;
            }
            
            .list_group{
                padding-top: 30px;
                width:600px;
            }
            
            .list_group > .list-group-item > span{
                font-size: 20px;
            }
            
            .mybutton{
                padding-top:40px;
            }
        </style>    
    
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
        <div class="container">
        <div class="left_c">
            <div class="content">
                <div class="banner">
                    <div class="banner_font">
                        <h1>Job Name</hi>
                            <button type="button" class="btn btn-default btn-sm">
                              <span class="glyphicon glyphicon-thumbs-up"></span>like
                            </button>
                    </div>
                    <div class="banner_font_s">
                        <span>Employer: </span><span style="color:#428BCA;">hbshengtian</span> <span>|  Job ID: 29910  |  Category: </span><span style="color:#428BCA;">Other Services</span> <span> |  Job type: </span><span style="color:#428BCA;">Contest</span>
                    </div>
                </div>
                <div class="list_group">
                    <li class="list-group-item"><span>Job Status:</span>Open (9 days left)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>Bidding Started:</span>Mar 23, 2016 04:46 EDT</li>
                    <li class="list-group-item"><span>Job Reward:</span>￥200&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span>Bidding Ends:</span>Apr 01, 2016 04:46 EDT</li>
                    <li class="list-group-item"><span>Description</span><br>blablablibli......<br><br><br></li>
                </div>
                <div class="mybutton">
                    <button type="button" class="btn btn-primary">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Place Bid &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</button>
                </div>
            </div>
        </div>
        <div class="right_c">
            <div class="content">
              <div class="unit1">
                  <h1>Want to work on this job?</h1>
                  <p>Sign in to place your bid,you will get</p>
                  <p>access to all the jobs listed at Witmart.</p>
                  <p><a href="#" class="btn btn-success btn-large">Sign in to Place Bid</a></p>
                  <p>Don't have an account?<a href="#">Register now</a></p>
              </div>
              <div class="unit2">
                  <h1>Custom services from talents</h1>
                  <p><a href="#" class="btn btn-primary btn-large">Post a job like this</a></p>
              </div>
            </div>
        </div>
        </div>      
    </body>
</html>