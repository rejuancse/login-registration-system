<?php
    $filepath = realpath(dirname(_FILE__));
    include_once $filepath.'/./lib/Session.php';
    Session::init();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Login/Registration</title>
</head>

<?php
    if(isset($_GET['action']) && $_GET['action'] == "logout") {
        Session::destroy();
    }
?>

<body>

<!-- Header Section -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12"> <br>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">WebSiteName</a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <?php 
                            $id = Session::get("id");
                            $userlogin = Session::get("login");
                            if($userlogin == true) { ?>
                                <li><a href="profile.php?id=<?php echo $id; ?>">Profile</a></li>
                                <li><a href="?action=logout">Logout</a></li>
                            <?php }else { ?>
                                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->