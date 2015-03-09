<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog | about us</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li<?= 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] == 'http://blog.my/index.php' ? ' class="active"' : ''?>>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li<?= 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] == 'http://blog.my/about.php' ? ' class="active"' : ''?>>
                        <a href="about.php">About Us</a>
                    </li>
                    <li<?= 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] == 'http://blog.my/contact.php' ? ' class="active"' : ''?>>
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
    <div class="row">
        <div class="col-md-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore harum nesciunt
            similique. Esse et magni necessitatibus optio quis! Accusamus commodi cumque doloribus est laudantium
            necessitatibus nostrum praesentium rem rerum totam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore harum nesciunt
            similique. Esse et magni necessitatibus optio quis! Accusamus commodi cumque doloribus est laudantium
            necessitatibus nostrum praesentium rem rerum totam.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore harum nesciunt
            similique. Esse et magni necessitatibus optio quis! Accusamus commodi cumque doloribus est laudantium
            necessitatibus nostrum praesentium rem rerum totam.
        </div>

    </div>

</div>
</body>
</html>