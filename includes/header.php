<?php
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $SITE_TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $SITE_DESCRIPTION; ?>">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <!-- Start Header  -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="">WORK<span>.IT</span></a>
            </div>
            <a href="javascript:void(0)" class="ham-burger">
                <span></span>   
                <span></span>
            </a>
            <div class="nav">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#service">AI Recommender</a></li>
                    <li><a href="#classes">Classes</a></li>
                    <li><a href="#schedule">Schedule</a></li>
                    <li><a href="#login">Login</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- End Header  -->
</body>
</html>