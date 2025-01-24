<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/back-office.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav>
        <!-- logo -->
        <div class="logo">
            <img src="/assets/image/logo.jpg" alt="logo">
        </div>
        <!-- User Menu -->
        <div class="user-menu">
            <span>User Name</span>
            <div class="profile-picture" onclick="toggleMenu()">
                <img src="/assets/image/maison1.jpg" alt="profile picture" class="profile-img">
            </div>
        </div>
        <!-- Content menu -->
        <div id="content-menu" class="content-menu">
            <ul>
                <li><a href="#">Add Housing</a></li>
                <li><a href="#">List Rental</a></li>
                <li><a href="#">List Housing</a></li>
                <li><a href="#" class="logout">Log Out</a></li>
            </ul>
        </div>
    </nav>

    <script src="/assets/js/front-office.js"></script>
</body>
</html>
