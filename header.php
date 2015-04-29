<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="style.min.css">
    <script type="text/javascript" src="script.min.js"></script>
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