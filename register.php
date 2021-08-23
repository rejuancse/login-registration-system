<?php 
include('layouts/header.php'); 
include('lib/User.php'); 

$user = new User();
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $usrRegi = $user->userRegistration($_POST);
}
?>

<!-- UserList -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h2>User Registration</h2>
                    </div>

                    <div class="panel-body">
                        <div style="width: 520px; margin: 0 auto">

                            <?php
                                if(isset($usrRegi)) {
                                    echo $usrRegi;
                                }
                            ?>

                            <form action="" method="POST">
                                <div class="form-group">
                                    <label class="form-label" for="name">Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="name..."/>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="username">username</label>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="username..."/>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email..."/>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" />
                                    
                                </div>

                                <div class="pt-1 mb-5 pb-1">
                                    <button class="btn btn-success" type="submit" name="register">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php'); ?>
