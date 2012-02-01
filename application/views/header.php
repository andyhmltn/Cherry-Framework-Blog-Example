<html>
<head>
<title><?php if(isset($title)) { echo $title . "-" . APPLICATION_NAME; } else { echo APPLICATION_NAME; } ?></title>

<?php $html->_Css('bootstrap'); ?>
</head>
<body>
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/blog/">Blog</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="">
                <a href="/blog/">View all posts</a>
              </li>
              <?php if(!User::isLoggedIn()) { ?>
              <li class="">
                <a href="/blog/admin/login">Login</a>
              </li>
              <li class="">
                <a href="/blog/admin/add">Sign Up</a>
              </li>
           	  <?php } else {?>
              <li class="">
                <a href="/blog/posts/add">Add New Post</a>
              </li>
              <li class="divider-vertical"></li>
              <li class="fixed-right">
                <a href="/blog/admin/logout">Logout</a>
              </li>
              <?php } ?>
            </ul>
          </div>
      </div>
    </div>
  </div>

	<div class="container" style="padding-top: 70px">
		<div class="content">
