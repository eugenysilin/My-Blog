<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen"/>
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css"
          media="screen"/>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css"
          media="screen"/>
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script src="js/function.js"></script>
</head>
<body>
<div class="container-fluid page">
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://blog.my/">My Blog</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li<?=
                        'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] == 'http://blog.my/index.php'
                            ? ' class="active"' : '' ?>>
                            <a href="index.php">
                                Home
                            </a>
                        </li>
                        <li<?=
                        'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] == 'http://blog.my/about.php'
                            ? ' class="active"' : '' ?>>
                            <a href="about.php">About Us</a>
                        </li>
                        <li<?=
                        'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] == 'http://blog.my/blog.php'
                            ? ' class="active"' : '' ?>>
                            <a href="blog.php">Blog</a>
                        </li>
                        <li<?=
                        'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] == 'http://blog.my/gallery.php'
                            ? ' class="active"' : '' ?>>
                            <a href="gallery.php">Gallery</a>
                        </li>
                        <li<?=
                        'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] == 'http://blog.my/contact.php'
                            ? ' class="active"' : '' ?>>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left site_search" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>