<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My HomePage</title>
    <link rel="stylesheet" href="/angequan/Public/css/bootstrap.css">
<script src="/angequan/Public/js/jquery.js"></script>
<script src="/angequan/Public/js/bootstrap.min.js"></script>

</head>
<style>
    .container {
        width: 960px;
    }
    
    .container > .left_c {
        float: left;
        width: 400px;
    }
    
    .container > .right_c {
        margin-left: 660px;
        width: 400px;
    }
    
    .banner > .banner_font_s {
        font-size: 13px;
        display: block;
    }
    
    .list_group {
        padding-top: 30px;
        width: 600px;
    }
    
    .list_group > .list-group-item > span {
        font-size: 14px;
    }
    
    .mybutton {
        padding-top: 40px;
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
        <div class="content">
            <div class="list_group">
                <li class="list-group-item"><span style="font-size:28px">Post a Job</span></li>
                <li class="list-group-item"><span>Job Name</span>
                    <br>
                    <input class="text" size="16px" style="width:400px" placeholder="Edit hunt text in the properties pannel">
                    <br>
                    <br>

                    <span>Select a JobType</span>
                    <br>
                    <input type="radio" name="jobtype" value="radio">Contract &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="radio" name="jobType" value="radio"> Contest &nbsp; &nbsp;
                    <br>
                    <br>

                    <span>Select a Category</span>
                    <br>
                    <select>
                        <option value="Add list items via properties panel">Add list items via properties panel</option>
                        <option selected value="List Item2">List Item2</option>
                        <option value="List Item3">List Item3</option>
                        <option value="List Item4">List Item4</option>
                        <option value="List Item5">List Item5</option>
                        <option value="List Item6">List Item6</option>
                    </select>
                    <br>
                    <br>

                    <span>Job Reward(￥):</span>
                    <br>
                    <input class="text" size="16px" style="width:400px" placeholder="Edit hunt text in the properties pannel">
                    <br>
                    <br>

                    <span>Job Duration(Days):</span>
                    <br>
                    <input class="text" size="16px" style="width:400px" placeholder="Edit hunt text in the properties pannel">
                    <br>
                    <br>

                    <span>Describe your requirements:</span>
                    <br>
                    <!--<input class="text" style="width:400px;height:400px;font-size:12px" placeholder="Edit hunt text in the properties pannel"><br>-->
                    <textarea class="text" style="width:550px;height:250px;font-size:12px" placeholder="Edit hunt text in the properties pannel"></textarea>
                    <br>
                    <br>
                </li>
                <li class="list-group-item">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="btn btn-primary btn-large">Finish</a></p>
                </li>

            </div>
        </div>
    </div>
</body>

</html>