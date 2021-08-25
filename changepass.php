<?php 
include('lib/User.php'); 
include('layouts/header.php');
Session::checkSession();

if(isset($_GET['id'])) {
    $userid = (int)$_GET['id'];
}
$user = new User();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updatepass'])) {
    $updatepass = $user->updatePassword($userid, $_POST);
}
?>

<!-- UserList -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h2>Password Change <span class="pull-right"><a href="profile.php?id=<?php echo $userid; ?>" class="btn btn-success">Back</a></h2>
                    </div>

                    <div class="panel-body">
                        <div style="width: 520px; margin: 0 auto">
                            <?php 
                                if($updatepass) {
                                    echo $updatepass;
                                } 
                            ?>
                            
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label class="form-label" for="old_pass">Old Password</label>
                                    <input type="password" id="old_pass" name="old_pass" class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="password">New Password</label>
                                    <input type="password" id="password" name="password" class="form-control"/>
                                </div>

                                <div class="pt-1 mb-5 pb-1">
                                    <button class="btn btn-success" type="submit" name="updatepass">Update</button>
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
