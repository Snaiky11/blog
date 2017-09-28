<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>blog</title>
        <link rel="stylesheet" type="text/css" href="view/css/style.css">
        <link rel="stylesheet" type="text/css" href="view/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="view/css/bootstrap-social.css">
        <link rel="stylesheet" type="text/css" href="view/css/font-awesome.css">
        <script type="text/javascript" src="view/js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="view/js/bootstrap.js"></script>
        <script type="text/javascript" src="view/js/npm.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="backpage">
            <?php
                include 'view/header.php';
            ?>

            <div class="container-fluid">
                <div class="container-lg bg-light shadow">
                    <div class="container-md">
                        <div class="container-fluid">
                            <?php include 'view/carousel.php' ?>
                        </div>
                        <div class="spacer"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumbnail">
                                    <img src="view\css\img\background5.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Thumbnail label</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="thumbnail">
                                    <img src="view\css\img\gaming-wallpapers-25.jpg" alt="...">
                                    <div class="caption">
                                        <h3>Thumbnail label</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumbnail">
                                    <img src="view\css\img\sina.png" alt="...">
                                    <div class="caption">
                                        <h3>Thumbnail label</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="thumbnail">
                                    <img src="view\css\img\sina.png" alt="...">
                                    <div class="caption">
                                        <h3>Thumbnail label</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="container-xs">
                            <div class="container-fluid" id="live">
                                <h3 class="events bg-title">WebTV</h3>
                                    <?php include 'view/twitch.php' ?>
                            </div>
                            <div class="spacer"></div>
                            <div class="container-fluid container-full">
                                <?php include 'view/discord.php' ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
