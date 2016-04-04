<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My HomePage</title>
    <link rel="stylesheet" href="/angequan/Public/css/bootstrap.css">
<script src="/angequan/Public/js/jquery.js"></script>
<script src="/angequan/Public/js/bootstrap.min.js"></script>
  <body>
	<nav class="navbar navbar-inverse navbar-default navbar-fixed-top" role="navigation">
		<h3 class="navbar-text navbar-btn"><strong>Micro Service</strong></a></h3>
		<ul class="nav nav-pills">
			<li class="navbar-btn" ><a href="#"><strong>My Homepage</strong></a></li> 
			<li class="navbar-btn" ><a href="#"><strong>Browse Jobs</strong></a></li>
			<li class="navbar-btn" ><a href="#"><strong>Post a Job</strong></a></li>
			<li class="navbar-btn" ><a href="#"><strong>Contact us</strong></a></li>
			<li class="navbar-btn navbar-right"><a href="#">Register</a></li>
			<li class="navbar-btn navbar-right"><a href="#">Sigh in</a></li>
		</ul>
	</nav>


<div id="loginModal" class="modal show top">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
	    <button type="button" class="close">x</button>
        <h1 class="text-center text-primary">Find Passport</h1>
      </div>
      <div class="modal-body">
        <form action="" class="form col-md-12 center-block">
          <div class="form-group">
            <input type="username" class="form-control input-lg" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="email" class="form-control input-lg" placeholder="Email">
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-lg btn-block">Find Passport</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

  </body>
</html>