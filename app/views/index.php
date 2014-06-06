<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fast Pocket</title>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans|Muli:300' rel='stylesheet' type='text/css'>
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
<div class="row">
    <div class="small-12 medium-12 large-12 columns">
        Register and start to Spritz your Pocket articles.
    </div>
</div>


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
