<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="/css/main.css" type="text/css"/>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">beCyCle</a>
    </div>
    <div class="collapse navbar-collapse" id="nav-collapse">
        <ul class="nav navbar-nav">
            <li<?php if($active == "stock") { echo " class=\"active\""; }?>><a href="/stock">Stock</a></li>
            <li<?php if($active == "about") { echo " class=\"active\""; }?>><a href="/about">About</a></li>
            <li<?php if($active == "basket") { echo " class=\"active\""; }?>><a href="/basket">Basket</a></li>
        </ul>
        <div class="pull-right hidden-xs">
            <span class="navbar-text hidden-sm">Connect with us:</span>
            <a class="btn btn-connect navbar-btn" id="connect-fb" target="_blank" href="https://www.facebook.com/Thomas-Sinclair-Balfour-Bakery-Shoreside-Shapinsay-111627338910780/"><i class="fa fa-facebook"></i></a>
        </div>
    </div>
</nav>
<section>
    <?php echo $content; ?>
</section>
<footer id="footer">
    <div class="container">
        <p>&copy; Thomas Sinclair & Balfour Bakery <?php echo date("Y");?> <span class="pull-right">Designed by Scott Learmonth - <a href="/admin">Admin</a></span></p>
    </div>
</footer>
</body>
</html>