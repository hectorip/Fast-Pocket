<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fast Pocket</title>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/general_style.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<nav class="top-bar" data-topbar>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <li><a href="#">Login</a></li>
            <li class="has-dropdown">
                <a href="#">About</a>
                <ul class="dropdown">
                    <li><a href="#">Contribute</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </li>
        </ul>
    </section>
</nav>

<div class="row">
    <div class="large-12 columns center">
        <a class="hyper-title" href="#">Fast Pocket</a>
    </div>
</div>


<article class="mainArticle">
    <div class="row">
        <div class="small-4 medium-4 large-4 columns">
            Read your pocket articles now!
        </div>
        <div class="small-4 medium-4 large-4 columns">
            Choose your article depending of your free time.
        </div>
        <div class="small-4 medium-4 large-4 columns">
            It's Free!
        </div>
    </div>
</article>


<script src="foundation/js/vendor/jquery.js"></script>
<script src="foundation/js/foundation.min.js"></script>
<script>
    $(document).foundation();
    $(document).ready(function(){
        h = $(window).height();
        $("body").height(h);
    });
</script>
</body>
</html>
